<?php


namespace App\Controllers;

use App\Models\TasksModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Class EditTaskController
 * @package App\Controllers
 */
class EditTaskController
{
    /**
     * @var TasksModel
     */
    protected $model;

    /**
     * EditTaskController constructor.
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
        $id = $data['id'];
        $task = $data['task'];
        $this->model->editTask($id, $task);
        return $response->withHeader('Location', '/');
    }
}