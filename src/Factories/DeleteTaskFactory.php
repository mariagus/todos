<?php


namespace App\Factories;

use App\Controllers\DeleteTaskController;
use Psr\Container\ContainerInterface;

/**
 * Class DeleteTaskFactory
 * @package App\Factories
 */
class DeleteTaskFactory
{
    /**
     * @param ContainerInterface $container
     * @return DeleteTaskController
     */
    public function __invoke(ContainerInterface $container): DeleteTaskController
    {
        $model = $container->get('TasksModel');
        return new DeleteTaskController($model);
    }
}