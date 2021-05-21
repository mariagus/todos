<?php


namespace App\Controllers;

use App\Models\TasksModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Class AddTaskController
 * @package App\Controllers
 */

class AddTaskController
{
    /**
     * @var TasksModel
     */
    protected $model;


    /**
     * AddTaskController constructor.
     * @param TasksModel $model
     */
    public function __construct(TasksModel $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function __invoke(Request $request, Response $response, $args)
    {
        $data = $request->getParsedBody();
        $task = $data['task']; // contains whatever the user typed into the form
        $this->model->addTask($task);
        return $response->withHeader('Location', '/');
    }
}