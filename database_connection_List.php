<?php
//database_connection_List.php

$connect = new PDO("mysql:host=localhost;dbname=projeto_lista", "root", "");

session_start();

$_SESSION["user_id"] = "1";

?>