<?php


namespace App\Factories;

use App\Controllers\EditTaskController;
use Psr\Container\ContainerInterface;

/**
 * Class EditTaskFactory
 * @package App\Factories
 */
class EditTaskFactory
{
    /**
     * @param ContainerInterface $container
     * @return EditTaskController
     */
    public function __invoke(ContainerInterface $container): EditTaskController
    {
        $model = $container->get('TasksModel');
        return new EditTaskController($model);
    }
}