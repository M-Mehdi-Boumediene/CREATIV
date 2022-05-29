<?php

namespace Cosanit\CosanitBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * NeufsRepository
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NeufsRepository extends EntityRepository
{
    public function findAllneufs(){
        $qb = $this->createQueryBuilder('u')
            ->select('u')

            ->orderBy('u.id','DESC')
    ;
        return $qb->getQuery()->getResult();
    }


}
