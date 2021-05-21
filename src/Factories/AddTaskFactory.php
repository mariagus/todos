<?php


namespace App\Factories;


use App\Controllers\AddTaskController;
use Psr\Container\ContainerInterface;

/**
 * Class AddTaskFactory
 * @package App\Factories
 */
class AddTaskFactory
{
    /**
     * @param ContainerInterface $container
     * @return AddTaskController
     */
    public function __invoke(ContainerInterface $container): AddTaskController
    {
        $model = $container->get('TasksModel');
        return new AddTaskController($model);
    }
}