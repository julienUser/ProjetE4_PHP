<?php
// src/nftAnnonceBundle/Entity/AnnonceRepository.php
namespace nftAnnonceBundle\Entity;

use Doctrine\ORM\EntityRepository;

class AnnonceRepository extends EntityRepository
{
    public function findAllByIdUt($idUt)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT a FROM nftAnnonceBundle:Annonce a WHERE a.idUt ='.$idUt 
            )
            ->getResult();
    }
}
?>