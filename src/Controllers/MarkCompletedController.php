<?php


namespace App\Controllers;

use App\Models\TasksModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Class MarkCompletedController
 * @package App\Controllers
 */
class MarkCompletedController
{
    /**
     * @var TasksModel
     */
    protected $model;


    /**
     * MarkCompletedController constructor.
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
        $this->model->markCompleted($id);
       return $response->withHeader('Location', '/');
    }
}