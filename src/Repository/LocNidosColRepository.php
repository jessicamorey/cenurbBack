<?php

namespace App\Repository;

use App\Entity\LocNidosCol;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LocNidosCol|null find($id, $lockMode = null, $lockVersion = null)
 * @method LocNidosCol|null findOneBy(array $criteria, array $orderBy = null)
 * @method LocNidosCol[]    findAll()
 * @method LocNidosCol[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LocNidosColRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LocNidosCol::class);
    }

//    /**
//     * @return LocNidosCol[] Returns an array of LocNidosCol objects
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
    public function findOneBySomeField($value): ?LocNidosCol
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
