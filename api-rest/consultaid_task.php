<?php
    require_once ('../includes/Client.class.php');

    if($_SERVER['REQUEST_METHOD'] =='GET'&& isset($_GET['id'])){
        Client::consultaid_task($_GET['id']);
    
        }
       

?>