<?php

// close access
defined('TL') or die ('Acccess denied');

// domain
define('PATH', 'http://traffic-lights/');

// model
define('MODEL', 'model/model.php');

// controller
define('CONTROLLER', 'controller/controller.php');

// view
define('VIEW', 'view/');

// active template
define('TEMPLATE', VIEW.'design/');

// server
define('HOST', 'localhost');

// user
define('USER', 'root');

// password
define('PASS', '');

// database
define('DB', 'tl-wd777');

// name project
define('TITLE', 'TrafficLights');

mysql_connect(HOST, USER, PASS) or die ('No connect...');
mysql_select_db(DB) or die ('No connect to DB');
mysql_query("SET NAMES 'UTF8'") or die ('Cant set charset');