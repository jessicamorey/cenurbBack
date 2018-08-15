<?php

namespace App\Repository;

use App\Entity\Territorio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Territorio|null find($id, $lockMode = null, $lockVersion = null)
 * @method Territorio|null findOneBy(array $criteria, array $orderBy = null)
 * @method Territorio[]    findAll()
 * @method Territorio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TerritorioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Territorio::class);
    }

//    /**
//     * @return Territorio[] Returns an array of Territorio objects
//     */
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
    public function findOneBySomeField($value): ?Territorio
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
