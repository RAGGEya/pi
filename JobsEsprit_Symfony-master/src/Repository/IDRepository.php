<?php

namespace App\Repository;

use App\Entity\ID;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ID>
 *
 * @method ID|null find($id, $lockMode = null, $lockVersion = null)
 * @method ID|null findOneBy(array $criteria, array $orderBy = null)
 * @method ID[]    findAll()
 * @method ID[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IDRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ID::class);
    }

//    /**
//     * @return ID[] Returns an array of ID objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ID
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
