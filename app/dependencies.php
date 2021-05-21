<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Slim\Views\PhpRenderer;

return function (ContainerBuilder $containerBuilder) {
    $container = [];

    $container[LoggerInterface::class] = function (ContainerInterface $c) {
        $settings = $c->get('settings');

        $loggerSettings = $settings['logger'];
        $logger = new Logger($loggerSettings['name']);

        $processor = new UidProcessor();
        $logger->pushProcessor($processor);

        $handler = new StreamHandler($loggerSettings['path'], $loggerSettings['level']);
        $logger->pushHandler($handler);

        return $logger;
    };

    $container['renderer'] = function (ContainerInterface $c) {
        $settings = $c->get('settings')['renderer'];
        $renderer = new PhpRenderer($settings['template_path']);
        return $renderer;
    };

    $container['db'] = function() {
        $db = new PDO('mysql:host=127.0.0.1;dbname=todosapp', 'root', 'password');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $db;
    };

    $container['TasksModel'] = DI\factory('\App\Factories\TasksModelFactory');
    $container['GetUncompletedController'] = DI\factory('\App\Factories\GetUncompletedFactory');
    $container['GetCompletedController'] = DI\factory('\App\Factories\GetCompletedFactory');
    $container['AddTaskController'] = DI\factory('\App\Factories\AddTaskFactory');
    $container['MarkCompletedController'] = DI\factory('\App\Factories\MarkCompletedFactory');
    $container['DeleteTaskController'] = DI\factory('\App\Factories\DeleteTaskFactory');
    $container['EditFormController'] = DI\factory('\App\Factories\EditFormFactory');
    $container['EditTaskController'] = DI\factory('\App\Factories\EditTaskFactory');

    $containerBuilder->addDefinitions($container);
};
