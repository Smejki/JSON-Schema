<?php

namespace App\Controller;

use App\Repository\CarRepository;
use Symfony\Component\HttpFoundation\Response;

class CarController
{
    /**
     * @return Response
     */
    public function getAction(CarRepository $carRepository): Response
    {
        $cars = $carRepository->findAll();

        $response = json_encode($cars);

        return new Response(
            '<html><body>Lucky number: '.$response.'</body></html>'
        );
    }
}
