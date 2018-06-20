<?php

// close access
defined('TL') or die ('Acccess denied');
?>

<?php if($sep_check): // if there is a requested check ?>  
<section class="main main--panel z-depth-2">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h1 class="main__header">Перевірка #<?php echo $sep_check['id'] ?></h1>
					<h4 style="text-align: center"><?php echo $sep_check['type_check'] ?> за <?php echo $sep_check['date'] ?> <?php echo $sep_check['time'] ?></h4>
					<?php
						if(isset($_SESSION['answer'])){
						    echo $_SESSION['answer'];
						    unset($_SESSION['answer']);
						}
						?>
					<div class="main__filter">				

						<table class="main__filter-table striped"">
					        <thead>
					          <tr>
					              <th>Дата</th>
					              <th>Час</th>
					              <th>Працівник</th>
					              <th>Ефективність</th>
					              <th>Тип перевірки</th>
					              <th>Важко відповісти</th>
					              <th>Дії</th>
					          </tr>
					        </thead>
					        <tbody>
					          <tr>
					            <td><?php echo $sep_check['date'] ?></td>
					            <td><?php echo $sep_check['time'] ?></td>
					            <td><?php echo $sep_check['worker'] ?></td>
					            <td><?php echo $sep_check['effectives'] ?></td>
					            <td><?php echo $sep_check['type_check'] ?></td>
					            <td><?php echo $sep_check['trouble_ansver'] ?></td>
					            <td><a href="?view=edit_check&check_id=<?=$sep_check['id']?>" class="waves-effect waves-light red btn-small ">Редагувати</a><a href="?view=del_check&check_id=<?=$sep_check['id']?>" class="waves-effect waves-light red btn-small del">Видалити</a></td>
					          </tr>
					        </tbody>
					      </table>

					</div>


				</div>
			</div>
		</div>	
	</section>
	<?php else: ?>
	<section class="main main--panel z-depth-2">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h1 class="main__header">Перевірки не знайдено</h1>				
				</div>
			</div>
		</div>	
	</section>	
	<?php endif;?>