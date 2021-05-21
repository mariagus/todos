<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Slim 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<h1>Todos</h1>
</header>
<form method="post" action="/" class="input_form">
    <input type="text" name="task" class="task_input">
    <button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
</form>
<ul>
<?php foreach($todos as $todo) {
    if ($todo['completed'] == 0) {
        echo '<div class="container"><a class="markDone" href="/markDone?id=' . $todo['id'] . '">️⚪️️</a>
            <li>' . $todo['task'] . '</li>
            <a class="edit" href="/editTask?id=' . $todo['id'] . '&task=' . $todo['task'] . '">🖋</a>
            <a class="delete" href="/delete?id=' . $todo['id'] . '">🗑</a></div>';
    } else {
        echo '<div class="container"><li class="completed">' . $todo['task'] .
            '</li><a href="/delete?id=' . $todo['id'] . '">🗑</a></div>';
    }

} ?>
</ul>
<div class="container">
<a href="/">Uncompleted Todos</a>
<a href="/completed">Completed Todos</a>
</div>
</body>
</html>
