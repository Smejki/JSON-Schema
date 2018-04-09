<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CarFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($counter = 1; $counter <= 100; ++$counter) {
            $product = $this->buildCar(
                'Patentwagen',
                'Benz',
                new \DateTime('1844-01-01'),
                new \DateTime('1854-01-01'),
                $counter
            );

            $manager->persist($product);
        }

        $manager->flush();
    }

    /**
     * @param string         $model
     * @param string         $brand
     * @param \DateTime      $startDate
     * @param \DateTime|null $endDate
     * @param int            $counter
     *
     * @return Car
     */
    private function buildCar(string $model, string $brand, \DateTime $startDate, ?\DateTime $endDate, int $counter): Car
    {
        $modifyingTime = sprintf('+%s year', $counter);

        $startDate->modify($modifyingTime);
        $endDate instanceof \DateTime ? $endDate->modify($modifyingTime) : null;

        return (new Car())
            ->setModel($model.'_'.$counter)
            ->setBrand($brand.'_'.$counter)
            ->setStartProductionDate($startDate)
            ->setEndProductionDate($endDate);
    }
}
