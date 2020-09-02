<?php

namespace App\Repository;

use App\Entity\BarcodeTesting;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BarcodeTesting|null find($id, $lockMode = null, $lockVersion = null)
 * @method BarcodeTesting|null findOneBy(array $criteria, array $orderBy = null)
 * @method BarcodeTesting[]    findAll()
 * @method BarcodeTesting[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BarcodeTestingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BarcodeTesting::class);
    }

    // /**
    //  * @return BarcodeTesting[] Returns an array of BarcodeTesting objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BarcodeTesting
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
