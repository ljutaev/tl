<?php

// close access
defined('TL') or die ('Acccess denied'); 
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>

	<meta charset="utf-8">

	<title>999 - Головна</title>
	<meta name="description" content=''>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?php echo PATH ?><?php echo TEMPLATE ?>/libs/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
	<link rel="stylesheet" href="<?php echo PATH ?><?php echo TEMPLATE ?>/css/main.min.css">
	

</head>
<body>
	<header>
		<nav class="z-depth-3">
	 	<div class="container">
    <div class="nav-wrapper ">
      <a href="<?php echo PATH ?>" class="brand-logo"><img src="<?php echo PATH ?><?php echo TEMPLATE ?>/img/dev-logo.png"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="zmdi zmdi-menu"></i></a>
      <ul class="right hide-on-med-and-down">
      	<!--<?php /*if(!$_SESSION['auth']['admin']) :*/?>
        <li><a href="/"><i class="zmdi zmdi-lock material-icons left"></i>Авторизація</a></li>
    	<?php /*else: */?>-->
		
		<li><a href="?view=panel"><i class="zmdi zmdi-view-dashboard material-icons left"></i>Панель керування</a></li>
    	<li><a href="?view=new_check"><i class="zmdi zmdi-group material-icons left"></i>Нова перевірка</a></li>
    	<li><a href="?view=analytics"><i class="zmdi zmdi-equalizer material-icons left"></i>Аналітика</a></li>
    	<!--<?php/* endif; */?>-->
      </ul>
    </div>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
  	<?php if(!$_SESSION['auth']['admin']) :?>
        <li><a href="/"><i class="zmdi zmdi-lock material-icons left"></i>Авторизація</a></li>
    	<?php else: ?>
    <li><a href="#"><i class="zmdi zmdi-view-dashboard material-icons left"></i>Панель керування</a></li>
    	<li><a href="#"><i class="zmdi zmdi-group material-icons left"></i>Нова перевірка</a></li>
    	<li><a href="#"><i class="zmdi zmdi-equalizer material-icons left"></i>Аналітика</a></li>
    	<?php endif; ?>
  </ul>

	</header>
	