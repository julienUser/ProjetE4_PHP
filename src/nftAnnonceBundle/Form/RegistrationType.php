<?php

namespace nftAnnonceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomUt', TextType::class, array('label' => 'Nom'));
        $builder->add('prenomUt', TextType::class, array('label' => 'Prénom'));
        // $builder->add('adresseUt', TextType::class, array('label' => 'Numéro et nom de la rue'));        
        // $builder->add('telUt', TextType::class, array('label' => 'Téléphone'));
        $builder->add('bourseUt', IntegerType::class, array('label' => 'Nombre de crédit'));     
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}

?>