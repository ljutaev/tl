<?php 
define('TL', TRUE);
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/config.php';

if($_SESSION['auth']['admin']){
    header("Location: ../view");
    exit;
}

if($_POST) {
	$login = trim(mysql_real_escape_string($_POST['login']));
	$pass = trim($_POST['pass']);
	$query = "SELECT user_id, login, password FROM users WHERE login = '$login' AND role_id = 7 LIMIT 1";
	$res = mysql_query($query);
    $row = mysql_fetch_assoc($res);
	if($row['password'] == md5($pass)){
		$_SESSION['auth']['admin'] = htmlspecialchars($row['user_name']);
		$_SESSION['auth']['user_id'] = $row['user_id'];
		header("Location: ../");
		exit;
	}else{
		$_SESSION['res'] = '<div class="error">Логин или пароль не совпадает!</div>';
        header("Location: {$_SERVER['PHP_SELF']}");
        exit;
	}
}
require_once '../view/design/inc/header.php';
?>

<section class="main login z-depth-2">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h1 class="main__header">Увійти</h1>
					<?php 
if(isset($_SESSION['res'])){
    echo $_SESSION['res'];
    unset($_SESSION['res']);
}
?>
						<div class="main__add">
							
							<form class="login" method="POSt">
								<div class="row">
        <div class="input-field col s12">
          <input name="login" type="text" class="validate">
          <label for="first_name">Логін</label>
        </div>
        <div class="input-field col s12">
          <input name="pass" type="text" class="validate">
          <label for="last_name">Пароль</label>
        </div>
      </div>
          <button  type="submit" class="waves-effect waves-light btn-large red">Увійти</button>
        
							
							</form>
					</div>
					
 
				</div>
			</div>
		</div>	
</section>

<?php require_once '../view/design/inc/footer.php'; ?>