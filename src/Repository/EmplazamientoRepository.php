<?php

namespace App\Repository;

use App\Entity\Emplazamiento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Emplazamiento|null find($id, $lockMode = null, $lockVersion = null)
 * @method Emplazamiento|null findOneBy(array $criteria, array $orderBy = null)
 * @method Emplazamiento[]    findAll()
 * @method Emplazamiento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmplazamientoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Emplazamiento::class);
    }

//    /**
//     * @return Emplazamiento[] Returns an array of Emplazamiento objects
//     */
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
    public function findOneBySomeField($value): ?Emplazamiento
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
