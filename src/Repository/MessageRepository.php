<?php

namespace App\Repository;

use App\Entity\Message;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Message|null find($id, $lockMode = null, $lockVersion = null)
 * @method Message|null findOneBy(array $criteria, array $orderBy = null)
 * @method Message[]    findAll()
 * @method Message[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Message::class);
    }

    // /**
    //  * @return Message[] Returns an array of Message objects
    //  */

    public function getAllReceiver($user){

       
        return $this->createQueryBuilder('message')
        ->addSelect('sender')    
        ->join('message.sender', 'sender', 'WITH', 'sender = message.sender')   
        ->where('message.receiver= :user')
        ->setParameter('user', $user->getId())
        ->groupBy('sender')
        ->orderBy('message.send_at', 'DESC')
        ->getQuery()
        ->getResult()
    ;
    }


    public function getAllSender($user){

       
        return $this->createQueryBuilder('message')
      
        ->addSelect('receiver')    
        ->join('message.receiver', 'receiver', 'WITH', 'receiver = receiver.message')
        ->where('message.sender = :user')
        ->setParameter('user', $user->getId())
        ->groupBy('sender')
        ->getQuery()
        ->getResult()
    ;
    }


    // public function getOneDiscussion($user, $user2){

       
    //     return $this->createQueryBuilder('message')
    //     ->where('message.sender = :user')
    //     ->andWhere('message.receiver = :user2')
    //     ->orWhere('message.sender = :user2')
    //     ->andWhere('message.receiver = :user1')
    //     ->setParameter('user', $user->getId())
    //     ->setParameter('user2', $user2->getId())
    //     ->getQuery()
    //     ->getResult()
    // ;
    // }




    // /**
    //  * @return Message[] Returns an array of Message objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Message
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
