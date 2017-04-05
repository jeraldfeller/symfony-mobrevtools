<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 4/6/2017
 * Time: 12:01 AM
 */

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use AppBundle\Entity\OfferGroups;
use AppBundle\Entity\AffiliateNetwork;
use AppBundle\Entity\OfferGroupsOffers;
use AppBundle\Entity\OfferPresets;
use Doctrine\ORM\Tools\Pagination\Paginator;


class CronSearchPresetsCommand extends ContainerAwareCommand {

    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('cron:search-presets')

            // the short description shown while running "php bin/console list"
            ->setDescription('Fetches Offers via Cake API Integration')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to fetch offers in CAKE API...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $cakeApi = $this->getContainer()->get('app.cake_api');
        $em = $this->getContainer()->get('doctrine')->getManager();
        $offerPresets = $em
            ->getRepository('AppBundle:OfferPresets')
            ->findAll();
        // outputs multiple lines to the console (adding "\n" at the end of each line)
        for($count = 0; $count < count($offerPresets); $count++){
            $output->writeln([
                $offerPresets[$count]->getPresetName()
            ]);

            $groupEntity = $offerPresets[$count]->getOfferGroup();
            $presetKeywords = $offerPresets[$count]->getKeywords();
            $network = $em
                ->getRepository('AppBundle:AffiliateNetwork')
                ->findAll();

            $batch = 100;
            $x = 0;

            for($i = 0; $i < count($network); $i++){


                $offers =  json_decode( $cakeApi->getOffersAction($network[$i]->getAffiliateId(), $network[$i]->getApiKey(), $network[$i]->getApiUrl())->getContent(), true);
                foreach($offers['d']['offers'] as $row){
                    if($row['campaign_id'] != null){
                        $offersAffiliate =  json_decode( $cakeApi->getCampaignAffiliateAction($network[$i]->getAffiliateId(),
                                                                                              $network[$i]->getApiKey(),
                                                                                              $network[$i]->getApiUrl(),
                                                                                              $row['campaign_id'])->getContent(), true);
                        $offerUrl = $offersAffiliate['d']['campaign']['creatives'][0]['unique_link'];
                    }else{
                        $offerUrl = null;
                    }
                        if($row['offer_status']['status_name'] != 'Inactive'){
                            if($presetKeywords != ''){
                                $keys = explode(',',$presetKeywords);

                                for($y = 0; $y < count($keys); $y++){
                                    $hasMatch = array();
                                    $hasAndMatch = array();
                                    $hasAnd = false;
                                    $key = strtolower($keys[$y]);
                                    if(strpos($key, 'or') !== false){
                                        $multiKeys = explode('{or}', $key);
                                        for($z = 0; $z < count($multiKeys); $z++){
                                            if($z == (count($multiKeys) - 1) && strpos($multiKeys[$z], '{and}') !== false){
                                                $hasAnd = true;
                                                $andKey = preg_replace('/\s+/', '', substr($multiKeys[$z], strpos($multiKeys[$z], '{and}')));
                                                $subKey = substr($multiKeys[$z], 0, strpos($multiKeys[$z], "{and}"));
                                            }else{
                                                $subKey = $multiKeys[$z];
                                            }
                                            if(strpos(strtolower($row['offer_name']), $subKey) !== false){
                                                $hasMatch[] = true;
                                            }

                                            if($hasAnd == true){
                                                $andMultiKeys = explode('{and}', $andKey);
                                                for($w = 1; $w < count($andMultiKeys); $w++){
                                                    $andMultiKey = strtolower($andMultiKeys[$w]);
                                                    if(strpos(strtolower($row['offer_name']), $andMultiKey) !== false){
                                                        $hasAndMatch[] = true;
                                                    }else{
                                                        $hasAndMatch[] = false;
                                                    }
                                                }
                                            }
                                        }
                                    }else if(strpos($key, '{and}') !== false){
                                        $hasAnd = true;
                                        $hasMatch[] = true;
                                        $andMultiKeys = explode('{and}', preg_replace('/\s+/', '', $key));
                                        for($v = 0; $v < count($andMultiKeys); $v++){
                                            $andMultiKey = strtolower($andMultiKeys[$v]);
                                            if(strpos(strtolower($row['offer_name']), $andMultiKey) !== false){
                                                $hasAndMatch[] = true;
                                            }else{
                                                $hasAndMatch[] = false;
                                            }
                                        }


                                    }
                                    else{
                                        if(strpos(strtolower($row['offer_name']), $key) !== false){
                                            $hasMatch[] = true;
                                        }
                                    }



                                    if(in_array(1, $hasMatch)){
                                        if($hasAnd == true){
                                            if(!in_array(0, $hasAndMatch)){
                                                $offerEntity = $em
                                                    ->getRepository('AppBundle:OfferGroupsOffers')
                                                    ->findBy(array(
                                                            'offerId' => $row['offer_id']
                                                        )
                                                    );
                                                if(!$offerEntity){
                                                    $doctrine = new OfferGroupsOffers();
                                                    $doctrine->setAffiliateNetworkId($network[$i]->getAffiliateNetworkId());
                                                    $doctrine->setOfferGroup($groupEntity);
                                                    $doctrine->setCampaignId($row['campaign_id']);
                                                    $doctrine->setOfferId($row['offer_id']);
                                                    $doctrine->setOfferContractId($row['offer_contract_id']);
                                                    $doctrine->setOfferName($row['offer_name']);
                                                    $doctrine->setNetworkName($network[$i]->getNetworkName());
                                                    $doctrine->setVerticalName($row['vertical_name']);
                                                    $doctrine->setPayout($row['payout']);
                                                    $doctrine->setPriceFormat($row['price_format']);
                                                    $doctrine->setDescription($row['description']);
                                                    $doctrine->setRestrictions($row['restrictions']);
                                                    $doctrine->setAdvertiserExtendedTerms($row['advertiser_extended_terms']);
                                                    $doctrine->setStatus($row['offer_status']['status_name']);
                                                    $doctrine->setOfferUrl($offerUrl);
                                                    $em->persist($doctrine);
                                                }

                                            }
                                        }else{
                                            $offerEntity = $em
                                                ->getRepository('AppBundle:OfferGroupsOffers')
                                                ->findBy(array(
                                                        'offerId' => $row['offer_id']
                                                    )
                                                );
                                            if(!$offerEntity){
                                                $doctrine = new OfferGroupsOffers();
                                                $doctrine->setAffiliateNetworkId($network[$i]->getAffiliateNetworkId());
                                                $doctrine->setOfferGroup($groupEntity);
                                                $doctrine->setCampaignId($row['campaign_id']);
                                                $doctrine->setOfferId($row['offer_id']);
                                                $doctrine->setOfferContractId($row['offer_contract_id']);
                                                $doctrine->setOfferName($row['offer_name']);
                                                $doctrine->setNetworkName($network[$i]->getNetworkName());
                                                $doctrine->setVerticalName($row['vertical_name']);
                                                $doctrine->setPayout($row['payout']);
                                                $doctrine->setPriceFormat($row['price_format']);
                                                $doctrine->setDescription($row['description']);
                                                $doctrine->setRestrictions($row['restrictions']);
                                                $doctrine->setAdvertiserExtendedTerms($row['advertiser_extended_terms']);
                                                $doctrine->setStatus($row['offer_status']['status_name']);
                                                $doctrine->setOfferUrl($offerUrl);
                                                $em->persist($doctrine);
                                            }
                                        }

                                    }

                                }


                            }else{
                                $offerEntity = $em
                                    ->getRepository('AppBundle:OfferGroupsOffers')
                                    ->findBy(array(
                                            'offerId' => $row['offer_id']
                                        )
                                    );
                                if(!$offerEntity){
                                    $doctrine = new OfferGroupsOffers();
                                    $doctrine->setAffiliateNetworkId($network[$i]->getAffiliateNetworkId());
                                    $doctrine->setOfferGroup($groupEntity);
                                    $doctrine->setCampaignId($row['campaign_id']);
                                    $doctrine->setOfferId($row['offer_id']);
                                    $doctrine->setOfferContractId($row['offer_contract_id']);
                                    $doctrine->setOfferName($row['offer_name']);
                                    $doctrine->setNetworkName($network[$i]->getNetworkName());
                                    $doctrine->setVerticalName($row['vertical_name']);
                                    $doctrine->setPayout($row['payout']);
                                    $doctrine->setPriceFormat($row['price_format']);
                                    $doctrine->setDescription($row['description']);
                                    $doctrine->setRestrictions($row['restrictions']);
                                    $doctrine->setAdvertiserExtendedTerms($row['advertiser_extended_terms']);
                                    $doctrine->setStatus($row['offer_status']['status_name']);
                                    $doctrine->setOfferUrl($offerUrl);
                                    $em->persist($doctrine);
                                }


                            }

                            if(($x % $batch) == 0){
                                $em->flush();
                            }

                        }

                }

            }




            $output->writeln([
                $offers['d']['success']
            ]);

        }

        $em->flush();
        $em->clear();

    }

}