
	<div class="row">
		<div class="col-md-12">
			<h1><?=$main_info['item_name']?></h1>
		</div>
	</div>
	<div id="content" class="row">
		<div class="col-md-12">
			<div id="featured" class="col-md-6">
				<div class="row padding-top">
				<p>Продолжительность: <?=$main_info['duration']?></p>
				<p><?php foreach ($acts as $act):?>
				<?php $human = $this->items_model->get_hum($act['id_act']); $role = $this->items_model->get_role($human['role']); echo $role['role'].": ".$human['human'];?>
				<?php endforeach; ?>
				</p>				
				</div>
			</div>
		</div>
	</div>
	<div class="line col-sm-6 col-md-12 col-lg-12">
	</div>
	<div class="row">
		<div class="col-md-12">
			<br>
			<div id="screen" class='btn-default' style="width:100%; height:100px; text-align:center; padding-top:35px; font-size:24px">СЧИТАЙТЕ ШТРИХ-КОД</div><br><br>
			<input id="id_item_act" type="hidden" name="id_item_act" value="<?=$page_id4;?>">
			<input type="hidden" name="id_item" value="<?=$main_info['id_item']?>">
			<input id="cont" type="text" name="id_controll" value="" autocomplete="off" autofocus ><br><br>
		</div>
	</div>
	<div class="line col-sm-6 col-md-12 col-lg-12">
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3>История</h3>
		<div id="history">
			<?php $hist = $this->share_model->get_act_journal($page_id4); ?>
			<?php foreach ($hist as $his): ?>
			<div>
			Пользователь: <?=$his['id_user']?><br>
			Дата: <?=$his['date']?><br>
			Штрих код: <?=$his['code']?><br>
			Ответ: <?=$his['text']?><br><br>
			</div>
			<?php endforeach; ?>
		</div>
		</div>
	</div>
	</div>