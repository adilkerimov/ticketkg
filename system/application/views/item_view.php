	<div class="row">
		<div class="hidden-xs hidden-sm col-md-12">
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
					<div style="background:transparent  url(<?=base_url()?>img/items/<?=$main_info['item_img']?>) no-repeat scroll; height:auto; min-height: 300px; min-width:100px;"></div>
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
				<div class="well1">
					
					<ul class="nav nav-tabs">
						<?php $i=1; $k=1; $uniq_d = array(); $uniq_m = array();?>

						<?php foreach ($items_act as $i_it):?>
						<?php $uniq_d[] = mb_strtoupper(strftime("%B", strtotime($i_it['date'])));?>	
						<?php $uniq_m[] = strftime("%m", strtotime($i_it['date'])).'-'.strftime("%Y", strtotime($i_it['date']));?>
						<?php endforeach;?>
						<?php $end_array = array_unique($uniq_d); $num_array = array_unique($uniq_m);?>

						<?php foreach ($end_array as $i_act):?>
						<li class="day_li<?php if($i==1){echo " active";}?>" id="<?=$i?>"><a><?=$i_act;?></a></li>
						<?php $i++;?>
						<?php endforeach;?>
					</ul>
					<?php foreach ($num_array as $i_rep):?>
					<div id="side<?=$k;?>" class="repert_d sidebar_date<?php if($k!=1){echo " hidden";}?>">
						<?php
						$id_date = array('act'=>$page_id3,'m_y'=>$i_rep);
						$items_act_m = $this->items_model->get_items_act_m($id_date); ?>
						<?php foreach ($items_act_m as $i_act):?>
						<div class="repertoir">
						<?php $date1 = $i_act['date'];?>
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3"><div class="img_cal"><div class="img_cal_in"><div class="c_title"><h2><?=strftime("%d", strtotime($date1));?></h2>/<span><?=strftime("%a", strtotime($date1));?></span></div><div class="c_month"><?=strftime("%B", strtotime($date1));?></div><div class="c_time"><?=strftime("%H:%M", strtotime($date1));?></div></div></div></div>
						<div class="col-xs-8 col-sm-6 col-md-5 col-lg-6"><?php $location = $this->items_model->get_location($i_act['institution']);?><a href="<?=base_url();?>view/<?=$page_id;?>/<?=$page_id2;?>"><?=$location['company'];?></a><div class="visible-xs clear" style="margin-top:6px"></div><div class="visible-xs"><a href="<?=base_url();?>view/<?=$page_id;?>/<?=$page_id2;?>/<?=$page_id3;?>/<?=$i_act['id_item_act']?>" class="btn" style="padding:4px 15px">Купить билет</a></div></div>
						<div class="hidden-xs col-sm-2 col-md-2 col-lg-2"><a href="<?=base_url();?>view/<?=$page_id;?>/<?=$page_id2;?>/<?=$page_id3;?>/<?=$i_act['id_item_act']?>" class="btn">Купить билет</a></div>
						</div>
						<div class="line col-sm-12 col-xs-12 col-md-12 col-lg-12"></div>
						<?php endforeach; ?>
					</div>
					<?php $k++; ?>
					<?php endforeach;?>
					<?php 
					if(empty($items_act)){echo '<div class="sidebar_date">К сожалению нет ближайщих представлений</div>';}
					 ?>
					
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
			<h2>Отзывы</h2>
			<?php foreach ($comments as $comment):?>
			<?php $com_user = $this->items_model->get_user($comment['id_user']);?>
			<h5><strong><?=$com_user['first_name']?></strong>&nbsp;&nbsp;&nbsp;<?=strftime("%d/%m/%Y", strtotime($comment['date']));?></h5>
			<p class="comment"><?=$comment['comment']?></p>
			<?php endforeach;?>
			<br>
			<?php if(isset($info)){echo $info."<br><br>";}?>
			<form id="comment_form" action="<?=base_url()?>main/comment" method="post">
			<input type="hidden" name="link" value="<?=base_url()?>view/<?=$page_id;?>/<?=$page_id2;?>/<?=$main_info['id_item']?>">
			<input type="hidden" name="id_item" value="<?=$main_info['id_item']?>">
			<textarea name="comment" rows="5" class="wide_c" placeholder="<?php if (!$this->ion_auth->logged_in()){echo 'Чтобы оставить комментарий, авторизируйтесь на сайте.';} else {echo 'Введите комментарий...';}?>"></textarea><br><br>
			<a href="javascript:{}" onclick="document.getElementById('comment_form').submit();" class="btn<?php if (!$this->ion_auth->logged_in()){echo ' disabled';} ?>">Комментировать</a>
			</form>
		</div>
	</div>
	</div>