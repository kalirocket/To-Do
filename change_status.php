<?php 
    define("fileName", "todo.json");
    $todo_name = $_POST['todo_name'];
    $json = file_get_contents(fileName);
    $jsonArray = json_decode($json, true);
    $status = $jsonArray[$todo_name]['completed'];

    $jsonArray[$todo_name]['completed'] = !$status;

    file_put_contents(fileName, json_encode($jsonArray, JSON_PRETTY_PRINT));

    header("location: to_do_list.php");
?>