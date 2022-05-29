<?php

namespace Cosanit\CosanitBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CategoriesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoriesRepository extends EntityRepository
{
    public function findVilles(){
        $qb = $this->createQueryBuilder('u')
            ->select('u')

            ->where('u.inter = :inter')

            ->setParameter('inter', 0)

         ;
        return $qb->getQuery()->getResult();
    }
    public function findInter(){
        $qb = $this->createQueryBuilder('u')
            ->select('u')

            ->where('u.inter = :inter')
            ->orderBy('u.id','DESC')

            ->setParameter('inter', 1)
        ;
        return $qb->getQuery()->getResult();
    }
}
