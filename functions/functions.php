<?php

defined('TL') or die('Access denied');

// redirect
function redirect(){
    $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    header("Location: $redirect");
    exit;
}
function clear_admin($var){
    $var = mysql_real_escape_string($var);
    return $var;
}
// logout
function logout(){
    unset($_SESSION['auth']);
}


