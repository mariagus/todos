<?php


namespace App\Controllers;

use App\Models\TasksModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Class EditFormController
 * @package App\Controllers
 */
class EditFormController
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
     * EditFormController constructor.
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
        $data = $request->getQueryParams();
        $id = $data['id'];
        $todos = $this->model->getTask($id);
        return $this->view->render($response, "editTask.php", ['todos'=> $todos]);
    }
}