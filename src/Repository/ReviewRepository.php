<?php

namespace App\Repository;

use App\Entity\Review;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Review|null find($id, $lockMode = null, $lockVersion = null)
 * @method Review|null findOneBy(array $criteria, array $orderBy = null)
 * @method Review[]    findAll()
 * @method Review[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReviewRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Review::class);
    }


    public function checkReviewExist($trip, $author, $userRated)
    {
        return $this->createQueryBuilder('review')
            ->where('review.trip = :trip')
            ->andWhere('review.author = :author')
            ->andWhere('review.user_rated = :userRated')
            ->setParameter('trip', $trip)
            ->setParameter('author', $author)
            ->setParameter('userRated', $userRated)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function getReviewByUser($user)
    {
        return $this->createQueryBuilder('review')
        ->addSelect('author')    
        ->join('review.author', 'author', 'WITH', 'author = review.author')
        ->where('review.user_rated = :userRated')
        ->setParameter('userRated', $user)
        ->getQuery()
        ->getResult()
    ;
    }

    public function getReviewLeaveByUser($user)
    {
        return $this->createQueryBuilder('review')
        ->where('review.author = :userAuthor')
        ->setParameter('userAuthor', $user)
        ->getQuery()
        ->getResult()
    ;
    }


    public function getAverageByUser($userRated)
    {
        return $this->createQueryBuilder('review')
        ->select("avg(review.rating) as rate_avg, count(review.rating) as rate_count")
        ->where('review.user_rated = :user_rated')
        ->groupBy('review.user_rated')
        ->setParameter('user_rated', $userRated)
        ->getQuery()
        ->getResult()
    ;
    }

    // /**
    //  * @return Review[] Returns an array of Review objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Review
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
