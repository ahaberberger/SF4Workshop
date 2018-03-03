<?php

namespace App\Repository;

use App\Entity\Thingy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Thingy|null find($id, $lockMode = null, $lockVersion = null)
 * @method Thingy|null findOneBy(array $criteria, array $orderBy = null)
 * @method Thingy[]    findAll()
 * @method Thingy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ThingyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Thingy::class);
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
