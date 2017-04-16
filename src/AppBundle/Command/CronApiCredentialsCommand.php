<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 4/11/2017
 * Time: 1:58 PM
 */

namespace AppBundle\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use AppBundle\Entity\ApiCredentials;
use Doctrine\ORM\Tools\Pagination\Paginator;
use AppBundle\Controller\SessionController;



class CronApiCredentialsCommand extends ContainerAwareCommand {

    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('cron:get-api-tokens')

            // the short description shown while running "php bin/console list"
            ->setDescription('Fetches API Tokens From TrafficSources')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $settingsService = $this->getContainer()->get('app.settings');
        $exoClickService = $this->getContainer()->get('app.exoclick_api');
        $voluumService = $this->getContainer()->get('app.voluum_api_controller');
        $em = $this->getContainer()->get('doctrine')->getManager();
        $apiAccessEntity = $em->getRepository('AppBundle:ApiAccess')
            ->findAll();

        for($x = 0; $x < count($apiAccessEntity); $x++){
            if($apiAccessEntity[$x]->getTrafficSource() == 'ExoClick'){
                $exoClickApi = array('userName' => $apiAccessEntity[$x]->getUserName(),
                                     'password' => $apiAccessEntity[$x]->getPassword()
                                    );
            }else if($apiAccessEntity[$x]->getTrafficSource() == 'Voluum'){
                $voluumApi = array('userName' => $apiAccessEntity[$x]->getUserName(),
                    'password' => $apiAccessEntity[$x]->getPassword()
                );
            }
        }

        $voluumToken = json_decode($voluumService->voluumLoginAction($voluumApi['userName'], $voluumApi['password'])->getContent(), true);
        var_dump($voluumToken);
        //$exoClickToken = json_decode($exoClickService->exoClickLoginAction($exoClickApi['userName'])->getContent(), true);
        $credentials = $em->getRepository('AppBundle:ApiCredentials')->findOneById(1);
        $credentials->setVoluum($voluumToken['token']);
       // $credentials->setExoClick($exoClickToken[0]['token']);
        $em->flush();
            $output->writeln([
               'Success'
            ]);

    }

}