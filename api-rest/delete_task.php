<?php
    require_once ('../includes/Client.class.php');

    if($_SERVER['REQUEST_METHOD'] =='DELETE' && isset($_GET['id'])){
        Client::delete_task($_GET['id']);
    
    // Get the data from the request body


        }

?>