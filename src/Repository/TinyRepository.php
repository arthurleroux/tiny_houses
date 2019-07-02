<?php

namespace App\Repository;

use App\Entity\Tiny;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Tiny|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tiny|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tiny[]    findAll()
 * @method Tiny[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TinyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Tiny::class);
    }

    // /**
    //  * @return Tiny[] Returns an array of Tiny objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tiny
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
