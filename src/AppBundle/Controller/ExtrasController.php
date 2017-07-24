<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 4/6/2017
 * Time: 10:07 AM
 */
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;

use AppBundle\Entity\AdplexityAutomatedSettings;

class ExtrasController extends Controller{
    /**
     * @Route("/tools/ip-compiler", name="ipCompile")
     */
    public function showIpCompileAction()
    {
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $data16['data'] = array();
            $data24['data'] = array();
            file_put_contents("data_table_tmp_files/ip/16.txt", json_encode($data16, JSON_UNESCAPED_UNICODE));
            file_put_contents("data_table_tmp_files/ip/24.txt", json_encode($data24, JSON_UNESCAPED_UNICODE));
            return $this->render(
                'extras/ip-compile.html.twig', array('page' => 'IP Compiler')
            );
        }else{
            return $this->redirect('/user/login');
        }
    }
    /**
     * @Route("/extras/execute-compile-ip", name="executeIpCompile")
     */
    public function ipCompile()
    {
        $data = json_decode($_POST['param'], true);
        foreach($data as $row){
            $split = explode('.', $row['ip']);
            $ipMask = $split[0] . '.' . $split[1] . '.0.0/16';
            $ipMask24 = $split[0] . '.' . $split[1] . '.' . $split[2] . '.0/24';
            $mask16[$ipMask][] = array(1);
            $mask24[$ipMask24][] = array(1);
        }
        foreach($mask16 as $key => $value){
            $data16['data'][] = array(
                $key,
                count($value)
            );
        }
        foreach($mask24 as $key => $value){
            $data24['data'][] = array(
                $key,
                count($value)
            );
        }
        file_put_contents("data_table_tmp_files/ip/16.txt", json_encode($data16, JSON_UNESCAPED_UNICODE));
        file_put_contents("data_table_tmp_files/ip/24.txt", json_encode($data24, JSON_UNESCAPED_UNICODE));
        return new Response(json_encode(true));
    }
	
	/**
     * @Route("/tools/adplexity", name="adplexity")
     */
    public function showAdplexityAction()
    {
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
			$data['data']  = array();
					file_put_contents("data_table_tmp_files/adplexity/report.txt", json_encode($data, JSON_UNESCAPED_UNICODE));
			$countries = $this->getAdplexityCountries();
			$adTypes = $this->getAdplexityAdTypes();
			$networks = $this->getAdplexityNetworks();
			$sources = $this->getAdplexitySources();
			$options = array(
				'countries' => $countries,
				'adTypes' => $adTypes,
				'networks' => $networks,
				'sources' => $sources
			);
            return $this->render(
                'extras/adplexity.html.twig', array(
				'options' => $options,
				'page' => 'Adplexity')
            );
        }else{
            return $this->redirect('/user/login');
        }
    }

    /**
     * @Route("/tools/adplexity/automated")
     */
    public function showAdplexityAutomatedAction()
    {
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $data['data']  = array();
            file_put_contents("data_table_tmp_files/adplexity/report-automated.txt", json_encode($data, JSON_UNESCAPED_UNICODE));
            $presets = $this->getAdplexityPresets();

            return $this->render(
                'extras/adplexity-automated.html.twig', array(
                    'presets' => $presets,
                    'settings' => $this->getAdplexityAutomatedSettings(),
                    'page' => 'Automated')
            );
        }else{
            return $this->redirect('/user/login');
        }
    }

    /**
     * @Route("/tools/adplexity/search-presets")
     */
    public function showAdplexitySearchPresetsAction()
    {
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $data['data']  = array();
            file_put_contents("data_table_tmp_files/adplexity/report.txt", json_encode($data, JSON_UNESCAPED_UNICODE));
            $countries = $this->getAdplexityCountries();
            $adTypes = $this->getAdplexityAdTypes();
            $networks = $this->getAdplexityNetworks();
            $sources = $this->getAdplexitySources();
            $options = array(
                'countries' => $countries,
                'adTypes' => $adTypes,
                'networks' => $networks,
                'sources' => $sources
            );
            return $this->render(
                'settings/adplexity-search-presets.html.twig', array(
                    'options' => $options,
                    'page' => 'Search Presets')
            );
        }else{
            return $this->redirect('/user/login');
        }
    }

    public function getAdplexityAutomatedSettings(){
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('AppBundle:AdplexityAutomatedSettings')->findOneBy(array('id' => 1));
        $data = array();
        if($entity){

            $countries = explode(',', $entity->getCountries());
            $adTypes = explode(',', $entity->getAdType());
            $affiliateNetworks = explode(',', $entity->getAffiliateNetwork());
            $trafficSources = explode(',', $entity->getTrafficSource());
            $data = array(
                'aggregation' => $entity->getAggregation(),
                'metric' => $entity->getMetric(),
                'dateRange' => $entity->getDateRange(),
                'daysRunning' => $entity->getDaysRunning(),
                'countries' => $countries,
                'adType' => $adTypes,
                'affiliateNetwork' => $affiliateNetworks,
                'trafficSource' => $trafficSources
            );
        }

        return $data;
    }

    public function getAdplexityPresets(){
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('AppBundle:AdplexityAutomatedSettings')->findAll();
        $data = array();
        if($entity){
            for($x = 0; $x < count($entity); $x++){
                $data[] = array(
                    'id' => $entity[$x]->getId(),
                    'label' => $entity[$x]->getLabel()
                );
            }
        }

        return $data;
    }


    /**
     * @Route("/extras/execute-multiple-adplexity-settings")
     */
    public function executeMultipleAdplexitySettingsReport()
    {
        $data = json_decode($_POST['param'], true);
        $index = $data['index'];
        $presets = $data['preset'];
        if(isset($presets[$index])){
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AppBundle:AdplexityAutomatedSettings')->find($presets[$index]);
            if($entity){
                $return = array(
                    'success' => true,
                    'hasNext' => true,
                    'index' => $index + 1,
                    'presets' => array('index' => $index + 1, 'preset' => $data['preset']),
                    'data' => array(
                        'label' => $entity->getLabel(),
                        'aggregation' => $entity->getAggregation(),
                        'metric' => $entity->getMetric(),
                        'dateRange' => $entity->getDateRange(),
                        'daysRunning' => ($entity->getDaysRunning() != '' ? $entity->getDaysRunning() : null),
                        'countries' => $entity->getCountries(),
                        'adTypes' => ($entity->getAdType() != '' ? $entity->getAdType() : null),
                        'affiliateNetworks' => ($entity->getAffiliateNetwork() != '' ? $entity->getAffiliateNetwork() : null),
                        'trafficSources' => ($entity->getTrafficSource() != '' ? $entity->getTrafficSource() : null),
                        'count' => 100,
                        'action' => 'automate'
                    )
                );

            }else{
                $return = array(
                    'success' => true,
                    'hasNext' => false
                );
            }
        }else{
            $return = array(
                'success' => true,
                'hasNext' => false
            );
        }


        return new Response(
            str_replace('""', '', json_encode(
                $return
            ))
        );
    }


    /**
     * @Route("/extras/get-adplexity-report", name="getAdplexityReport")
     */
    public function getAdplexityReport()
    {
        $data = json_decode($_POST['param'], true);
		$url = 'https://mobile.adplexity.com/api/v1/top/'.$data['aggregation'].'?';
		$data['data']  = array();
		file_put_contents("data_table_tmp_files/adplexity/report.txt", json_encode($data, JSON_UNESCAPED_UNICODE));
		if($data['countries'] == 'all'){
			$countries = $this->getAdplexityCountries();
			$dataArray = array();
			foreach($countries as $country){
				
				$query = array(
					'metric' => $data['metric'],
					'date_range' => $data['dateRange'],
					'days_running' => $data['daysRunning'],
					'country' => $country['code'],
					'ad_type' => $data['adTypes'],
					'traffic_source' => $data['trafficSources'],
					'affiliate_network' => $data['affiliateNetworks'],
					'count' => $data['count']
				);
				
				$return = json_decode($this->forward('AppBundle:AdplexityApi:adplexityRequest', array('url' => $url,
				'query' => $query))->getContent(), true);

				if(!isset($return['errorMessage'])){
					if(count($return) > 0){
						switch($data['aggregation']){
							case 'tracking_domains':
								foreach($return['data'] as $row){
									if(isset($dataArray[$row['domain']])){
										$plus = $dataArray[$row['domain']]['count'];
										$dataArray[$row['domain']] = array(
										'count' =>  $row['count'] + $plus,
										'aggregationName' => $row['tracking_name']
									);	
									}else{
										
										$dataArray[$row['domain']] = array(
										'count' => $row['count'],
										'aggregationName' => $row['tracking_name']
									);	
									}
								}
							break;
							case 'lp_domains':
							
								foreach($return['data'] as $row){
									if(isset($dataArray[$row['domain']])){
										$plus = $dataArray[$row['domain']]['count'];
										$dataArray[$row['domain']] = array(
										'count' =>  $row['count'] + $plus,
										'aggregationName' => ''
									);	
									}else{
										
										$dataArray[$row['domain']] = array(
										'count' => $row['count'],
										'aggregationName' => ''
									);	
									}
								}
							break;
							case 'affiliate_domains':
						
								foreach($return['data'] as $row){
									if(isset($dataArray[$row['domain']])){
										$plus = $dataArray[$row['domain']]['count'];
										$dataArray[$row['domain']] = array(
										'count' =>  $row['count'] + $plus,
										'aggregationName' => $row['affiliate_name']
									);	
									}else{
										
										$dataArray[$row['domain']] = array(
										'count' => $row['count'],
										'aggregationName' => $row['affiliate_name']
									);	
									}
								}
							break;
							case 'offer_domains':
								foreach($return['data'] as $row){
									if(isset($dataArray[$row['domain']])){
											$plus = $dataArray[$row['domain']]['count'];
											$dataArray[$row['domain']] = array(
											'count' =>  $row['count'] + $plus,
											'aggregationName' => ''
										);	
										}else{
											
											$dataArray[$row['domain']] = array(
											'count' => $row['count'],
											'aggregationName' => ''
										);	
										}
								}
							break;
						}
						
						
					}else{
						$data['data']  = array();
					}
				}
				
		
			}
			
			foreach($dataArray as $key => $row){
				
				$data['data'][] = array(
										$key,
										$row['count'],
										$row['aggregationName']
					);
			}
			
			
			
			
		}else if(strpos($data['countries'], ',') != false){
			
			$countries = explode(',', $data['countries']);
			$dataArray = array();
			for($x = 0; $x < count($countries); $x++){
				$query = array(
					'metric' => $data['metric'],
					'date_range' => $data['dateRange'],
					'days_running' => $data['daysRunning'],
					'country' => $countries[$x],
					'ad_type' => $data['adTypes'],
					'traffic_source' => $data['trafficSources'],
					'affiliate_network' => $data['affiliateNetworks'],
					'count' => $data['count']
				);
				
				$return = json_decode($this->forward('AppBundle:AdplexityApi:adplexityRequest', array('url' => $url,
				'query' => $query))->getContent(), true);
				
				if(!isset($return['errorMessage'])){
					if(count($return) > 0){
						switch($data['aggregation']){
							case 'tracking_domains':
								foreach($return['data'] as $row){
									if(isset($dataArray[$row['domain']])){
										$plus = $dataArray[$row['domain']]['count'];
										$dataArray[$row['domain']] = array(
										'count' =>  $row['count'] + $plus,
										'aggregationName' => $row['tracking_name']
									);	
									}else{
										
										$dataArray[$row['domain']] = array(
										'count' => $row['count'],
										'aggregationName' => $row['tracking_name']
									);	
									}
								}
							break;
							case 'lp_domains':
							
								foreach($return['data'] as $row){
									if(isset($dataArray[$row['domain']])){
										$plus = $dataArray[$row['domain']]['count'];
										$dataArray[$row['domain']] = array(
										'count' =>  $row['count'] + $plus,
										'aggregationName' => ''
									);	
									}else{
										
										$dataArray[$row['domain']] = array(
										'count' => $row['count'],
										'aggregationName' => ''
									);	
									}
								}
							break;
							case 'affiliate_domains':
						
								foreach($return['data'] as $row){
									if(isset($dataArray[$row['domain']])){
										$plus = $dataArray[$row['domain']]['count'];
										$dataArray[$row['domain']] = array(
										'count' =>  $row['count'] + $plus,
										'aggregationName' => $row['affiliate_name']
									);	
									}else{
										
										$dataArray[$row['domain']] = array(
										'count' => $row['count'],
										'aggregationName' => $row['affiliate_name']
									);	
									}
								}
							break;
							case 'offer_domains':
							foreach($return['data'] as $row){
								if(isset($dataArray[$row['domain']])){
										$plus = $dataArray[$row['domain']]['count'];
										$dataArray[$row['domain']] = array(
										'count' =>  $row['count'] + $plus,
										'aggregationName' => ''
									);	
									}else{
										
										$dataArray[$row['domain']] = array(
										'count' => $row['count'],
										'aggregationName' => ''
									);	
									}
							}
							break;
						}
						
						
					}else{
						$data['data']  = array();
					}
				}
				
		
			}
			
			foreach($dataArray as $key => $row){
				
				$data['data'][] = array(
										$key,
										$row['count'],
										$row['aggregationName']
					);
			}
			
		}
		else{
			$countryQuery = $data['countries'];
			$query = array(
				'metric' => $data['metric'],
				'date_range' => $data['dateRange'],
				'days_running' => $data['daysRunning'],
				'country' => $countryQuery,
				'ad_type' => $data['adTypes'],
				'traffic_source' => $data['trafficSources'],
				'affiliate_network' => $data['affiliateNetworks'],
				'count' => $data['count']
			);
	
	
			$return = json_decode($this->forward('AppBundle:AdplexityApi:adplexityRequest', array('url' => $url,
				'query' => $query))->getContent(), true);
				if(!isset($return['errorMessage'])){
					if(count($return['data']) > 0){
						switch($data['aggregation']){
							case 'tracking_domains':
								foreach($return['data'] as $row){
								    if($data['action'] == 'automated'){
                                        $data['data'][] = array(
                                            $row['domain'],
                                            $row['count'],
                                            $row['tracking_name'],
                                            '<a href="https://mobile.adplexity.com/search/advertiser?q='.$row['domain'].'&qs=advertiser.lp_url_redirect_outbound&from=-30d&to=0d&order=volume_desc&days=3"
                                            class="btn blue btn-xs" target="_blank">
                                            <i class="fa fa-eye"></i></a>'
                                        );
                                    }else{
                                        $data['data'][] = array(
                                            $row['domain'],
                                            $row['count'],
                                            $row['tracking_name']
                                        );
                                    }
									
								}
							break;
							case 'lp_domains':
								foreach($return as $row){
								    if($data['action'] == 'automate'){
                                        $data['data'][] = array(
                                            $row['domain'],
                                            $row['count'],
                                            '',
                                            '<a href="https://mobile.adplexity.com/search/advertiser?q='.$row['domain'].'&qs=advertiser.lp_url_redirect_outbound&from=-30d&to=0d&order=volume_desc&days=3"
                                            class="btn blue btn-xs" target="_blank">
                                            <i class="fa fa-eye"></i></a>'
                                        );

                                    }else{
                                        $data['data'][] = array(
                                            $row['domain'],
                                            $row['count'],
                                            ''
                                        );
                                    }

								}
							break;
							case 'affiliate_domains':
								foreach($return as $row){
								    if($data['action'] == 'automated'){
                                        $data['data'][] = array(
                                            $row['domain'],
                                            $row['count'],
                                            $row['affiliate_name'],
                                            '<a href="https://mobile.adplexity.com/search/advertiser?q='.$row['domain'].'&qs=advertiser.lp_url_redirect_outbound&from=-30d&to=0d&order=volume_desc&days=3"
                                            class="btn blue btn-xs" target="_blank">
                                            <i class="fa fa-eye"></i></a>'
                                        );

                                    }else{
                                        $data['data'][] = array(
                                            $row['domain'],
                                            $row['count'],
                                            $row['affiliate_name']
                                        );
                                    }

								}
							break;
							case 'offer_domains':
								foreach($return as $row){
								    if($data['action'] == 'automated'){
                                        $data['data'][] = array(
                                            $row['domain'],
                                            $row['count'],
                                            '',
                                            '<a href="https://mobile.adplexity.com/search/advertiser?q='.$row['domain'].'&qs=advertiser.lp_url_redirect_outbound&from=-30d&to=0d&order=volume_desc&days=3"
                                            class="btn blue btn-xs" target="_blank">
                                            <i class="fa fa-eye"></i></a>'
                                        );

                                    }else{
                                        $data['data'][] = array(
                                            $row['domain'],
                                            $row['count'],
                                            ''
                                        );
                                    }

								}
							break;
						}
						
						
					}else{
						$data['data']  = array();
					}
				}
		}
		
		
			
		
		
		
		if($data['action'] == 'automated'){
            file_put_contents("data_table_tmp_files/adplexity/report-automated-". $data['label'] . ".txt", json_encode($data, JSON_UNESCAPED_UNICODE));
        }else{
            file_put_contents("data_table_tmp_files/adplexity/report.txt", json_encode($data, JSON_UNESCAPED_UNICODE));
        }

        return new Response(json_encode(true));
    }



    /**
     * @Route("/extras/get-adplexity-report-for-multi")
     */
    public function getAdplexityForMultiReport()
    {
        $data = json_decode($_POST['param'], true);
        $url = 'https://mobile.adplexity.com/api/v1/top/'.$data['aggregation'].'?';
        $dataJson['data']  = array();
        file_put_contents("data_table_tmp_files/adplexity/report-automated-".$data['label'].".txt", json_encode($dataJson, JSON_UNESCAPED_UNICODE));
        if($data['countries'] == 'all'){
            $countries = $this->getAdplexityCountries();
            $dataArray = array();
            foreach($countries as $country){

                $query = array(
                    'metric' => $data['metric'],
                    'date_range' => $data['dateRange'],
                    'days_running' => $data['daysRunning'],
                    'country' => $country['code'],
                    'ad_type' => $data['adTypes'],
                    'traffic_source' => $data['trafficSources'],
                    'affiliate_network' => $data['affiliateNetworks'],
                    'count' => $data['count']
                );

                $return = json_decode($this->forward('AppBundle:AdplexityApi:adplexityRequest', array('url' => $url,
                    'query' => $query))->getContent(), true);

                if(!isset($return['errorMessage'])){
                    if(count($return) > 0){
                        switch($data['aggregation']){
                            case 'tracking_domains':
                                foreach($return['data'] as $row){
                                    if(isset($dataArray[$row['domain']])){
                                        $plus = $dataArray[$row['domain']]['count'];
                                        $dataArray[$row['domain']] = array(
                                            'count' =>  $row['count'] + $plus,
                                            'aggregationName' => $row['tracking_name']
                                        );
                                    }else{

                                        $dataArray[$row['domain']] = array(
                                            'count' => $row['count'],
                                            'aggregationName' => $row['tracking_name']
                                        );
                                    }
                                }
                                break;
                            case 'lp_domains':

                                foreach($return['data'] as $row){
                                    if(isset($dataArray[$row['domain']])){
                                        $plus = $dataArray[$row['domain']]['count'];
                                        $dataArray[$row['domain']] = array(
                                            'count' =>  $row['count'] + $plus,
                                            'aggregationName' => ''
                                        );
                                    }else{

                                        $dataArray[$row['domain']] = array(
                                            'count' => $row['count'],
                                            'aggregationName' => ''
                                        );
                                    }
                                }
                                break;
                            case 'affiliate_domains':

                                foreach($return['data'] as $row){
                                    if(isset($dataArray[$row['domain']])){
                                        $plus = $dataArray[$row['domain']]['count'];
                                        $dataArray[$row['domain']] = array(
                                            'count' =>  $row['count'] + $plus,
                                            'aggregationName' => $row['affiliate_name']
                                        );
                                    }else{

                                        $dataArray[$row['domain']] = array(
                                            'count' => $row['count'],
                                            'aggregationName' => $row['affiliate_name']
                                        );
                                    }
                                }
                                break;
                            case 'offer_domains':
                                foreach($return['data'] as $row){
                                    if(isset($dataArray[$row['domain']])){
                                        $plus = $dataArray[$row['domain']]['count'];
                                        $dataArray[$row['domain']] = array(
                                            'count' =>  $row['count'] + $plus,
                                            'aggregationName' => ''
                                        );
                                    }else{

                                        $dataArray[$row['domain']] = array(
                                            'count' => $row['count'],
                                            'aggregationName' => ''
                                        );
                                    }
                                }
                                break;
                        }


                    }else{
                        $data['data']  = array();
                    }
                }


            }

            foreach($dataArray as $key => $row){

                $data['data'][] = array(
                    $key,
                    $row['count'],
                    $row['aggregationName']
                );
            }




        }else if(strpos($data['countries'], ',') != false){

            $countries = explode(',', $data['countries']);
            $dataArray = array();
            for($x = 0; $x < count($countries); $x++){
                $query = array(
                    'metric' => $data['metric'],
                    'date_range' => $data['dateRange'],
                    'days_running' => $data['daysRunning'],
                    'country' => $countries[$x],
                    'ad_type' => $data['adTypes'],
                    'traffic_source' => $data['trafficSources'],
                    'affiliate_network' => $data['affiliateNetworks'],
                    'count' => $data['count']
                );

                $return = json_decode($this->forward('AppBundle:AdplexityApi:adplexityRequest', array('url' => $url,
                    'query' => $query))->getContent(), true);

                if(!isset($return['errorMessage'])){
                    if(count($return) > 0){
                        switch($data['aggregation']){
                            case 'tracking_domains':
                                foreach($return['data'] as $row){
                                    if(isset($dataArray[$row['domain']])){
                                        $plus = $dataArray[$row['domain']]['count'];
                                        $dataArray[$row['domain']] = array(
                                            'count' =>  $row['count'] + $plus,
                                            'aggregationName' => $row['tracking_name']
                                        );
                                    }else{

                                        $dataArray[$row['domain']] = array(
                                            'count' => $row['count'],
                                            'aggregationName' => $row['tracking_name']
                                        );
                                    }
                                }
                                break;
                            case 'lp_domains':

                                foreach($return['data'] as $row){
                                    if(isset($dataArray[$row['domain']])){
                                        $plus = $dataArray[$row['domain']]['count'];
                                        $dataArray[$row['domain']] = array(
                                            'count' =>  $row['count'] + $plus,
                                            'aggregationName' => ''
                                        );
                                    }else{

                                        $dataArray[$row['domain']] = array(
                                            'count' => $row['count'],
                                            'aggregationName' => ''
                                        );
                                    }
                                }
                                break;
                            case 'affiliate_domains':

                                foreach($return['data'] as $row){
                                    if(isset($dataArray[$row['domain']])){
                                        $plus = $dataArray[$row['domain']]['count'];
                                        $dataArray[$row['domain']] = array(
                                            'count' =>  $row['count'] + $plus,
                                            'aggregationName' => $row['affiliate_name']
                                        );
                                    }else{

                                        $dataArray[$row['domain']] = array(
                                            'count' => $row['count'],
                                            'aggregationName' => $row['affiliate_name']
                                        );
                                    }
                                }
                                break;
                            case 'offer_domains':
                                foreach($return['data'] as $row){
                                    if(isset($dataArray[$row['domain']])){
                                        $plus = $dataArray[$row['domain']]['count'];
                                        $dataArray[$row['domain']] = array(
                                            'count' =>  $row['count'] + $plus,
                                            'aggregationName' => ''
                                        );
                                    }else{

                                        $dataArray[$row['domain']] = array(
                                            'count' => $row['count'],
                                            'aggregationName' => ''
                                        );
                                    }
                                }
                                break;
                        }


                    }else{
                        $data['data']  = array();
                    }
                }


            }

            foreach($dataArray as $key => $row){

                $dataJson['data'][] = array(
                    $key,
                    $row['count'],
                    $row['aggregationName']
                );
            }

        }
        else{
            $countryQuery = $data['countries'];
            $query = array(
                'metric' => $data['metric'],
                'date_range' => $data['dateRange'],
                'days_running' => $data['daysRunning'],
                'country' => $countryQuery,
                'ad_type' => $data['adTypes'],
                'traffic_source' => $data['trafficSources'],
                'affiliate_network' => $data['affiliateNetworks'],
                'count' => $data['count']
            );


            $return = json_decode($this->forward('AppBundle:AdplexityApi:adplexityRequest', array('url' => $url,
                'query' => $query))->getContent(), true);
            if(!isset($return['errorMessage'])){
                if(count($return['data']) > 0){
                    switch($data['aggregation']){
                        case 'tracking_domains':
                            foreach($return['data'] as $row){
                                if($data['action'] == 'automate'){
                                    $dataJson['data'][] = array(
                                        $row['domain'],
                                        $row['count'],
                                        $row['tracking_name'],
                                        '<a href="https://mobile.adplexity.com/search/advertiser?q='.$row['domain'].'&qs=advertiser.lp_url_redirect_outbound&from=-30d&to=0d&order=volume_desc&days=3"
                                            class="btn blue btn-xs" target="_blank">
                                            <i class="fa fa-eye"></i></a>'
                                    );
                                }else{
                                    $dataJson['data'][] = array(
                                        $row['domain'],
                                        $row['count'],
                                        $row['tracking_name']
                                    );
                                }

                            }
                            break;
                        case 'lp_domains':
                            foreach($return as $row){
                                if($data['action'] == 'automate'){
                                    $dataJson['data'][] = array(
                                        $row['domain'],
                                        $row['count'],
                                        '',
                                        '<a href="https://mobile.adplexity.com/search/advertiser?q='.$row['domain'].'&qs=advertiser.lp_url_redirect_outbound&from=-30d&to=0d&order=volume_desc&days=3"
                                            class="btn blue btn-xs" target="_blank">
                                            <i class="fa fa-eye"></i></a>'
                                    );

                                }else{
                                    $dataJson['data'][] = array(
                                        $row['domain'],
                                        $row['count'],
                                        ''
                                    );
                                }

                            }
                            break;
                        case 'affiliate_domains':
                            foreach($return as $row){
                                if($data['action'] == 'automate'){
                                    $dataJson['data'][] = array(
                                        $row['domain'],
                                        $row['count'],
                                        $row['affiliate_name'],
                                        '<a href="https://mobile.adplexity.com/search/advertiser?q='.$row['domain'].'&qs=advertiser.lp_url_redirect_outbound&from=-30d&to=0d&order=volume_desc&days=3"
                                            class="btn blue btn-xs" target="_blank">
                                            <i class="fa fa-eye"></i></a>'
                                    );

                                }else{
                                    $dataJson['data'][] = array(
                                        $row['domain'],
                                        $row['count'],
                                        $row['affiliate_name']
                                    );
                                }

                            }
                            break;
                        case 'offer_domains':
                            foreach($return as $row){
                                if($data['action'] == 'automate'){
                                    $dataJson['data'][] = array(
                                        $row['domain'],
                                        $row['count'],
                                        '',
                                        '<a href="https://mobile.adplexity.com/search/advertiser?q='.$row['domain'].'&qs=advertiser.lp_url_redirect_outbound&from=-30d&to=0d&order=volume_desc&days=3"
                                            class="btn blue btn-xs" target="_blank">
                                            <i class="fa fa-eye"></i></a>'
                                    );

                                }else{
                                    $dataJson['data'][] = array(
                                        $row['domain'],
                                        $row['count'],
                                        ''
                                    );
                                }

                            }
                            break;
                    }


                }else{
                    $dataJson['data']  = array();
                }
            }
        }






        if($data['action'] == 'automate'){
            file_put_contents("data_table_tmp_files/adplexity/report-automated-". $data['label'] . ".txt", json_encode($dataJson, JSON_UNESCAPED_UNICODE));
        }else{
            file_put_contents("data_table_tmp_files/adplexity/report.txt", json_encode($dataJson, JSON_UNESCAPED_UNICODE));
        }

        return new Response(json_encode(''));
    }


    /**
     * @Route("/extras/save-adplexity-settings")
     */
    public function saveAdplexitySettings()
    {
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('AppBundle:AdplexityAutomatedSettings')->find(1);
        if($entity){
            $entity->setAggregation($data['aggregation']);
            $entity->setMetric($data['metric']);
            $entity->setDateRange($data['dateRange']);
            $entity->setDaysRunning($data['daysRunning']);
            $entity->setCountries($data['countries']);
            $entity->setAdType($data['adTypes']);
            $entity->setAffiliateNetwork($data['affiliateNetworks']);
            $entity->setTrafficSource($data['trafficSources']);
            $em->flush();
        }else{

            $entity = new AdplexityAutomatedSettings();
            $entity->setAggregation($data['aggregation']);
            $entity->setMetric($data['metric']);
            $entity->setDateRange($data['dateRange']);
            $entity->setDaysRunning($data['daysRunning']);
            $entity->setCountries($data['countries']);
            $entity->setAdType($data['adTypes']);
            $entity->setAffiliateNetwork($data['affiliateNetworks']);
            $entity->setTrafficSource($data['trafficSources']);
            $em->persist($entity);
            $em->flush();
        }
        $em->clear();

        return new Response(json_encode(true));
    }



    /**
     * @Route("/extras/add-adplexity-presets")
     */
    public function addAdplexityPresets()
    {
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('AppBundle:AdplexityAutomatedSettings')->findOneBy(array('label' => $data['label']));

        $adTypesId = array();
        $adTypesName = array();
        if($data['adTypes'] != ''){
            $adTypes = explode(',', $data['adTypes']);
            for($a = 0; $a < count($adTypes); $a++){
                $adTypesId[] = explode('|', $adTypes[$a])[0];
                $adTypesName[] = explode('|', $adTypes[$a])[1];
            }
        }
        $affiliateNetworksId = array();
        $affiliateNetworksName = array();
        if($data['affiliateNetworks'] != ''){
            $affiliateNetworks = explode(',', $data['affiliateNetworks']);
            for($a = 0; $a < count($affiliateNetworks); $a++){
                $affiliateNetworksId[] = explode('|', $affiliateNetworks[$a])[0];
                $affiliateNetworksName[] = explode('|', $affiliateNetworks[$a])[1];
            }
        }

        $trafficSourcesId = array();
        $trafficSourcesName = array();
        if($data['trafficSources'] != ''){
            $trafficSources = explode(',', $data['trafficSources']);
            for($a = 0; $a < count($trafficSources); $a++){
                $trafficSourcesId[] = explode('|', $trafficSources[$a])[0];
                $trafficSourcesName[] = explode('|', $trafficSources[$a])[1];
            }
        }

        if(!$entity){
            $entity = new AdplexityAutomatedSettings();
            $entity->setAggregation($data['aggregation']);
            $entity->setMetric($data['metric']);
            $entity->setDateRange($data['dateRange']);
            $entity->setDaysRunning($data['daysRunning']);
            $entity->setCountries($data['countries']);
            $entity->setAdType(implode(',', $adTypesId));
            $entity->setAdTypeName(implode(',', $adTypesName));
            $entity->setAffiliateNetwork(implode(',', $affiliateNetworksId));
            $entity->setAffiliateNetworkName(implode(',', $affiliateNetworksName));
            $entity->setTrafficSource(implode(',', $trafficSourcesId));
            $entity->setTrafficSourceName(implode(',', $trafficSourcesName));
            $entity->setLabel($data['label']);
            $em->persist($entity);
            $em->flush();

            $return = array('success' => true);
        }else{

            $return = array(
                'success' => false,
                'message' => 'Label already exists'
            );
        }
        $em->clear();

        return new Response(json_encode($return));
    }

    /**
     * @Route("/extras/edit-adplexity-presets")
     */
    public function editAdplexityPresets()
    {
        $data = json_decode($_POST['param'], true);
        $id = $data['id'];
        $label = $data['label'];
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('AppBundle:AdplexityAutomatedSettings')->find($data['id']);
        $adTypesId = array();
        $adTypesName = array();
        if($data['adTypes'] != ''){
            $adTypes = explode(',', $data['adTypes']);
            for($a = 0; $a < count($adTypes); $a++){
                $adTypesId[] = explode('|', $adTypes[$a])[0];
                $adTypesName[] = explode('|', $adTypes[$a])[1];
            }
        }
        $affiliateNetworksId = array();
        $affiliateNetworksName = array();
        if($data['affiliateNetworks'] != ''){
            $affiliateNetworks = explode(',', $data['affiliateNetworks']);
            for($a = 0; $a < count($affiliateNetworks); $a++){
                $affiliateNetworksId[] = explode('|', $affiliateNetworks[$a])[0];
                $affiliateNetworksName[] = explode('|', $affiliateNetworks[$a])[1];
            }
        }

        $trafficSourcesId = array();
        $trafficSourcesName = array();
        if($data['trafficSources'] != ''){
            $trafficSources = explode(',', $data['trafficSources']);
            for($a = 0; $a < count($trafficSources); $a++){
                $trafficSourcesId[] = explode('|', $trafficSources[$a])[0];
                $trafficSourcesName[] = explode('|', $trafficSources[$a])[1];
            }
        }

        if($entity){
            $sql = $em->createQuery(
                "SELECT p.label
            FROM AppBundle:AdplexityAutomatedSettings p
			WHERE p.label = '$label' AND p.id != $id
            "
            );
            $checkLabel = $sql->getResult();
            if(!$checkLabel){
                $entity->setAggregation($data['aggregation']);
                $entity->setMetric($data['metric']);
                $entity->setDateRange($data['dateRange']);
                $entity->setDaysRunning($data['daysRunning']);
                $entity->setCountries($data['countries']);
                $entity->setAdType(implode(',', $adTypesId));
                $entity->setAdTypeName(implode(',', $adTypesName));
                $entity->setAffiliateNetwork(implode(',', $affiliateNetworksId));
                $entity->setAffiliateNetworkName(implode(',', $affiliateNetworksName));
                $entity->setTrafficSource(implode(',', $trafficSourcesId));
                $entity->setTrafficSourceName(implode(',', $trafficSourcesName));
                $entity->setLabel($data['label']);
                $em->flush();

                $return = array('success' => true);
            }else{
                $return = array(
                    'success' => false,
                    'message' => 'Label already exists'
                );
            }

        }else{


        }
        $em->clear();

        return new Response(json_encode($return));
    }

    /**
     * @Route("/extras/delete-adplexity-presets")
     */
    public function deleteAdplexityPresets()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('AppBundle:AdplexityAutomatedSettings')->find($_POST['param']);
        $em->remove($entity);
        $em->flush();

        return new Response(json_encode(array('success' => true)));
    }


    /**
     * @Route("/tools/adplexity/get-search-presets")
     */
    public function adplexityGetSearchPresets(){

        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 't.id', 't.label', 't.aggregation', 't.metric', 't.dateRange', 't.daysRunning', 't.countries', 't.adType', 't.affiliateNetwork', 't.trafficSource', 't.adTypeName', 't.affiliateNetworkName', 't.trafficSourceName');

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 't.id';

        // DB table to use
        $sTable = 'AppBundle:AdplexityAutomatedSettings';

        // Input method (use $_GET, $_POST or $_REQUEST)
        $input = $_GET;

        /**
         * Paging
         */
        $firstResult = "";
        $maxResults = "";
        if ( isset( $input['iDisplayStart'] ) && $input['iDisplayLength'] != '-1' ) {
            $firstResult = intval( $input['iDisplayStart'] );
            $maxResults = intval( $input['iDisplayLength'] );
        }


        /**
         * Ordering
         */
        $aOrderingRules = array();
        if ( isset( $input['iSortCol_0'] ) ) {
            $iSortingCols = intval( $input['iSortingCols'] );
            for ( $i=0 ; $i<$iSortingCols ; $i++ ) {
                if ( $input[ 'bSortable_'.intval($input['iSortCol_'.$i]) ] == 'true' ) {
                    $aOrderingRules[] =
                        $aColumns[ intval( $input['iSortCol_'.$i] ) ]
                        . " " .($input['sSortDir_'.$i]==='asc' ? 'asc' : 'desc');
                }
            }
        }

        if (!empty($aOrderingRules)) {
            $sOrder = " ORDER BY ".implode(", ", $aOrderingRules);
        } else {
            $sOrder = "";
        }


        /**
         * Filtering
         * NOTE this does not match the built-in DataTables filtering which does it
         * word by word on any field. It's possible to do here, but concerned about efficiency
         * on very large tables, and MySQL's regex functionality is very limited
         */
        $iColumnCount = count($aColumns);
        $aFilteringRules = array();
        if ( isset($input['sSearch']) && $input['sSearch'] != "" ) {
            $aFilteringRules = array();
            for ( $i=0 ; $i<$iColumnCount ; $i++ ) {
                if ( isset($input['bSearchable_'.$i]) && $input['bSearchable_'.$i] == 'true' ) {
                    $aFilteringRules[] = $aColumns[$i]." LIKE '%". $input['sSearch'] ."%'";
                }
            }


            if (!empty($aFilteringRules)) {
                $aFilteringRules = array('(' . implode(" OR ", $aFilteringRules) . ')');
            }
        }




// Individual column filtering
        for ( $i=0 ; $i<$iColumnCount ; $i++ ) {
            if ( isset($input['bSearchable_'.$i]) && $input['bSearchable_'.$i] == 'true' && $input['sSearch_'.$i] != '' ) {
                $aFilteringRules[] = $aColumns[$i]." LIKE '%" . $input['sSearch_'.$i] ."%'";
            }
        }

        if (!empty($aFilteringRules)) {
            $sWhere = " WHERE ".implode(" AND ", $aFilteringRules);
        } else {
            $sWhere = "";
        }


        /**
         * SQL queries
         * Get data to display
         */
        $aQueryColumns = implode(', ', $aColumns);



        $sQuery = $em->createQuery("
        SELECT $aQueryColumns
        FROM ".$sTable." t ".$sWhere.$sOrder."")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;
        $rResult = $sQuery->getResult();


        $sQuery = $em->createQuery("
        SELECT t
        FROM ".$sTable." t ".$sWhere.$sOrder."")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;

        $paginator = new Paginator($sQuery);
        $iFilteredTotal = count($paginator);

        $sQuery = $em->createQuery("
        SELECT t
        FROM ".$sTable." t ".$sWhere.$sOrder."");

        $iTotal = count($paginator = new Paginator($sQuery));

        /**
         * Output
         */


        $output = array(
            "sEcho"                => intval($input['sEcho']),
            "iTotalRecords"        => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData"               => array(),
        );


        foreach($rResult as $column){
            $adType = array();
            $affiliateNetwork = array();
            $trafficSource = array();
            if($column['adType'] != ''){
                $adTypeId = explode(',', $column['adType']);
                $adTypeName = explode(',', $column['adTypeName']);
                for($a = 0; $a < count($adTypeId); $a++){
                    $adType[] = trim($adTypeId[$a].'|'.$adTypeName[$a]);
                }
            }

            if($column['affiliateNetwork'] != ''){
                $affiliateNetworkId = explode(',', $column['affiliateNetwork']);
                $affiliateNetworkName = explode(',', $column['affiliateNetworkName']);
                for($a = 0; $a < count($affiliateNetworkId); $a++){
                    $affiliateNetwork[] = trim($affiliateNetworkId[$a].'|'.$affiliateNetworkName[$a]);
                }
            }

            if($column['trafficSource'] != ''){
                $trafficSourceId = explode(',', $column['trafficSource']);
                $trafficSourceName = explode(',', $column['trafficSourceName']);
                for($a = 0; $a < count($trafficSourceId); $a++){
                    $trafficSource[] = trim($trafficSourceId[$a].'|'.$trafficSourceName[$a]);
                }
            }

            $row = array();
            $row[] = $column['label'];
            $row[] = '
                        Aggregation:<b>         ' . strtoupper($column['aggregation']) . '</b><br>
                        Metric:<b>      ' . strtoupper($column['metric']) . '</b><br>
                        Date Range:<b>      ' . $column['dateRange'] . '</b><br>
                        Days Running:<b>        ' . $column['daysRunning'] . '</b><br>
                        Countries:<b>       ' . $column['countries'] . '</b><br>
                        Ad Type:<b>         ' . $column['adTypeName'] . '</b><br>
                        Affiliate Network:<b>       ' . $column['affiliateNetworkName'] . '</b><br>
                        Traffic Source:<b>          ' . $column['trafficSourceName'] . '</b><br>
                     ';
            $row[] = '<div class="btn-group">
                                        <button type="button" class="btn blue btn-xs"> Action</button>
                                        <button type="button" class="btn blue btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#" data-toggle="modal" data-target="#modalEditPreset"  data-action="edit" 
                                            data-id="' . $column['id'] . '" 
                                            data-name="' . $column['label'] . '" 
                                            data-aggregation="' . $column['aggregation'] . '"
                                            data-metric="' . $column['metric'] . '"
                                            data-date-range="' . $column['dateRange'] . '"
                                            data-days-running="' . $column['daysRunning'] . '"
                                            data-countries="' . $column['countries'] . '"
                                            data-ad-type=" ' . implode(',' ,$adType) . '"
                                            data-affiliate-network="' . implode(',' ,$affiliateNetwork) . '"
                                            data-traffic-source="' . implode(',' ,$trafficSource) . '"
                                            onClick="pushData(this)"><i class="fa fa-edit"></i> Edit</a>
                                            </li>
                                            <li><a href="#" data-toggle="modal" data-target="#modalDeletePreset"  data-action="delete"
                                            data-adata-id="' . $column['id'] . '" 
                                            data-name="' . $column['label'] . '" 
                                            data-aggregation="' . $column['aggregation'] . '"
                                            data-metric="' . $column['metric'] . '"
                                            data-date-range="' . $column['dateRange'] . '"
                                            data-days-running="' . $column['daysRunning'] . '"
                                            data-countries="' . $column['countries'] . '"
                                            data-ad-type=" ' . implode(',' ,$adType) . '"
                                            data-affiliate-network="' . implode(',' ,$affiliateNetwork) . '"
                                            data-traffic-source="' . implode(',' ,$trafficSource) . '"data-id="' . $column['id'] . '" data-name="' . $column['label'] . '"  
                                            onClick="pushData(this)"><i class="fa fa-times-circle"></i> Remove</a>
                                            </li>
                                        </ul>
                       </div>';
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );


    }
	
	public function getAdplexityCountries(){
		$url = 'https://mobile.adplexity.com/api/v1/countries';
		$query = array();
		return json_decode($this->forward('AppBundle:AdplexityApi:adplexityRequest', array('url' => $url,
            'query' => $query))->getContent(), true)['data'];	
	}
	
	public function getAdplexityAdTypes(){
		$url = 'https://mobile.adplexity.com/api/v1/ad_types';
		$query = array();
		return json_decode($this->forward('AppBundle:AdplexityApi:adplexityRequest', array('url' => $url,
            'query' => $query))->getContent(), true)['data'];	
	}
	
	public function getAdplexityNetworks(){
		$url = 'https://mobile.adplexity.com/api/v1/affiliate_networks';
		$query = array();
		return json_decode($this->forward('AppBundle:AdplexityApi:adplexityRequest', array('url' => $url,
            'query' => $query))->getContent(), true)['data'];	
	}
	
	public function getAdplexitySources(){
		$url = 'https://mobile.adplexity.com/api/v1/traffic_sources';
		$query = array();
		return json_decode($this->forward('AppBundle:AdplexityApi:adplexityRequest', array('url' => $url,
            'query' => $query))->getContent(), true)['data'];	
	}
}