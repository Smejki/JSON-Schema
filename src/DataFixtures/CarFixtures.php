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
        foreach ($this->getCarsData() as $information) {
            $product = $this->buildCar($information['model'], $information['brand'], $information['start'], $information['end']);
            $manager->persist($product);
        }

        $manager->flush();
    }

    /**
     * @param string $model
     * @param string $brand
     * @param \DateTime $startDate
     * @param \DateTime|null $endDate
     * @return Car
     */
    private function buildCar(string $model, string $brand, \DateTime $startDate, ?\DateTime $endDate): Car
    {
        $product = new Car();

        $product->setModel($model)
            ->setBrand($brand)
            ->setStartProductionDate($startDate)
            ->setEndProductionDate($endDate);

        return $product;
    }

    /**
     * @return array
     */
    private function getCarsData(): array
    {
        return [
            [
                'model' => '407',
                'brand' => 'Peugeot',
                'start' => new \DateTime('2005-01-01'),
                'end' => null,
            ]
        ];
    }
}
