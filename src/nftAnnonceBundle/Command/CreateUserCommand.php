<?php

namespace nftAnnonceBundle\Command;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use FOS\UserBundle\Model\User;
use FOS\UserBundle\Command\CreateUserCommand as BaseCommand;

class CreateUserCommand extends BaseCommand
{
	protected function configure()
    {
        parent::configure();
        $this
            ->setName('nft:user:create')
            ->getDefinition()->addArguments(array(
                new InputArgument('nom', InputArgument::REQUIRED, 'The lastname'),
                new InputArgument('prenom', InputArgument::REQUIRED, 'The firstname')
            ))
        ;
        $this->setHelp(<<<EOT
EOT
            );
    }
 
    // ...
 
    protected function interact(InputInterface $input, OutputInterface $output)
    {
        parent::interact($input, $output);
        if (!$input->getArgument('firstname')) {
            $firstname = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Prénom:',
                function($firstname) {
                    if (empty($firstname)) {
                        throw new \Exception('Le prénom ne peut pas être un champs vide');
                    }
 
                    return $firstname;
                }
            );
            $input->setArgument('firstname', $firstname);
        }
        if (!$input->getArgument('lastname')) {
            $lastname = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Nom:',
                function($lastname) {
                    if (empty($lastname)) {
                        throw new \Exception('Le nom ne peut pas être un champs vide');
                    }
 
                    return $lastname;
                }
            );
            $input->setArgument('lastname', $lastname);
        }
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var vendor\FOS\UserBundle\Model\UserManager $user_manager */
        $user_manager = $this->getContainer()->get('fos_user.user_manager');
 
        /** @var \nft\AnnonceBundle\Entity\User $user */
        $user = $user_manager->createUser();
        $user->setUsername($input->getArgument('username'));
        $user->setEmail($input->getArgument('email'));
        $user->setPlainPassword($input->getArgument('password'));
        $user->setEnabled(!$input->getOption('inactive'));
        $user->setSuperAdmin((bool)$input->getOption('super-admin'));
        $user->setPrenom($input->getArgument('firstname'));
        $user->setNom($input->getArgument('lastname'));
 
        $user_manager->updateUser($user);
 
        $output->writeln(sprintf('Created user <comment>%s</comment>', $username));
    }
    // ...
}

?>