	<div id="content" class="row">
		<div id="featured" class="col-md-9">
			<div class="row padding-top">
				<?php foreach($items as $item):?>
				<div class="institution col-sm-6 col-md-12 col-lg-12">
						<div class="col-sm-3 col-md-3 col-lg-3"><img width="150" src="<?=base_url();?>img/items/<?=$item['item_img'];?>" /></div>
						<div class="col-sm-6 col-md-6 col-lg-7"><a href="<?=base_url();?>view/<?php $s_inst = $this->items_model->get_menu_by_id($item['id_category']); echo $s_inst['link'];?>/<?php $f_inst = $this->items_model->get_menu_by_id($item['id_second_menu']); echo $f_inst['link'];?>/<?=$item['id_item'];?>"><?=$item['item_name'];?></a><br>Театр оперы и балета</div>
						<div class="col-sm-3 col-md-3 col-lg-2"><a href="" class="btn">Репертуар</a></div>
				</div>
				<div class="col-sm-6 col-md-12 col-lg-12">
					<div class="line">
					</div>
				</div>
                <?php endforeach; ?>
			</div>
		</div>
		<div id="sidebar" class="col-md-3">
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