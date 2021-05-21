<?php


namespace App\Controllers;

use App\Models\TasksModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


/**
 * Class GetCompletedController
 * @package App\Controllers
 */
class GetCompletedController
{
    /**
     * @var TasksModel
     */
    protected $model;
    /**
     * @var
     */
    protected $view;

    /**
     * GetCompletedController constructor.
     * @param TasksModel $model
     * @param $view
     */
    public function __construct(TasksModel $model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return mixed
     */
    public function __invoke(Request $request, Response $response, $args)
    {
        $todos = $this->model->getCompletedTasks();
        return $this->view->render($response, "index.php", ['todos'=> $todos]);
    }
}