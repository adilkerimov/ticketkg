	<div id="content" class="row">
		<div id="featured" class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
			<div class="row padding-top-side">
				<?php foreach($items as $item):?>
				<div class="institution col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="col-xs-5 col-sm-3 col-md-3 col-lg-3" style="padding-left:0"><img width="150" src="<?=base_url();?>img/items/<?=$item['item_img'];?>" /></div>
						<div class="col-xs-7 col-sm-7 col-md-6 col-lg-7"><a href="<?=base_url();?>view/<?php $s_inst = $this->items_model->get_menu_by_id($item['id_category']); echo $s_inst['link'];?>/<?php $f_inst = $this->items_model->get_menu_by_id($item['id_second_menu']); echo $f_inst['link'];?>/<?=$item['id_item'];?>"><?=$item['item_name'];?></a><br>Театр оперы и балета<div class="visible-xs clear" style="margin-top:6px"></div><div class="visible-xs"><a href="" class="btn" style="padding:4px 15px">Репертуар</a></div></div>
						<div class="hidden-xs col-sm-2 col-md-3 col-lg-2" style="padding-right:0"><a href="" class="btn right">Репертуар</a></div>
				</div>
				<div class="clear"></div>
                <?php endforeach; ?>
			</div>
		</div>
		<div id="sidebar" class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
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