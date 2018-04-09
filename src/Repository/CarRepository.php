<?php

namespace App\Repository;

use App\Entity\Car;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CarRepository extends ServiceEntityRepository
{
    /**
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Car::class);
    }

    /**
     * @param string $field
     * @param $value
     *
     * @return Car[] Returns an array of Car objects
     */
    public function findByField(string $field, $value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere(sprintf('c.%s = :val', $field))
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @param string $field
     * @param $value
     *
     * @return Car|null
     */
    public function findOneByField(string $field, $value): ?Car
    {
        return $this->createQueryBuilder('c')
            ->andWhere(sprintf('c.%s = :val', $field))
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
}
