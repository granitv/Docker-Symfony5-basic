<?php

namespace App\Repository;

use App\Entity\Apps;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Apps|null find($id, $lockMode = null, $lockVersion = null)
 * @method Apps|null findOneBy(array $criteria, array $orderBy = null)
 * @method Apps[]    findAll()
 * @method Apps[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Apps::class);
    }

    // /**
    //  * @return Apps[] Returns an array of Apps objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Apps
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
