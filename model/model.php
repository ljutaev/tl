<?php

// close access
defined('TL') or die ('Acccess denied');

// get ckecks
function checks(){
    $query = "SELECT * FROM checks ORDER BY ID";
    $res = mysql_query($query);
    
    $checks = array();
    while($row = mysql_fetch_assoc($res)){
        $checks[] = $row;
    }
    return $checks;
}

// get separate ckeck
function get_check($ckeck_id){
    $query = "SELECT * FROM checks WHERE ID = $ckeck_id";
    $res = mysql_query($query);
    
    $sep_check = array();
    $sep_check = mysql_fetch_assoc($res);
        
    return $sep_check;
}

// get workers
function get_workers(){
    $query = "SELECT * FROM workers ORDER BY ID";
    $res = mysql_query($query);
    
    $workers = array();
    while($row = mysql_fetch_assoc($res)){
        $workers[] = $row;
    }
    return $workers;
}

// get workers
function get_worker_id($worker_id){
    $query = "SELECT * FROM workers WHERE ID = $worker_id";
    $res = mysql_query($query);
    
    $worker = array();
    $worker = mysql_fetch_assoc($res);
        
    return $worker;
}

// edit check
function edit_check($check_id){
    $time = trim($_POST['time']);
    $date = trim($_POST['date']);
    // radio val
    $play_music = trim($_POST['play_music']);
    $greeting = trim($_POST['greeting']);
    $setdown = trim($_POST['setdown']);
    $candies = trim($_POST['candies']);
    $in_form = trim($_POST['in_form']);
    $business_card = trim($_POST['business_card']);
    $for_sale = trim($_POST['for_sale']);

    $worker = trim($_POST['worker']);
    $effectives = (int)($_POST['effectives']);
    $trouble_ansver = (int)$_POST['trouble_ansver'];
    $type_check = trim($_POST['type_check']);
    
    if(empty($effectives)){
        // если нет названия
        $_SESSION['edit_check']['res'] = "<div class='error'>Должно быть название страницы!</div>";
        return false;
    }else{
        $time = clear_admin($time);
        $date = $date;
        $worker = clear_admin($_POST['worker']);
        $effectives = clear_admin($effectives);
        $trouble_ansver = clear_admin($trouble_ansver);
        $type_check = clear_admin($_POST['type_check']);
        // radio val
	    $play_music = clear_admin($_POST['play_music']);
	    $greeting = clear_admin($_POST['greeting']);
	    $setdown = clear_admin($_POST['setdown']);
	    $candies = clear_admin($_POST['candies']);
	    $in_form = clear_admin($_POST['in_form']);
	    $business_card = clear_admin($_POST['business_card']);
	    $for_sale = clear_admin($_POST['for_sale']);


        if($worker == 'Микола'){
        	$query = "UPDATE checks SET
                    `time` = '$time',
                    `date` = '$date',
                    effectives = '$effectives',
                    trouble_ansver = '$trouble_ansver',
                    worker = '$worker',
                    type_check = '$type_check',
                    play_music = '$play_music',
                    greeting = '$greeting',
                    setdown = '$setdown',
                    candies = '$candies',
                    in_form = '$in_form',
                    business_card = '$business_card',
                    for_sale = '$for_sale'
                        WHERE ID = $check_id";
        }else{
        $query = "UPDATE checks SET
                    `time` = '$time',
                    `date` = '$date',
                    effectives = '$effectives',
                    trouble_ansver = $trouble_ansver
                        WHERE ID = $check_id";
                     }

        $res = mysql_query($query) or die(mysql_error());
        
        if(mysql_affected_rows() > 0){
            $_SESSION['answer'] = "<div class='success'>Перевірка оновлена!</div>";
            return true;
        }else{
            $_SESSION['edit_check']['res'] = "<div class='error'>Ошибка или Вы ничего не меняли!</div>";
            return false;
        }
    }
}

// add check
function add_check(){
    $time = trim($_POST['time']);
    $date = trim($_POST['date']);
    // radio val
    $play_music = trim($_POST['play_music']);
    $greeting = trim($_POST['greeting']);
    $setdown = trim($_POST['setdown']);
    $candies = trim($_POST['candies']);
    $in_form = trim($_POST['in_form']);
    $business_card = trim($_POST['business_card']);
    $for_sale = trim($_POST['for_sale']);

    $worker = trim($_POST['worker']);
    $effectives = (int)($_POST['effectives']);
    $trouble_ansver = (int)$_POST['trouble_ansver'];
    $type_check = trim($_POST['type_check']);
    
    if(empty($time)){
        // если нет названия
        $_SESSION['add_check']['res'] = "<div class='error'>Заповніть всі поля!</div>";
        $_SESSION['add_check']['time'] = $time;
        $_SESSION['add_check']['date'] = $date;
        $_SESSION['add_check']['worker'] = $worker;
        $_SESSION['add_check']['effectives'] = $effectives;
        $_SESSION['add_check']['trouble_ansver'] = $trouble_ansver;
        $_SESSION['add_check']['type_check'] = $type_check;
        
        $_SESSION['add_check']['play_music'] = $play_music;
        $_SESSION['add_check']['greeting'] = $play_music;
        $_SESSION['add_check']['setdown'] = $play_music;
        $_SESSION['add_check']['candies'] = $play_music;
        $_SESSION['add_check']['in_form'] = $play_music;
        $_SESSION['add_check']['business_card'] = $play_music;
        $_SESSION['add_check']['for_sale'] = $play_music;
        return false;
    }else{
        $time = $time;
        $date = $date;
        $effectives = $effectives;
        $worker = $worker;
        $trouble_ansver = $trouble_ansver;
        $type_check = $type_check;

        // radio val
        $play_music = $play_music;
        $greeting = $greeting;
        $setdown = $setdown;
        $candies = $candies;
        $in_form = $in_form;
        $business_card = $business_card;
        $for_sale = $for_sale;
        
        if($worker == 'Микола'){
            $query = "INSERT INTO checks (`time`, `date`, `effectives`, `type_check`, `trouble_ansver`, `worker`, `play_music`, `greeting`, `setdown`, `candies`, `in_form`, `business_card`, `for_sale`) VALUES ('$time', '$date', '$effectives', '$type_check', '$trouble_ansver', '$worker', '$play_music', '$greeting', '$setdown', '$candies', '$in_form', '$business_card', '$for_sale')";
        }else{
            $query = "INSERT INTO checks (`time`, `date`, `effectives`, `trouble_ansver`, `worker`) VALUES ('$time', '$date', '$effectives', '$trouble_ansver', '$worker')";
        }
        

        $res = mysql_query($query);
        
        if(mysql_affected_rows() > 0){
            $_SESSION['add_check']['res'] = "<div class='success'>Перевірка додана!</div>";
            return true;
        }else{
            $_SESSION['add_check']['res'] = "<div class='error'>Помилка при додаванні помилки!</div>";
            return false;
        }
    }
}

// del check
function del_check($check_id){
    $query = "DELETE FROM checks WHERE id = $check_id";
    $res = mysql_query($query);
    
    if(mysql_affected_rows() > 0){
        $_SESSION['answer'] = "<div class='success'>Перевірка видалена.</div>";
        return true;
    }else{
        $_SESSION['answer'] = "<div class='error'>Ошибка удаления страницы!</div>";
        return false;
    }
}
