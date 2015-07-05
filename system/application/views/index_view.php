<div id="content" class="row">
		<div id="featured" class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
			<?php setlocale(LC_ALL, 'ru_RU.utf8','rus_RUS.utf8','Russian'); ?>
			<div class="row hidden-xs">
				<div id="owl-demo" class="owl-carousel col-sm-6 col-md-4 col-lg-3">
				    <div class="item"><img src="<?=base_url();?>img/assets/22.jpg"></div>
				    <div class="item"><img src="<?=base_url();?>img/assets/123.jpg"></div>
				    <div class="item"><img src="<?=base_url();?>img/assets/33.jpg"></div>
				</div>
				<div class="customNavigation">
					<a class="btn prev" id="prev"><svg class="prev_svg" height="35px" width="30px" id="Layer_1" style="enable-background:new 0 0 35 35;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 "/></svg></a>
					<a class="btn next" id="next"><svg class="next_svg" height="35px" width="30px" id="Layer_1" style="enable-background:new 0 0 35 35;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="160,115.4 180.7,96 352,256 180.7,416 160,396.7 310.5,256 "/></svg></a>
				</div>
			</div>
			<div class="row padding-top">
				<div class="group">
					<h3><span>Спектакли</span></h3>
				</div>
				<?php foreach($spectacles as $spec):?>
				<?php 
				$s_inst = $this->items_model->get_menu_by_id($spec['id_category']);
				$f_inst = $this->items_model->get_menu_by_id($spec['id_second_menu']);
				$link = base_url().'view/'.$s_inst['link'].'/'.$f_inst['link'].'/'.$spec['id_item']; //ссылка на мероприятие
				$dat = $this->items_model->get_items_act_l($spec['id_item']); //время 
				$inst = $this->items_model->get_map($dat['location']);
				?>
				<div class="product hidden-xs hidden-sm col-md-4 col-lg-3"><div class="panel panel-default" style="resize: both;"><div class="panel-heading">Рейтинг: </div><div class="min_date"><strong><?php if(!empty($dat)){echo strftime("%d", strtotime($dat['date']));} ?></strong><p><?php if(!empty($dat)){echo mb_strtoupper(strftime("%b", strtotime($dat['date'])));} ?></p></div><div class="panel-body item_height"><img class="item_img" src="<?=base_url();?>img/items/<?=$spec['item_img'];?>" /></div><div class="panel-footer"><a href="<?=$link?>"><?=$spec['item_name'];?></a><br></div></div></div>
                <div class="product col-sm-12 col-sm-6 hidden-md hidden-lg">
                	<div class="event">
                		<a href="<?=$link?>"></a>
                	<div class="ev_in">
                	<div class="ev_date"></div>
                	<a href="<?=$link?>"><div class="thumbnail"><img src="<?=base_url();?>img/items/<?=$spec['item_img'];?>" /></div></a>
                	<div class="ev_data">
                		<div class="details">
                		<div class="ev_title"><a href="<?=$link?>"><?=$spec['item_name'];?></a></div>
                		<p><?=$inst['full_name']?><br><b>500 - 4000 сом</b></p>
                		</div>
                	</div>
                	</div>
                	<a href="<?=$link?>"><div class="ev_arrow"><img src="<?=base_url();?>img/arrow_right_red.png" /></div></a>
                	<div class="min_date"><strong><?php if(!empty($dat)){echo strftime("%d", strtotime($dat['date']));} ?></strong><p><?php if(!empty($dat)){echo mb_strtoupper(strftime("%b", strtotime($dat['date'])));} ?><br><br><br><?php if(!empty($dat)){echo mb_strtoupper(strftime("%H:%M", strtotime($dat['date'])));} ?><br><br><br><?php if(!empty($dat)){echo mb_strtolower(strftime("%a", strtotime($dat['date'])));} ?><br></p></div>
                	</div>
                </div>
                <?php endforeach; ?>
			</div>
			<div class="row">
				<div class="group">
					<h3><span>Концерты</span></h3>
				</div>
				<?php foreach($concerts as $conc):?>
				<?php 
				$s_inst = $this->items_model->get_menu_by_id($conc['id_category']);
				$f_inst = $this->items_model->get_menu_by_id($conc['id_second_menu']);
				$link = base_url().'view/'.$s_inst['link'].'/'.$f_inst['link'].'/'.$conc['id_item']; //ссылка на мероприятие
				$dat = $this->items_model->get_items_act_l($conc['id_item']); //время 
				$inst = $this->items_model->get_map($dat['location']);
				?>
				<div class="product hidden-xs hidden-sm col-md-4 col-lg-3"><div class="panel panel-default" style="resize: both;"><div class="panel-heading">Рейтинг: </div><div class="min_date"><strong><?php if(!empty($dat)){echo strftime("%d", strtotime($dat['date']));} ?></strong><p><?php if(!empty($dat)){echo mb_strtoupper(strftime("%b", strtotime($dat['date'])));} ?></p></div><div class="panel-body item_height"><img class="item_img" src="<?=base_url();?>img/items/<?=$conc['item_img'];?>" /></div><div class="panel-footer"><a href="<?=$link?>"><?=$conc['item_name'];?></a><br></div></div></div>
                <div class="product col-sm-12 col-sm-6 hidden-md hidden-lg">
                	<div class="event">
                		<a href="<?=$link?>"></a>
                	<div class="ev_in">
                	<div class="ev_date"></div>
                	<a href="<?=$link?>"><div class="thumbnail"><img src="<?=base_url();?>img/items/<?=$conc['item_img'];?>" /></div></a>
                	<div class="ev_data">
                		<div class="details">
                		<div class="ev_title"><a href="<?=$link?>"><?=$conc['item_name'];?></a></div>
                		<p><?=$inst['full_name']?><br><b>500 - 4000 сом</b></p>
                		</div>
                	</div>
                	</div>
                	<a href="<?=$link?>"><div class="ev_arrow"><img src="<?=base_url();?>img/arrow_right_red.png" /></div></a>
                	<div class="min_date"><strong><?php if(!empty($dat)){echo strftime("%d", strtotime($dat['date']));} ?></strong><p><?php if(!empty($dat)){echo mb_strtoupper(strftime("%b", strtotime($dat['date'])));} ?><br><br><br><?php if(!empty($dat)){echo mb_strtoupper(strftime("%H:%M", strtotime($dat['date'])));} ?><br><br><br><?php if(!empty($dat)){echo mb_strtolower(strftime("%a", strtotime($dat['date'])));} ?><br></p></div>
                	</div>
                </div>
                <?php endforeach; ?>
			</div>
			<div class="row">
				<div class="group">
					<h3><span>Кино</span></h3>
				</div>
				<?php foreach($kinos as $kino):?>
				<?php 
				$s_inst = $this->items_model->get_menu_by_id($kino['id_category']);
				$f_inst = $this->items_model->get_menu_by_id($kino['id_second_menu']);
				$link = base_url().'view/'.$s_inst['link'].'/'.$f_inst['link'].'/'.$kino['id_item']; //ссылка на мероприятие
				$dat = $this->items_model->get_items_act_l($kino['id_item']); //время 
				$inst = $this->items_model->get_map($dat['location']);
				?>
				<div class="product hidden-xs hidden-sm col-md-4 col-lg-3"><div class="panel panel-default" style="resize: both;"><div class="panel-heading">Рейтинг: </div><div class="min_date"><strong><?php if(!empty($dat)){echo strftime("%d", strtotime($dat['date']));} ?></strong><p><?php if(!empty($dat)){echo mb_strtoupper(strftime("%b", strtotime($dat['date'])));} ?></p></div><div class="panel-body item_height"><img class="item_img" src="<?=base_url();?>img/items/<?=$kino['item_img'];?>" /></div><div class="panel-footer"><a href="<?=$link?>"><?=$kino['item_name'];?></a><br></div></div></div>
                <div class="product col-sm-12 col-sm-6 hidden-md hidden-lg">
                	<div class="event">
                		<a href="<?=$link?>"></a>
                	<div class="ev_in">
                	<div class="ev_date"></div>
                	<a href="<?=$link?>"><div class="thumbnail"><img src="<?=base_url();?>img/items/<?=$kino['item_img'];?>" /></div></a>
                	<div class="ev_data">
                		<div class="details">
                		<div class="ev_title"><a href="<?=$link?>"><?=$kino['item_name'];?></a></div>
                		<p><?=$inst['full_name']?><br><b>500 - 4000 сом</b></p>
                		</div>
                	</div>
                	</div>
                	<a href="<?=$link?>"><div class="ev_arrow"><img src="<?=base_url();?>img/arrow_right_red.png" /></div></a>
                	<div class="min_date"><strong><?php if(!empty($dat)){echo strftime("%d", strtotime($dat['date']));} ?></strong><p><?php if(!empty($dat)){echo mb_strtoupper(strftime("%b", strtotime($dat['date'])));} ?><br><br><br><?php if(!empty($dat)){echo mb_strtoupper(strftime("%H:%M", strtotime($dat['date'])));} ?><br><br><br><?php if(!empty($dat)){echo mb_strtolower(strftime("%a", strtotime($dat['date'])));} ?><br></p></div>
                	</div>
                </div>
                <?php endforeach; ?>
			</div>
			<div class="row">
				<div class="group">
					<h3><span>Шоу</span></h3>
				</div>
				<?php foreach($shows as $show):?>
				<?php 
				$s_inst = $this->items_model->get_menu_by_id($show['id_category']);
				$f_inst = $this->items_model->get_menu_by_id($show['id_second_menu']);
				$link = base_url().'view/'.$s_inst['link'].'/'.$f_inst['link'].'/'.$show['id_item']; //ссылка на мероприятие
				$dat = $this->items_model->get_items_act_l($show['id_item']); //время 
				$inst = $this->items_model->get_map($dat['location']);
				?>
				<div class="product hidden-xs hidden-sm col-md-4 col-lg-3"><div class="panel panel-default" style="resize: both;"><div class="panel-heading">Рейтинг: </div><div class="min_date"><strong><?php if(!empty($dat)){echo strftime("%d", strtotime($dat['date']));} ?></strong><p><?php if(!empty($dat)){echo mb_strtoupper(strftime("%b", strtotime($dat['date'])));} ?></p></div><div class="panel-body item_height"><img class="item_img" src="<?=base_url();?>img/items/<?=$show['item_img'];?>" /></div><div class="panel-footer"><a href="<?=$link?>"><?=$show['item_name'];?></a><br></div></div></div>
                <div class="product col-sm-12 col-sm-6 hidden-md hidden-lg">
                	<div class="event">
                		<a href="<?=$link?>"></a>
                	<div class="ev_in">
                	<div class="ev_date"></div>
                	<a href="<?=$link?>"><div class="thumbnail"><img src="<?=base_url();?>img/items/<?=$show['item_img'];?>" /></div></a>
                	<div class="ev_data">
                		<div class="details">
                		<div class="ev_title"><a href="<?=$link?>"><?=$show['item_name'];?></a></div>
                		<p><?=$inst['full_name']?><br><b>500 - 4000 сом</b></p>
                		</div>
                	</div>
                	</div>
                	<a href="<?=$link?>"><div class="ev_arrow"><img src="<?=base_url();?>img/arrow_right_red.png" /></div></a>
                	<div class="min_date"><strong><?php if(!empty($dat)){echo strftime("%d", strtotime($dat['date']));} ?></strong><p><?php if(!empty($dat)){echo mb_strtoupper(strftime("%b", strtotime($dat['date'])));} ?><br><br><br><?php if(!empty($dat)){echo mb_strtoupper(strftime("%H:%M", strtotime($dat['date'])));} ?><br><br><br><?php if(!empty($dat)){echo mb_strtolower(strftime("%a", strtotime($dat['date'])));} ?><br></p></div>
                	</div>
                </div>
                <?php endforeach; ?>
			</div>
			<div class="row">
				<div class="group">
					<h3><span>Детям</span></h3>
				</div>
				<?php foreach($kid as $kids):?>
				<?php 
				$s_inst = $this->items_model->get_menu_by_id($kids['id_category']);
				$f_inst = $this->items_model->get_menu_by_id($kids['id_second_menu']);
				$link = base_url().'view/'.$s_inst['link'].'/'.$f_inst['link'].'/'.$kids['id_item']; //ссылка на мероприятие
				$dat = $this->items_model->get_items_act_l($kids['id_item']); //время 
				$inst = $this->items_model->get_map($dat['location']);
				?>
				<div class="product hidden-xs hidden-sm col-md-4 col-lg-3"><div class="panel panel-default" style="resize: both;"><div class="panel-heading">Рейтинг: </div><div class="min_date"><strong><?php if(!empty($dat)){echo strftime("%d", strtotime($dat['date']));} ?></strong><p><?php if(!empty($dat)){echo mb_strtoupper(strftime("%b", strtotime($dat['date'])));} ?></p></div><div class="panel-body item_height"><img class="item_img" src="<?=base_url();?>img/items/<?=$kids['item_img'];?>" /></div><div class="panel-footer"><a href="<?=$link?>"><?=$kids['item_name'];?></a><br></div></div></div>
                <div class="product col-sm-12 col-sm-6 hidden-md hidden-lg">
                	<div class="event">
                		<a href="<?=$link?>"></a>
                	<div class="ev_in">
                	<div class="ev_date"></div>
                	<a href="<?=$link?>"><div class="thumbnail"><img src="<?=base_url();?>img/items/<?=$kids['item_img'];?>" /></div></a>
                	<div class="ev_data">
                		<div class="details">
                		<div class="ev_title"><a href="<?=$link?>"><?=$kids['item_name'];?></a></div>
                		<p><?=$inst['full_name']?><br><b>500 - 4000 сом</b></p>
                		</div>
                	</div>
                	</div>
                	<a href="<?=$link?>"><div class="ev_arrow"><img src="<?=base_url();?>img/arrow_right_red.png" /></div></a>
                	<div class="min_date"><strong><?php if(!empty($dat)){echo strftime("%d", strtotime($dat['date']));} ?></strong><p><?php if(!empty($dat)){echo mb_strtoupper(strftime("%b", strtotime($dat['date'])));} ?><br><br><br><?php if(!empty($dat)){echo mb_strtoupper(strftime("%H:%M", strtotime($dat['date'])));} ?><br><br><br><?php if(!empty($dat)){echo mb_strtolower(strftime("%a", strtotime($dat['date'])));} ?><br></p></div>
                	</div>
                </div>
                <?php endforeach; ?>
			</div>
		</div>
		<div id="sidebar" class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<div class="well">
				<div class="padding_in">
				<ul class="list-group">
					<?php foreach ($menu_first as $menu_i):?>
					<?php $menu_up = mb_strtoupper($menu_i['menu']);
					$count = $this->items_model->count_items_first($menu_i['id_menu']);
					?>
					<li class="list-group-item"><span class="badge"><?=$count;?></span><a href="<?=base_url();?>zavedenie/<?=$menu_i['link'];?>"><?=$menu_up;?></a></li>
					<?php endforeach;?>
				</ul>
				</div>
			</div>
		</div>
</div>
</div>
	