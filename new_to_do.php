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
    
    // Literally overides file content with new appended json data and creates new file if file doesn't exist
    file_put_contents(fileName, json_encode($jsonArray, JSON_PRETTY_PRINT));
}

header('location: to_do_list.php');
?>
