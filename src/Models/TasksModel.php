<?php


namespace App\Models;


/**
 * Class TasksModel
 * @package App\Models
 */

class TasksModel
{
    protected $db;

    public function __construct(\PDO $db)
    {
       $this->db = $db;
    }
    public function getUncompletedTasks(): array
    {

    }
    public function getCompletedTasks(): array
    {

    }
    public function addTask(): array
    {

    }
    public function markTaskCompleted(): array
    {

    }
    public function deleteCompletedTask(): array
    {

    }
}