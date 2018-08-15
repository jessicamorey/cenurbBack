<?php

namespace App\Repository;

use App\Entity\LocNidosNoCol;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LocNidosNoCol|null find($id, $lockMode = null, $lockVersion = null)
 * @method LocNidosNoCol|null findOneBy(array $criteria, array $orderBy = null)
 * @method LocNidosNoCol[]    findAll()
 * @method LocNidosNoCol[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LocNidosNoColRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LocNidosNoCol::class);
    }

//    /**
//     * @return LocNidosNoCol[] Returns an array of LocNidosNoCol objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LocNidosNoCol
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
