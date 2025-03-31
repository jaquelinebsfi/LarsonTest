<?php
    require_once ('../includes/Client.class.php');

    if($_SERVER['REQUEST_METHOD'] =='POST' && isset($_GET['title'])
     && isset($_GET['status'])&& isset($_GET['description'])){
        Client::create_task($_GET['title'],$_GET['status'],$_GET['description']);
    
    // Get the data from the request body


        }

?>