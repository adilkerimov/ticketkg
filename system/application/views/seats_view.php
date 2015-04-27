	<div class="row">
		<div class="col-md-12">
			<?php 
			$f_inst = $this->items_model->get_menu_link($page_id);
			$s_inst = $this->items_model->get_menu_link($page_id2);
			?>
			<a href="<?=base_url();?>">Главная</a>&rarr;<a href="<?=base_url();?>view/<?=$page_id;?>"><?=$f_inst['menu'];?></a>&rarr;<a href="<?=base_url();?>view/<?=$page_id;?>/<?=$page_id2;?>"><?=$s_inst['menu'];?></a>&rarr;<a href="<?=base_url();?>view/<?=$page_id;?>/<?=$page_id2;?>/<?=$main_info['id_item']?>"><?=$main_info['item_name']?></a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h1><?=$main_info['item_name']?></h1>
		</div>
	</div>
	<div id="content" class="row">
		<div class="col-md-12">
			<div id="featured" class="col-md-12">
				
				<div class="row padding-top">
				<p>Продолжительность: <?=$main_info['duration']?></p>
				<p><?php foreach ($acts as $act):?>
				<?php $human = $this->items_model->get_hum($act['id_act']); $role = $this->items_model->get_role($human['role']); echo $role['role'].": ".$human['human'];?>
				<?php endforeach; ?>
				</p>				
				</div>
			</div>
			<div id="featured" class="col-md-12">

			</div>

		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="seat">1</div><div class="seat">2</div><div class="seat">3</div><div class="seat">4</div><div class="seat">5</div>
			<div class="seat">6</div><div class="seat">7</div><div class="seat">8</div><div class="seat">9</div><div class="seat">10</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="seat">1</div><div class="seat">2</div><div class="seat">3</div><div class="seat">4</div><div class="seat">5</div>
			<div class="seat">6</div><div class="seat">7</div><div class="seat">8</div><div class="seat">9</div><div class="seat">10</div>
		</div>
	</div>


	</div>