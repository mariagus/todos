<?php


namespace App\Factories;

use App\Controllers\GetUncompletedController;
use Psr\Container\ContainerInterface;

/**
 * Class GetUncompletedFactory
 * @package App\Factories
 */
class GetUncompletedFactory
{
    /**
     * @param ContainerInterface $container
     * @return GetUncompletedController
     */
    public function __invoke(ContainerInterface $container): GetUncompletedController
    {
        $model = $container->get('TasksModel');
        $view = $container->get('renderer');
        return new GetUncompletedController($model, $view);
    }
}