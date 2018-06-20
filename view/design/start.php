<?php

// close access
defined('TL') or die ('Acccess denied');

?>
<section class="main z-depth-2">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h1 class="main__header">Вітаємо! <?php 
if(isset($_SESSION['auth']['admin'])){
    echo $_SESSION['auth']['admin'];
}
?></h1>
					<p class="main__desk">Виберіть працівника для перевірки:</p>
					<?php if($workers): ?>
					<?php foreach($workers as $worker): ?>
					<div class="main__buttons">
						<a href="?view=add_check&worker_id=<?=$worker['id']?>" class="waves-effect waves-light btn-large "><i class="zmdi zmdi-plus material-icons left"></i><?php echo $worker['firstname']?> </a>
					</div>    
					<?php endforeach; ?>        						
					<?php endif; ?>	
				</div>
			</div>
	</div>	
</section>

