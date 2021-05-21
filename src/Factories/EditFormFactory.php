<?php


namespace App\Factories;


use App\Controllers\EditFormController;
use Psr\Container\ContainerInterface;

class EditFormFactory
{
    public function __invoke(ContainerInterface $container): EditFormController
    {
        $model = $container->get('TasksModel');
        $view = $container->get('renderer');
        return new EditFormController($model, $view);
    }
}
