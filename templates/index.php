<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Slim 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Todos</h1>
<form method="post" action="/" class="input_form">
    <input type="text" name="task" class="task_input">
    <button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
</form>
<ul>
<?php foreach($todos as $todo) {
    if ($todo['completed'] == 0) {
        echo '<li>' . $todo['task'] .
            '</li><div class="container"><a class="markDone" href="/markDone?id=' . $todo['id'] . '">mark done</a>
            <a class="delete" href="/delete?id=' . $todo['id'] . '">delete</a></div>';
    } else {
        echo '<li>' . $todo['task'] .
            '</li><a href="/delete?id=' . $todo['id'] . '">delete</a>';
    }
  //  <a href="/delete?completed=true&id=
} ?>
</ul>
<a href="/">Uncompleted Todos</a>
<a href="/completed">Completed Todos</a>
</body>
</html>
