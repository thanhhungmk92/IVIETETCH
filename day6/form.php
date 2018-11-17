<?php
    $task_list=filter_input(INPUT_POST,'tasklist', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
    $action=filter_input(INPUT_POST,'action');
    if($task_list===NULL)
    {
        $task_list=array(); // rỗng
    }
    switch($action)
    {
        case 'add':
        $new_task=filter_input(INPUT_POST,'task');
        if(empty($new_task))
        {
            $errors[]='The new task cannot be empty';
        }
        else
        {
            $task_list[]= $new_task;
        }
        break;

        case 'delete':
        $task_index=filter_input(INPUT_POST,'taskid', FILTER_VALIDATE_INT);
        if($task_index===NULL || $task_index===FALSE)
        {
            $errors[]="The task cannot be delete";
        }
        else
        {
            unset($task_list[$task_index]);
            $task_list=array_values($task_list);
        }

        break;
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF8">
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	<style>
	input[type=text] {
    width: 20%;
    padding: 10px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
label {
    width:50px;
    text-align: right;
}
#select {
    width:300px;
    padding:8px;
}
</style>
</head>
<body>
    <div>
        <div id="tasklist">
            <h1>Task List Manager</h1>
        </div>
        <hr>
        <div>
            <?php if(count($task_list)==0) :?>
                <p> There are no tasks in the task</p>
            <?php else :?>
            <ul>
                <?php foreach( $task_list as $id => $task ) :?>
                <li><?php echo $id+1 ."-". htmlspecialchars($task); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
            <hr>
            <form action="form.php" method="POST">
                <?php foreach($task_list as $task) :?>
                <input type="hidden" name="tasklist[]" value="<?php echo htmlspecialchars($task); ?>">
            <?php endforeach; ?>
            <h2>Ann Task</h2>
            <label>Task</label>
            <input type="text" name="task" id="task"><br>
            <input type="hidden" name="action" value="add">
            <input type="submit" name="add" value="Add Task">
            <hr>
        </form>
        <?php if(count($task_list)>0) : ?>
            <h2> Delete Task</h2>
            <form action="form.php" method="post">
                <?php foreach ($task_list as $task) : ?>
                    <input type="hidden" name="tasklist[]" value="<?php echo htmlspecialchars($task); ?>">
                <?php endforeach; ?>
            <label> Task </label>s
            <select id="select" name="taskid">
                <?php foreach ($task_list as $id => $task) : ?>
                <option id="taskid" value="<?php echo $id; ?>"> <?php echo htmlspecialchars($task) ;?></option>
            <?php endforeach; ?>
            </select><br>
            <input type="hidden" name="action" value="delete">
            <input type="submit" name="delete" value="Delete task">
        </form>
    <?php endif; ?>
            
        </div>
    </div>

</body>
</html>