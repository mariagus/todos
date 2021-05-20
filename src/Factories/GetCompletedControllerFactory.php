<?php


namespace App\Factories;

use App\Controllers\GetCompletedController;
use Psr\Container\ContainerInterface;

class GetCompletedControllerFactory
{
    public function __invoke(ContainerInterface $container): GetCompletedController
    {
        $model = $container->get('TasksModel');
        $view = $container->get('renderer');
        return new GetCompletedController($model, $view);
    }
}