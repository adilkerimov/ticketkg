<div id="content" class="row">
	
		<div id="featured" class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
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
				<?php foreach($items as $item):?>
				<div class="product col-sm-6 col-md-4 col-lg-3"><div class="panel panel-default"><div class="panel-heading">Рейтинг: </div><div class="panel-body"><img class="item_img" src="<?=base_url();?>img/items/<?=$item['item_img'];?>" /></div><div class="panel-footer"><a href="<?=base_url();?>view/<?php $s_inst = $this->items_model->get_menu_by_id($item['id_category']); echo $s_inst['link'];?>/<?php $f_inst = $this->items_model->get_menu_by_id($item['id_second_menu']); echo $f_inst['link'];?>/<?=$item['id_item'];?>"><?=$item['item_name'];?></a><br>Театр оперы и балета</div></div></div>
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
					<li class="list-group-item"><span class="badge"><?=$count;?></span><a href="<?=base_url();?>view/<?=$menu_i['link'];?>"><?=$menu_up;?></a></li>
					<?php endforeach;?>
				</ul>
				</div>
			</div>
		</div>
	</div>
	</div>
	