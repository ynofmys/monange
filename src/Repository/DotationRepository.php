<?php

namespace App\Repository;

use App\Entity\Dotation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Dotation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dotation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dotation[]    findAll()
 * @method Dotation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DotationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Dotation::class);
    }

    // /**
    //  * @return Dotation[] Returns an array of Dotation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dotation
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
