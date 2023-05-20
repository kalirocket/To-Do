<?php 
    const fileName = 'todo.json';
    $jsonArray = [];

    if (file_exists(fileName)){
        $json = file_get_contents(fileName);
        $jsonArray = json_decode($json, true);
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>to do list</title>
</head>
<body>
    
    <form action="new_to_do.php" method="post">
        <input type="text" name="todo_name" placeholder="Enter your todo">
        <input type="submit" value="New Todo">
    </form>
    <br>
    <?php foreach ($jsonArray as $name => $status): ?>
        <div style="margin-bottom: 20px;">
            <!-- Checkbox -->
            <form action="change_status.php" method="post" style="display:inline-block">
                <input type="hidden" name="todo_name" value="<?php echo $name; ?>">
                <input type="checkbox" <?php echo $status['completed'] ? 'checked': ''; ?>>
            </form>
            <!-- Name -->
            <?php echo $name;?>

            <!-- Item -->
            <form action="./delete.php" method="post" style="display:inline-block;">
                <input type="hidden" name="todo_name" value="<?php echo $name; ?>">
                <button>Delete</button>
            </form>
        </div>
    <?php endforeach;
    ?>
    <script src="./changeListener.js"></script>
</body>
</html>