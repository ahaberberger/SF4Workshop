<?php

namespace App\Repository;

use App\Entity\Thangy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Thangy|null find($id, $lockMode = null, $lockVersion = null)
 * @method Thangy|null findOneBy(array $criteria, array $orderBy = null)
 * @method Thangy[]    findAll()
 * @method Thangy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ThangyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Thangy::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('t')
            ->where('t.something = :value')->setParameter('value', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
