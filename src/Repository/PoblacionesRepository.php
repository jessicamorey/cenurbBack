<?php

namespace App\Repository;

use App\Entity\Poblaciones;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Poblaciones|null find($id, $lockMode = null, $lockVersion = null)
 * @method Poblaciones|null findOneBy(array $criteria, array $orderBy = null)
 * @method Poblaciones[]    findAll()
 * @method Poblaciones[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PoblacionesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Poblaciones::class);
    }

//    /**
//     * @return Poblaciones[] Returns an array of Poblaciones objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Poblaciones
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
