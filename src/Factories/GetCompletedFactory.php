<?php


namespace App\Factories;

use App\Controllers\GetCompletedController;
use Psr\Container\ContainerInterface;

/**
 * Class GetCompletedFactory
 * @package App\Factories
 */
class GetCompletedFactory
{
    /**
     * @param ContainerInterface $container
     * @return GetCompletedController
     */
    public function __invoke(ContainerInterface $container): GetCompletedController
    {
        $model = $container->get('TasksModel');
        $view = $container->get('renderer');
        return new GetCompletedController($model, $view);
    }
}