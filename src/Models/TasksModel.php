<?php


namespace App\Models;
use PDO;

/**
 * Class TasksModel
 * @package App\Models
 */

class TasksModel
{
    protected $db;

    public function __construct(PDO $db)
    {
       $this->db = $db;
    }
    public function getUncompletedTasks(): array
    {
        $query = $this->db->prepare('SELECT `task` FROM `todos` WHERE `completed` = 0;');
        $query->execute();
        return $query->fetchAll();
    }
    public function getCompletedTasks(): array
    {
        $query = $this->db->prepare('SELECT `task` FROM `todos` WHERE `completed` = 1;');
        $query->execute();
        return $query->fetchAll();
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