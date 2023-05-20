<?php 
    define("fileName", "todo.json");
    $todo_name = $_POST['todo_name'];
    $json = file_get_contents(fileName);
    $jsonArray = json_decode($json, true);
?>