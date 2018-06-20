<?php

// close access
defined('TL') or die ('Acccess denied');
?>
<?php if($sep_check): // if there is a requested check ?>  
<section class="main main--panel z-depth-2">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h1 class="main__header">Редагування перевірки #<?php echo $sep_check['id'] ?></h1>
					<?php
						if(isset($_SESSION['answer'])){
						    echo $_SESSION['answer'];
						    unset($_SESSION['answer']);
						}
						?>
					<div class="main__add">
							
							<form class="main__add-from" action="" method="post">

							<div class="row">
								<p>Виберіть дату та час:</p>
								<div class="input-field col s12 m6">
								 <input type="text" name="time" placeholder="HH:MM:SS"  value="<?php echo htmlspecialchars($sep_check['time'])?>">
								<label>Час:</label>
								</div>
								<div class="input-field col s12 m6">
								 <input type="text" name="date" placeholder="YYYY-MM-DD" value="<?php echo htmlspecialchars($sep_check['date'])?>">
								<label>Дата:</label>
								</div>
							</div>
							<div class="row">
								<p>Працівник:</p>
								<div class="input-field col s12">
							     <input type="text" name="worker" value="<?php echo htmlspecialchars($sep_check['worker'])?>">
							    <label>Ім'я працівника</label>
							  </div>
							</div>
							<div class="row">
								<p>Тип перевірки:</p>
								<div class="input-field col s12">
							    <input type="text" name="type_check" value="<?php echo htmlspecialchars($sep_check['type_check'])?>">
							    <label>Виберіть перевірку</label>
							  </div>
							</div>
							<?php if($sep_check['worker'] == 'Микола' ): ?>
							<div class="row">
								<p>Чи грала музика в офісі?</p>
								<div class="input-field col s12">
							    <input type="number" class="worker1" name="play_music" value="<?php echo htmlspecialchars($sep_check['play_music'])?>" min="0" max="2">
							    <label>Де 0 = НІ, 1 = ТАК, 2 = ВАЖКО ВІДПОВІСТИ</label>
							  </div>
							</div>
							<div class="row">
								<p>Чи привітався з клієнтом?</p>
								<div class="input-field col s12">
							    <input type="number"  class="worker1" name="greeting" value="<?php echo htmlspecialchars($sep_check['greeting'])?>" min="0" max="2">
							    <label>Де 0 = НІ, 1 = ТАК, 2 = ВАЖКО ВІДПОВІСТИ</label>
							  </div>
							</div>
							<div class="row">
								<p>Чи була фраза "Присідайте будь ласка"</p>
								<div class="input-field col s12">
							    <input type="number"  class="worker1" name="setdown" value="<?php echo htmlspecialchars($sep_check['setdown'])?>" min="0" max="2">
							    <label>Де 0 = НІ, 1 = ТАК, 2 = ВАЖКО ВІДПОВІСТИ</label>
							  </div>
							</div>
							<div class="row">
								<p>Чи була пропозиція "Скуштувати цукерок"</p>
								<div class="input-field col s12">
							    <input type="number"  class="worker1" name="candies" value="<?php echo htmlspecialchars($sep_check['candies'])?>" min="0" max="2">
							    <label>Де 0 = НІ, 1 = ТАК, 2 = ВАЖКО ВІДПОВІСТИ</label>
							  </div>
							</div>
							<div class="row">
								<p>Чи був у формі працівник?</p>
								<div class="input-field col s12">
							    <input type="number"  class="worker1" name="in_form" value="<?php echo htmlspecialchars($sep_check['in_form'])?>" min="0" max="2">
							    <label>Де 0 = НІ, 1 = ТАК, 2 = ВАЖКО ВІДПОВІСТИ</label>
							  </div>
							</div>
							<div class="row">
								<p>Чи працівник запропонував клієнту візитку/пластикову картку/наклейку?</p>
								<div class="input-field col s12">
							    <input type="number"  class="worker1" name="business_card" value="<?php echo htmlspecialchars($sep_check['business_card'])?>" min="0" max="2">
							    <label>Де 0 = НІ, 1 = ТАК, 2 = ВАЖКО ВІДПОВІСТИ</label>
							  </div>
							</div>
							<div class="row">
								<p>Чи запропонував допродажу існуючому клієнту?</p>
								<div class="input-field col s12">
							    <input type="number"  class="worker1" name="for_sale" value="<?php echo htmlspecialchars($sep_check['for_sale'])?>" min="0" max="2">
							    <label>Де 0 = НІ, 1 = ТАК, 2 = ВАЖКО ВІДПОВІСТИ</label>
							  </div>
							</div>
							<?php endif; ?>

							<div class="row">
								<p>Ефективність %:</p>
								<div class="input-field col s12">
							    <input type="number" name="effectives" value="<?php echo htmlspecialchars($sep_check['effectives'])?>" min="1" max="100">
							    <label>Від 0 до 100%</label>
							  </div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									 <button  class="waves-effect waves-light btn-large btn-recheck">Перерахувати</button>
								</div>
								<div class="input-field col s6">
									 <input type="submit" name="" class="waves-effect waves-light btn-large btn-addcheck" value="Оновити">
								</div>
							</div>
							

						</form>
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