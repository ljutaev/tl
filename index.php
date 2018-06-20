<?php

// close access
define('TL', TRUE);

session_start();

// require config
require_once 'config.php';


if($_SESSION['auth']['admin']){
    header("Location: ../view");
    exit;
}
if(!$_SESSION['auth']['admin']){
    header("Location: " .PATH. "auth/enter.php");
    exit;
}


// require controller
//require_once CONTROLLER;
