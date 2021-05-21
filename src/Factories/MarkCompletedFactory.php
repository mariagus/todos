<?php


namespace App\Factories;


use App\Controllers\MarkCompletedController;
use Psr\Container\ContainerInterface;

/**
 * Class MarkCompletedFactory
 * @package App\Factories
 */
class MarkCompletedFactory
{
    /**
     * @param ContainerInterface $container
     * @return MarkCompletedController
     */
    public function __invoke(ContainerInterface $container): MarkCompletedController
    {
        $model = $container->get('TasksModel');
        return new MarkCompletedController($model);
    }
}