<?php

namespace App\Repository;

use App\Entity\VisitasColonia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method VisitasColonia|null find($id, $lockMode = null, $lockVersion = null)
 * @method VisitasColonia|null findOneBy(array $criteria, array $orderBy = null)
 * @method VisitasColonia[]    findAll()
 * @method VisitasColonia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VisitasColoniaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, VisitasColonia::class);
    }

//    /**
//     * @return VisitasColonia[] Returns an array of VisitasColonia objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VisitasColonia
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
