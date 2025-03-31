<?php
    require_once ('../includes/Client.class.php');

    if($_SERVER['REQUEST_METHOD'] =='PUT'&& isset($_GET['id']) && isset($_GET['title'])
     && isset($_GET['status'])&& isset($_GET['description'])){
        Client::update_task($_GET['id'],$_GET['title'],$_GET['status'],$_GET['description']);
    
    // Get the data from the request body


        }

?>