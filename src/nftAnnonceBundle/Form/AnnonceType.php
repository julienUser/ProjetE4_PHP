<?php

namespace nftAnnonceBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use nftAnnonceBundle\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityRepository;


class AnnonceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('labelAn', TextType::class, array('label' => 'Titre de votre annonce'))

            ->add('idPa', 'entity', array(  // Pays
                'label' => 'Pays',
                'class' => 'nftAnnonceBundle:Pays',
                'query_builder' => function(EntityRepository $er)
                {    
                    return $er->createQueryBuilder('p')->select('partial p.{idPa,nomPa}');
                },
                'property' => 'nom_pa'
             ))

            // ->add('idRe', 'entity', array(  // Region
            //     'label' => 'Région',
            //     'class' => 'nftAnnonceBundle:Region',
            //     'query_builder' => function(EntityRepository $er)
            //     {    
            //         return $er->createQueryBuilder('r')
            //         ->select('partial r.{idRe,nomRe}')
            //         ->where('r.idPa = '); // Voir commentaire des départements, même principe pour la région.
            //     },
            //     'property' => 'nom_re'
            //  ))

            // VOIR AJAX ET COURS SYMFONY SUR OPENCLASSROOM POUR LES REGIONS DEPARTEMENTS ET VILLE

            // ->add('idDe', 'entity', array(  // Département
            //     'label' => 'Département',
            //     'class' => 'nftAnnonceBundle:Departement',
            //     'query_builder' => function(EntityRepository $er)
            //     {    
            //         return $er->createQueryBuilder('d')->select('partial d.{idDe,nomDe}')
            //         ->where('d.idRe = 11'); // Ici on ne sélectionne que les départements qui se trouvent dans la région languedoc roussillon midi pyrénées, le but c'est de faire ça de manière dynamique en ajax. Dés que l'utilisateur rempli le champs région on récupère l'ID de la région et on la passe à la requête des départements pour ne prendre que les départements appartenant à la région.                
            //     },
            //     'property' => 'nom_de'
            //  ))

            // Générer les villes une fois que les requêtes seront mises en place (57 000 villes dans la base)

            ->add('cpAn', IntegerType::class, array('label' => 'Code postal')) // Voir à générer le code postal en fonction de la ville 

            // Test entitytype::class car le type 'entity' ne marche pas étant donné que marque gamme et modele ne sont pas clef étrangères de annonce.

            // ->add('marqueAn', EntityType::class, array( // Marque
            //     'label' => 'Marque',
            //     'class' => 'nftAnnonceBundle:Marque',
            //     'choice_label' => function ($Marque) {
            //         return $Marque->getLibelleMa();
            //     }
            // ))

            // ->add('gammeAn', EntityType::class, array( // Marque
            //     'label' => 'Gamme',
            //     'class' => 'nftAnnonceBundle:Gamme',
            //     'choice_label'=> function ($Gamme) {
            //         return $Gamme->getLibelleGa();
            //     }
            // ))

            // ->add('modeleAn', EntityType::class, array( // Marque
            //     'label' => 'Modele',
            //     'class' => 'nftAnnonceBundle:Modele',
            //     'choice_label' => function ($Modele) {
            //         return $Modele->getLibelleMo();
            //     }
            // )) 

            ->add('volantAn', ChoiceType::class, array('label' => 'Volant',
                    'choices'  => array(
                        'À gauche' => 'À gauche',
                        'À droite' => 'À droite',
                        ),
                    'choices_as_values' => true,
            ))

            ->add('dateImmatriculationAn', DateType::class, array('label' => 'Date de l\'immatriculation'))

            ->add('kilometrageAn', IntegerType::class, array('label' => 'Kilométrage'))
            
            ->add('puissanceAn', IntegerType::class, array('label' => 'Puissance CV'))
            ->add('puissancefAn', IntegerType::class, array('label' => 'Puissance CF'))

            ->add('carburantAn', ChoiceType::class, array('label' => 'Carburant',
                    'choices'  => array(
                        'Diesel' => 1,
                        'Essence' => 2,
                        'GPL' => 3,
                        'Électrique' => 4,
                        'Autre' => 5,
                        ),
                    'choices_as_values' => true,
            ))
            
            ->add('nbplacesAn', ChoiceType::class, array('label' => 'Nb. de places assises',
                    'choices'  => array(
                        '2' => 2,
                        '3' => 3,
                        '4' => 4,
                        '5' => 5,
                        'Autre' => 1,                        
                        ),
                    'choices_as_values' => true,
            ))

            // ->add('dernierPassageMineAn', DateType::class, array('label' => 'Date du dernier passage en mines'))
            // ->add('dernierPassageContrAn', DateType::class, array('label' => 'Date du dernier passage au controlographe'))
            // ->add('equipementsAn', TextareaType::class, array('label' => 'Texte de l\'annonce'))
            // ->add('capaciteReservoirAn', IntegerType::class, array('label' => 'Capacité du réservoir en litres'))
            ->add('classeEnvAn', ChoiceType::class, array('label' => 'Classe environnementale',
                    'choices'  => array(
                        'A' => 'A',
                        'B' => 'B',
                        'C' => 'C',
                        'D' => 'D',
                        'E' => 'E',
                        'F' => 'F',
                        ),
                    'choices_as_values' => true,
            ))
            // ->add('infosReservoirAn')
            // ->add('normeEuroAn')
            ->add('boiteVitesseAn', ChoiceType::class, array('label' => 'Boite de vitesse',
                    'choices'  => array(
                        'Manuelle' => 0,
                        'Automatique' => 1,
                        ),
                    'choices_as_values' => true,
            ))

            ->add('embrayageAn', ChoiceType::class, array('label' => 'Type d\'embrayage',
                    'choices'  => array(
                        'Monodisque' => 'Monodisque',
                        'Multidisque' => 'Multidisque',
                        'Électrorhéologique' => 'Électrorhéologique',
                        'Centrifuge' => 'Centrifuge',
                        'Électromagnétique' => 'Électromagnétique',
                        'Convertisseur de couple' => 'Convertisseur de couple',
                        'Double embrayage' => 'Double embrayage',
                        'Robotisé' => 'Robotisé'
                        ),
                    'choices_as_values' => true,
            ))

            ->add('directionAn', ChoiceType::class, array('label' => 'Type de direction',
                    'choices'  => array(
                        '2 roues motrices' => '2 roues motrices',
                        '4 roues motrices' => '4 roues motrices'
                        ),
                    'choices_as_values' => true,
            ))
            // ->add('rouesPneusAn', TextType::class, array('label' => 'Roues et pneus'))
            // ->add('freinsAn', TextType::class, array('label' => 'Freins'))
            // ->add('aspirationEchappementAn', TextType::class, array('label' => 'Aspiration et échappement'))
            // ->add('chassisAn', TextType::class, array('label' => 'Châssis'))
            // ->add('cadransAn', TextType::class, array('label' => 'Cadrans'))
            // ->add('circuitElectriqueAn', TextType::class, array('label' => 'Circuit électrique'))
            // ->add('empattementAn', TextType::class, array('label' => 'Empattement'))
            // ->add('surfaceAn', IntegerType::class, array('label' => 'Surface')) // IntegerType, voir mètre carré
            // ->add('hauteurAn', IntegerType::class, array('label' => 'Hauteur')) // Voir mètre
            // ->add('largeurAn', IntegerType::class, array('label' => 'Largeur')) // Voir mètre
            // ->add('chargeUtileAn', IntegerType::class, array('label' => 'Charge utile'))
            // ->add('poidsTotalChargeAn', IntegerType::class, array('label' => 'Poids total des charges'))
            // ->add('poidsTotalRoulantAutoriseAn', IntegerType::class, array('label' => 'Poids total autorisé sur route'))
            // ->add('poidsVideAn', IntegerType::class, array('label' => 'Poids à vide'))

            ->add('liensPhotosAn') // Gérer le hosting des photos 
            
            // ->add('idEa') // État de l'annonce à mettre à jour via un pannel d'administrateur, voir FOSUserBundle            
            // ->add('idUt') // Assigner l'id de l'utilisateur connecté avec le bundle FOSUserBundle

            ->add('prixAn', MoneyType::class, array('label' => 'Votre prix'))

            ->add('save', SubmitType::class, array(
                'attr' => array('class' => 'save'),
            ))
        ;

    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'nftAnnonceBundle\Entity\Annonce'
        ));
    }
}

?>