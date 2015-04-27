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
			<div id="featured" class="col-md-6">
				<div class="row">
					<img src="<?=base_url();?>img/items/<?=$main_info['item_img']?>">
				</div>
				<div class="row padding-top">
				<p>Продолжительность: <?=$main_info['duration']?></p>
				<p><?php foreach ($acts as $act):?>
				<?php $human = $this->items_model->get_hum($act['id_act']); $role = $this->items_model->get_role($human['role']); echo $role['role'].": ".$human['human'];?>
				<?php endforeach; ?>
				</p>				
				</div>
			</div>
			<div id="sidebar" class="col-sm-12 col-md-6 col-lg-6" style="padding:0">
				<?php setlocale(LC_ALL, 'ru_RU.utf8','rus_RUS.utf8','Russian'); ?>
				<div class="well">
					<div class="padding_in">
					<ul class="nav nav-tabs">
						<li class="day_li active" id="1"><a><?php $date = '2015-04-06'; echo mb_strtoupper(strftime("%B", strtotime($date)));?></a></li>
						<li class="day_li" id="2"><a>МАЙ</a></li>
						<li class="day_li" id="3"><a>ИЮНЬ</a></li>
					</ul>
					<div id="side1" class="sidebar_date">
						<?php foreach ($items_act as $i_act):?>
						<div class="repertoir">
						<?php $date1 = $i_act['date'];?>
						<div class="col-sm-3 col-xs-3 col-md-3 col-lg-3"><div class="img_cal"><div class="img_cal_in"><div class="c_title"><h2><?=strftime("%d", strtotime($date1));?></h2>/<span><?=strftime("%a", strtotime($date1));?></span></div><div class="c_month"><?=strftime("%B", strtotime($date1));?></div><div class="c_time"><?=strftime("%H:%M", strtotime($date1));?></div></div></div></div>
						<div class="col-sm-6 col-xs-6 col-md-5 col-lg-6"><?php $location = $this->items_model->get_location($i_act['location']);?><a href="<?=base_url();?>view/<?=$page_id;?>/<?=$page_id2;?>"><?=$location['company'];?></a></div>
						<div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"><a href="<?=base_url();?>view/<?=$page_id;?>/<?=$page_id2;?>/<?=$page_id3;?>/<?=$i_act['id_item_act']?>" class="btn">Купить билет</a></div>
						</div>
						<div class="line col-sm-12 col-xs-12 col-md-12 col-lg-12"></div>
						<?php endforeach; ?>
					</div>
					<div id="side2" class="sidebar_date hidden">Тест2</div>
					<div id="side3" class="sidebar_date hidden">Тест3</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="line col-sm-6  col-md-12 col-lg-12">
	</div>
	<div class="row">
		<div class="col-md-12">
			<h2>Описание</h2>
			<p><?=$main_info['text']?></p>
		</div>
	</div>
	<div class="line col-sm-6 col-md-12 col-lg-12">
	</div>
	<div class="row">
		<div class="col-md-12">
			<h2>Отзывы</h2><br>
			<?php foreach ($comments as $comment):?>
			<?php $com_user = $this->items_model->get_user($comment['id_user']);?>
			<h5><strong><?=$com_user['first_name']?></strong>&nbsp;&nbsp;&nbsp;<?=strftime("%d/%m/%Y", strtotime($comment['date']));?></h5>
			<p><?=$comment['comment']?></p><br>
			<?php endforeach;?>
			<br>
			<?php if(isset($info)){echo $info."<br><br>";}?>
			
			<form id="comment_form" action="<?=base_url()?>main/comment" method="post">
			<input type="hidden" name="link" value="<?=base_url()?>view/<?=$page_id;?>/<?=$page_id2;?>/<?=$main_info['id_item']?>">
			<input type="hidden" name="id_item" value="<?=$main_info['id_item']?>">
			<textarea name="comment" rows="5" cols="60" placeholder="<?php if (!$this->ion_auth->logged_in()){echo 'Чтобы оставить комментарий, авторизируйтесь на сайте.';} else {echo 'Введите комментарий...';}?>"></textarea><br><br>
			
			<a href="javascript:{}" onclick="document.getElementById('comment_form').submit();" class="btn<?php if (!$this->ion_auth->logged_in()){echo ' disabled';} ?>">Комментировать</a>
			</form>
		</div>
	</div>
	</div>