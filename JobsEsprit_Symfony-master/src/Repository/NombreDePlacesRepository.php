<?php

namespace App\Repository;

use App\Entity\NombreDePlaces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NombreDePlaces>
 *
 * @method NombreDePlaces|null find($id, $lockMode = null, $lockVersion = null)
 * @method NombreDePlaces|null findOneBy(array $criteria, array $orderBy = null)
 * @method NombreDePlaces[]    findAll()
 * @method NombreDePlaces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NombreDePlacesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NombreDePlaces::class);
    }

//    /**
//     * @return NombreDePlaces[] Returns an array of NombreDePlaces objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NombreDePlaces
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
