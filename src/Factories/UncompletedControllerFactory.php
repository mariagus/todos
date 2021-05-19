<?php


namespace App\Factories;
use App\Controllers\ListingsController;
use App\Controllers\UncompletedController;
use Psr\Container\ContainerInterface;

class UncompletedControllerFactory
{
    public function __invoke(ContainerInterface $container): UncompletedController
    {
        $model = $container->get('TasksModel');
        $view = $container->get('renderer');
        return new UncompletedController($model, $view);
    }
}