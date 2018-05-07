<?php

namespace App\Repository;

use App\Entity\BookStorage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BookStorage|null find($id, $lockMode = null, $lockVersion = null)
 * @method BookStorage|null findOneBy(array $criteria, array $orderBy = null)
 * @method BookStorage[]    findAll()
 * @method BookStorage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookStorageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BookStorage::class);
    }

//    /**
//     * @return BookStorage[] Returns an array of BookStorage objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BookStorage
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
