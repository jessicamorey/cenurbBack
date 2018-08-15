<?php

namespace App\Repository;

use App\Entity\CensoMunicipio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CensoMunicipio|null find($id, $lockMode = null, $lockVersion = null)
 * @method CensoMunicipio|null findOneBy(array $criteria, array $orderBy = null)
 * @method CensoMunicipio[]    findAll()
 * @method CensoMunicipio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CensoMunicipioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CensoMunicipio::class);
    }

//    /**
//     * @return CensoMunicipio[] Returns an array of CensoMunicipio objects
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
    public function findOneBySomeField($value): ?CensoMunicipio
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
