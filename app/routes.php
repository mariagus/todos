<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {

    $app->get('/', 'GetUncompletedController');
    $app->get('/completed', 'GetCompletedController');
    $app->post('/', 'AddTaskController');
};
