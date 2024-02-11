<?php

namespace App\Repository;

use App\Entity\Champions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Champions>
 *
 * @method Champions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Champions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Champions[]    findAll()
 * @method Champions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChampionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Champions::class);
    }

//    /**
//     * @return Champions[] Returns an array of Champions objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Champions
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
