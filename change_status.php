<?php 
    require_once("./getFileContent.php");
    $status = $jsonArray[$todo_name]['completed'];
    $jsonArray[$todo_name]['completed'] = !$status;
    require_once("./overrideFileContent.php");
    require_once("./redirectIndex.php");
    exit;
?>