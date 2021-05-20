<?php


namespace App\Factories;

use App\Controllers\GetUncompletedController;
use Psr\Container\ContainerInterface;

class GetUncompletedControllerFactory
{
    public function __invoke(ContainerInterface $container): GetUncompletedController
    {
        $model = $container->get('TasksModel');
        $view = $container->get('renderer');
        return new GetUncompletedController($model, $view);
    }
}