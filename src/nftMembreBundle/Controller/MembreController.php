<?php
// src/nftMembreBundle/Controller/MembreController.php
namespace nftMembreBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Doctrine\ORM\EntityRepository;

use FOS\UserBundle\Model\UserManagerInterface;

class MembreController extends Controller
{
    public function membreAction($idUt){
        $em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository('nftAnnonceBundle:Utilisateur')->find($idUt);
        if (!$membre) {
            throw $this->createNotFoundException(
                  'L\'utilisateur '. $membre . 'n\'existe pas');
        }
        $listeAnnonces = $em->getRepository('nftAnnonceBundle:Annonce')->findByIdUt($idUt);
        $credit = $membre->getBourseUt();
        if ($credit == 0){
        	$credit = "0";
        } 
        $nbannonces = $membre->getNbAnnoncesUt();
        if ($nbannonces == 0){
            $nbannonces = "0";
        }
        $string = '';
        if ($nbannonces >= 10){
            $string = 'Félicitations ! Vous avez désormais '.$nbannonces.' annonces en lignes, et bénéficiez en conséquent de 10 points de fidélité !';
        }
        return $this->render("nftMembreBundle:Membre:home.html.twig", array('credit' => $credit, 'nbannonces' => $nbannonces, 'listeAnnonces' => $listeAnnonces, 'string' => $string, 'membre' => $membre
        	));
    }

    public function optionAction($idUt)
    {
    	$em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository('nftAnnonceBundle:Utilisateur')->find($idUt);
        $credit = $membre->getBourseUt();


        // $em = $this->getDoctrine()->getManager();
        // $annonce = $em->getRepository('nftAnnonceBundle:Annonce')->find($idAn);

        $em = $this->getDoctrine()->getManager(); // Je gère les entités
        $listeOptions = $em->getRepository('nftAnnonceBundle:Option')->findAll(); // Je récupère toutes les options

        return $this->render("nftMembreBundle:Membre:options.html.twig", array('listeOptions' => $listeOptions, 'credit' => $credit));
    }

    public function packAction($idUt)
    {
    	$em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository('nftAnnonceBundle:Utilisateur')->find($idUt);
        $credit = $membre->getBourseUt();

        $em = $this->getDoctrine()->getManager(); // Je gère les entités
        $listePack = $em->getRepository('nftAnnonceBundle:Pack')->findAll(); // Je récupère tous les packs
        return $this->render("nftMembreBundle:Membre:pack.html.twig", array('listePack' => $listePack, 'credit' => $credit));
    }

    public function adminAction($idUt)
    {
        $em = $this->getDoctrine()->getManager();
        $UserConnected = $em->getRepository('nftAnnonceBundle:Utilisateur')->find($idUt);
        // $isadmin = $UserConnected->get('nftMembreBundle.service.role')->isGranted('ROLE_ADMIN', $user);
        // if ($isadmin == true) {
        //     $membres = $em->getRepository('nftAnnonceBundle:Utilisateur')->findAll();
        //     return $this->render("nftMembreBundle:Membre:crud.html.twig", array('membres' => $membre));
        // } else {
        //     throw $this->createNotFoundException(
        //           'Vous n\'êtes pas admin');
        // }
        $membres = $em->getRepository('nftAnnonceBundle:Utilisateur')->findAll();
        return $this->render("nftMembreBundle:Membre:crud.html.twig", array('membres' => $membres));
    }

    public function deleteAction($idUt)
    {
        $em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository('nftAnnonceBundle:Utilisateur')->find($idUt);
        $annoncesUt = $em->getRepository('nftAnnonceBundle:Annonce')->findAllByIdUt($idUt);
        if (!$membre) {
          throw $this->createNotFoundException(
                  'No member found for id ' . $idUt
          );
        } else {
        foreach ($annoncesUt as $annoncesUt) {
            $em->remove($annoncesUt);
        }
        $em->remove($membre);
        $em->flush();        
        $listeAnnonces = $em->getRepository('nftAnnonceBundle:Annonce')->findAll(); // Je récupère toutes les annonces
        return $this->render("nftAnnonceBundle:Annonce:index.html.twig", array('listeAnnonces' => $listeAnnonces));
        }
    }
}

?>