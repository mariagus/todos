<?php


namespace App\Controllers;

use App\Models\TasksModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Class DeleteTaskController
 * @package App\Controllers
 */
class DeleteTaskController
{
    /**
     * @var TasksModel
     */
    protected $model;

    /**
     * DeleteTaskController constructor.
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
        $data = $request->getQueryParams();
        $id = $data['id']; // contains whatever the user typed into the form
        $this->model->deleteTask($id);
        $currentLocation = $request->getHeader('HTTP_REFERER');
        return $response->withHeader('Location', $currentLocation);
    }
}