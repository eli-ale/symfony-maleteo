<?php

namespace App\Repository;

use App\Entity\Solocitud;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Solocitud|null find($id, $lockMode = null, $lockVersion = null)
 * @method Solocitud|null findOneBy(array $criteria, array $orderBy = null)
 * @method Solocitud[]    findAll()
 * @method Solocitud[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SolocitudRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Solocitud::class);
    }

    // /**
    //  * @return Solocitud[] Returns an array of Solocitud objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Solocitud
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
