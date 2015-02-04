<?php
    require_once(__DIR__ . "/../model/database.php");
    
    $connection = new mysqli($host, $username, $password, $database);
    
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    
    echo "<p>Title: $title</p<";
    echo "<p>post: $post</p>";

    $connection->close();