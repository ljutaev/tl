<?php

// close access
defined('TL') or die ('Acccess denied');

session_start();

// require model
require_once MODEL;

// require functions
require_once 'functions/functions.php';

// get ckecks array
$checks = checks();

// get workers array
$workers = get_workers(); 

// get dynamic part of template
$view = empty($_GET['view']) ? 'start' : $_GET['view'];

switch ($view) {
    // get ckecks
	case('check'):
        $check_id = abs( (int)$_GET['check_id'] );
        if($check_id){
            $sep_check = get_check($check_id);
        }
    break;
    // edit ckecks
    case('edit_check'):
    	$check_id = abs( (int)$_GET['check_id'] );
        
        if($check_id){
            $sep_check = get_check($check_id);
        }
        if($_POST){
            if(edit_check($check_id)) redirect('?view=check');
                else redirect();
        }
    break;
    // add check
    case('add_check'):
        $worker_id = abs( (int)$_GET['worker_id'] );
        if($worker_id){
            $worker = get_worker_id($worker_id);
        }
        if($_POST){
            if(add_check()) header("Location: ?view=panel");
                else redirect();
        }
    break;
    // del check
    case('del_check'):
        $check_id = (int)$_GET['check_id'];
        if(del_check($check_id)) header("Location: ?view=panel");
    break;
    


    
}



// require view
require_once TEMPLATE.'index.php';

