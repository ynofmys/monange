<?php

namespace App\Repository;

use App\Entity\NTypeHistorique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method NTypeHistorique|null find($id, $lockMode = null, $lockVersion = null)
 * @method NTypeHistorique|null findOneBy(array $criteria, array $orderBy = null)
 * @method NTypeHistorique[]    findAll()
 * @method NTypeHistorique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NTypeHistoriqueRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, NTypeHistorique::class);
    }

    // /**
    //  * @return NTypeHistorique[] Returns an array of NTypeHistorique objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NTypeHistorique
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
