<?php


namespace App\Factories;
use App\Models\TasksModel;
use Psr\Container\ContainerInterface;

/**
 * Class TasksModelFactory
 * @package App\Factories
 */
class TasksModelFactory
{
    /**
     * @param ContainerInterface $container
     * @return TasksModel
     */
    public function __invoke(ContainerInterface $container): TasksModel
    {
        $db = $container->get('db');
        return new TasksModel($db);
    }
}