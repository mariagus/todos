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
        $query = $this->db->prepare('SELECT `id`, `task`, `completed` FROM `todos` WHERE `completed` = 0 AND `deleted` = 0;');
        $query->execute();
        return $query->fetchAll();
    }

    public function getCompletedTasks(): array
    {
        $query = $this->db->prepare('SELECT `id`, `task`, `completed` FROM `todos` WHERE `completed` = 1 AND `deleted` = 0;');
        $query->execute();
        return $query->fetchAll();
    }

    public function addTask($task): bool
    {
        $query = $this->db->prepare('INSERT INTO `todos` (`task`) VALUES (:task);');
        $query->bindParam('task', $task);
        $query->execute();
        return true;
    }

    public function markCompleted($id): bool
    {
        $query = $this->db->prepare('UPDATE todos SET `completed` = 1 WHERE `id` = :id;');
        $query->bindParam('id', $id);
        $query->execute();
        return true;
    }

    public function deleteTask($id): bool
    {
        $query = $this->db->prepare('DELETE FROM `todos` WHERE `id` = :id;');
        $query->bindParam('id', $id);
        $query->execute();
        return true;
    }

    public function editForm($id): array
    {
        $query = $this->db->prepare('SELECT `id` FROM `todos` WHERE `id` = :id;');
        $query->execute();
        return $query->fetchAll();
    }

    public function editTask($id, $task): bool
    {
        $query = $this->db->prepare('UPDATE todos SET `task` = :task WHERE `id` = :id;');
        $query->bindParam('id', $id);
        $query->bindParam('task', $task);
        $query->execute();
        return true;
    }
}