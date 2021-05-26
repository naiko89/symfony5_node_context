<?php

namespace App\Repository;

use App\Entity\UsersAstro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UsersAstro|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsersAstro|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsersAstro[]    findAll()
 * @method UsersAstro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersAstroRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsersAstro::class);
    }

    // /**
    //  * @return UsersAstro[] Returns an array of UsersAstro objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UsersAstro
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
