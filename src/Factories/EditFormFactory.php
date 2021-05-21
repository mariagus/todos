<?php


namespace App\Factories;


use App\Controllers\EditFormController;
use Psr\Container\ContainerInterface;

/**
 * Class EditFormFactory
 * @package App\Factories
 */
class EditFormFactory
{
    /**
     * @param ContainerInterface $container
     * @return EditFormController
     */
    public function __invoke(ContainerInterface $container): EditFormController
    {
        $model = $container->get('TasksModel');
        $view = $container->get('renderer');
        return new EditFormController($model, $view);
    }
}
