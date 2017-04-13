<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 4/12/2017
 * Time: 2:49 AM
 */

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use AppBundle\Entity\ApiCredentials;
use Doctrine\ORM\Tools\Pagination\Paginator;
use AppBundle\Controller\SessionController;

class CronArchiveDataCommand extends ContainerAwareCommand {

    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('cron:archive-data')

            // the short description shown while running "php bin/console list"
            ->setDescription('Archives data from voluum')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $output->writeln([
            'Success'
        ]);

    }

}