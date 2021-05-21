<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Slim 4</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<form method="post" action="/edit" class="input_form">
    <h2>Edit task</h2>
    <input type="text" name="task" class="task_input" value="<?php echo $todos['task']?>">
    <input type="hidden" name="id" value="<?php echo $todos['id'] ?>">
    <button type="submit" name="submit" id="add_btn" class="add_btn">edit</button>
</form>
</body>
</html>