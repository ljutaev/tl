<?php

// close access
defined('TL') or die ('Acccess denied');

?>

<section class="main main--panel z-depth-2">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h1 class="main__header">Панель керування</h1>
					<div class="main__filter">
						<?php
						if(isset($_SESSION['answer'])){
						    echo $_SESSION['answer'];
						    unset($_SESSION['answer']);
						}
						?>
						<form class="main__filter-form">
							<p>Фільтр:</p>
							<div class="input-field col s12 m3">
							    <input type="text" class="datepicker">
							    <label>Час від:</label>
							  </div>
							  <div class="input-field col s12 m3">
							   <input type="text" class="datepicker">
							    <label>Дата до:</label>
							  </div>
							  <div class="input-field col s12 m3">
							    <select>
							      <option value="" disabled selected>Виберіть:</option>
							      <option value="1">Оксана</option>
							      <option value="2">Микола</option>
							    </select>
							    <label>Виберіть працівника:</label>
							  </div>
							  <div class="input-field col s12 m3">
							    <input type="submit" name="" class="waves-effect waves-light btn-large btn-filter" value="Фільтр">
							  </div>
						</form>
						

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
							<?php if($checks): ?>
					        <tbody>
					        <?php foreach($checks as $ckeck): ?>
					          <tr>
					            <td><?php echo $ckeck['date'] ?></td>
					            <td><?php echo $ckeck['time'] ?></td>
					            <td><?php echo $ckeck['worker'] ?></td>
					            <td><?php echo $ckeck['effectives'] ?></td>
					            <td><?php echo $ckeck['type_check'] ?></td>
					            <td><?php echo $ckeck['trouble_ansver'] ?></td>
					            <td><a href="?view=check&check_id=<?=$ckeck['id']?>" class="waves-effect waves-light btn-small ">Відкрити</a></td>
					          </tr>
					          <?php endforeach; ?>
					        </tbody>
					        <?php else: ?>
        						
							<?php endif; ?>	
					      </table>

					</div>


				</div>
			</div>
		</div>	
	</section>
