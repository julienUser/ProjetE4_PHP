<?php
// src/nftAnnonceBundle/Controller/AnnonceController.php
namespace nftAnnonceBundle\Controller;
use nftAnnonceBundle\Entity\Annonce;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use nftAnnonceBundle\Form\AnnonceType;

class AnnonceController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager(); // Je gère les entités
        $listeAnnonces = $em->getRepository('nftAnnonceBundle:Annonce')->findAll(); // Je récupère toutes les annonces
        // foreach ($annonce in $listeAnnonces) {
        //     $auteur = $this->getIdUt()->getUsername();
        // }
        // $annonceAuthor = $listeAnnonces->getIdUt()->getNomUt();
        return $this->render("nftAnnonceBundle:Annonce:index.html.twig", array('listeAnnonces' => $listeAnnonces));

    }

    public function addAction(Request $request, $idUt)
    {
        $res = $this->formulaire(null); // res c'est un formulaire sans iDannonce donc avec un objet de type annonce
        $form = $res['form']; // 
        $annonce = $res['annonce'];
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository('nftAnnonceBundle:Utilisateur')->find($idUt);

        $nbAnnonces = $membre->getNbAnnoncesUt();

        if($form->isValid())
        {            
            $em = $this->getDoctrine()->getManager();
            $annonce->setIdUt($membre); // Utilisateur le SetId pour les jointures de table
            $nbAnnonces++;
            $membre->setNbAnnoncesUt($nbAnnonces);
            $em->persist($annonce);
            $em->flush();
            // $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
            return $this->redirect($this->generateUrl('nft_annonce_viewpage', array('idAn' => $annonce->getIdAn())));
        }
        
        return $this->render('nftAnnonceBundle:Annonce:add.html.twig', array('form' => $form->createView()));

    }

    public function deleteAction($idAn, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository('nftAnnonceBundle:Annonce')->find($idAn);
        if (!$annonce) {
          throw $this->createNotFoundException(
                  'No annonce found for id ' . $idAn
          );
        } else {
        $em->remove($annonce);
        $em->flush();
        $em = $this->getDoctrine()->getManager(); // Je gère les entités
        $listeAnnonces = $em->getRepository('nftAnnonceBundle:Annonce')->findAll(); // Je récupère toutes les annonces
        return $this->render("nftAnnonceBundle:Annonce:index.html.twig", array('listeAnnonces' => $listeAnnonces));
        }
    }
    
    public function Formulaire($idAn)
    {
        if ($idAn == null)
        {
            $annonce = new Annonce; // Création du formulaire de création de l'annonce
            // $pays = $this->get('pays');
            // $listePays = $pays->getnomPa();
        } 
        else
        {
            $em = $this->getDoctrine()->getManager();
            $annonce = $em->getRepository('nftAnnonceBundle:Annonce')->find($idAn);            
        }

        $form = $this->get('form.factory')->create(new AnnonceType, $annonce);
        return array ('form' => $form, 'annonce' => $annonce);        

    }
    public function editAction($idAn, Request $request)
    {

        $res = $this->formulaire($idAn);
        $form = $res['form'];
        $annonce = $res['annonce'];
        $form->handleRequest($request);


        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();
            return $this->redirect($this->generateUrl('nft_annonce_homepage'));
        }
        
        return $this->render('nftAnnonceBundle:Annonce:edit.html.twig', array('form' => $form->createView()));
    }

    public function menuAction()
    {

        $em = $this->getDoctrine()->getManager(); // Je gère les entités
        $listeAnnonces = $em->getRepository('nftAnnonceBundle:Annonce')->findBy(
            array(), null, $limit = 3, $offset = 0 // Le offset sert à dire qu'on commence à générer les entités $offset après la 1ère (indice 0 soit si le $offset = 10 alors on génère à partir de 0..1..2..10ème entité jusqu'à la 13ème)         
            );

        return $this->render("nftAnnonceBundle:Annonce:menu.html.twig", array('listeAnnonces' => $listeAnnonces));
    }

    /**
     * @Route("/annonce/{id}", defaults={"id" = 1})
     */

    public function viewAction($idAn)
    {
        $repository = $this->getDoctrine()
          ->getManager()
          ->getRepository('nftAnnonceBundle:Annonce');
        $annonce = $repository->find($idAn);
        $membre = $annonce->getIdUt()->getUsername();

        // $emPays = $this->getDoctrine()->getManager();
        // $repoPays = $emPays->getRepository('nftAnnonceBundle:Pays');
        // $pays = $repoPays->find($annonce->getIdPa());

        // $emDepartement = $this->getDoctrine()->getManager();
        // $repoDepartement = $emDepartement->getRepository('nftAnnonceBundle:Departement');
        // $departement = $repoDepartement->find($annonce->getIdDe());

        // $emUtilisateur = $this->getDoctrine()->getManager();
        // $repoUtilisateur = $emUtilisateur->getRepository('nftAnnonceBundle:Utilisateur');
        // $utilisateur = $repoUtilisateur->find($annonce->getIdUt());

        if (null === $annonce) {
          throw new NotFoundHttpException("L'annonce ".$id." n'existe pas.");
        }
        return $this->render('nftAnnonceBundle:Annonce:view.html.twig', array(
            'annonce' => $annonce, 'auteur' => $membre
            // , 'pays' => $pays->getNomPa(), 'departement' => $departement->getNomDe()
            // , 'utilisateur' => $utilisateur->getNomUt() // Voir avec Bompard pourquoi ça ne marche pas 
        ));
    }
}