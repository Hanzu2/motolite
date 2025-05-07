<?php
    session_start();

    require '../config.php';
    require '../idiorm.php';
    
    ORM::configure('mysql:host='.DB_HOST.';dbname='.DB_NAME);
    ORM::configure('username', USERNAME);
    ORM::configure('password', PASSWORD);

    $page = !empty($_GET['page']) ? $_GET['page'] : "index";

    require_once "header.php";

    require_once 'includes/'.$page . ".php";

    require_once "footer.php";