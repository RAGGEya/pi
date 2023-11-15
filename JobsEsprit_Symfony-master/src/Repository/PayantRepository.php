<?php

namespace App\Repository;

use App\Entity\Payant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Payant>
 *
 * @method Payant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Payant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Payant[]    findAll()
 * @method Payant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PayantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Payant::class);
    }

//    /**
//     * @return Payant[] Returns an array of Payant objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Payant
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
