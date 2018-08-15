<?php

namespace App\Repository;

use App\Entity\Colonia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Colonia|null find($id, $lockMode = null, $lockVersion = null)
 * @method Colonia|null findOneBy(array $criteria, array $orderBy = null)
 * @method Colonia[]    findAll()
 * @method Colonia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ColoniaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Colonia::class);
    }

//    /**
//     * @return Colonia[] Returns an array of Colonia objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Colonia
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
