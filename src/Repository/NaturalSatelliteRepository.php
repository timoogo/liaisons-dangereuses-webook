<?php

namespace App\Repository;

use App\Entity\NaturalSatellite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NaturalSatellite|null find($id, $lockMode = null, $lockVersion = null)
 * @method NaturalSatellite|null findOneBy(array $criteria, array $orderBy = null)
 * @method NaturalSatellite[]    findAll()
 * @method NaturalSatellite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NaturalSatelliteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NaturalSatellite::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(NaturalSatellite $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(NaturalSatellite $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return NaturalSatellite[] Returns an array of NaturalSatellite objects
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
    public function findOneBySomeField($value): ?NaturalSatellite
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
