<?php 
    const fileName = 'todo.json';
    $todoName = $_POST['todo_name'] ?? '';
    $todoName = htmlspecialchars(trim($todoName));

    if ($todoName){
        $jsonArray = [];
        if (file_exists(fileName)){
            $json = file_get_contents(fileName);
            $jsonArray = json_decode($json, true);
        }
        $jsonArray[$todoName] = ['completed' => false];
        require_once("./overrideFileContent.php");
    }
    require_once("./redirectIndex.php");
    exit;
?>
