<div id="content" class="row">
		<div id="featured" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			
				<div class="group_nom col-sm-12 col-md-12 col-lg-12">
					<h3><span>Билеты</span></h3>
				</div>
			<div class="row ">
				<?php if ($this->ion_auth->logged_in()): ?>
				<?php foreach($user_buys as $item):?>
				<?php 
				$item_act = $this->items_model->get_item_act($item['id_item_act']);
				$event = $this->items_model->get_item($item_act['id_item']);
				?>
				<div class=" col-sm-12 col-md-12 col-lg-12">
					<div class="panel panel-default">
						<?php setlocale(LC_ALL, 'ru_RU.utf8','rus_RUS.utf8','Russian'); ?>
						<div class="panel-body user_height">
							<div class="user_ticket col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="user_ticket col-xs-12 col-sm-3 col-md-5 col-lg-4"><img class="item_buy_img" src="<?=base_url();?>img/items/<?=$event['item_img'];?>" /></div>
								<div class="user_ticket col-xs-12 col-sm-9 col-md-7 col-lg-8"><h4><?=$event['item_name'];?></h4>
									<?php $date1 = $item_act['date'];?>
									<div class="c_month"><?=strftime("%d", strtotime($date1));?> <?=strftime("%B", strtotime($date1));?> <span><?=strftime("%a", strtotime($date1));?></span> <?=strftime("%H:%M", strtotime($date1));?></div>
									<div>
									<img src="<?=base_url()?>img/location.png"> <?php $inst = $this->items_model->get_institution($event['id_category']); echo $inst['company']; ?>	
									</div>
								</div>
							</div><div class="clear visible-xs visible-sm"></div>
							<div class="user_ticket col-xs-12 col-sm-12 col-md-6 col-lg-6">
								
								<?php $user_ticks = $this->items_model->get_user_tickets($item['id_item_act']); ?>
								<?php foreach ($user_ticks as $tick): ?>
								<?php $parse = explode("-", $tick['target']);?>
									<div class="user_ticket min col-xs-7 col-sm-7 col-md-7 col-lg-7">
								 	Сектор: <?=$parse[1]?>, 
								 	Ряд: <?=$parse[2]?>, 
								 	Место: <?=$parse[3]?>
								 	</div>		
									<div class="user_ticket col-xs-4 col-sm-4 col-md-4 col-lg-4 cost<?=$item['id_item_act']?>">	
									<?=$tick['cost'];?> сом
									</div>
									<div class="user_ticket col-xs-1 col-sm-1 col-md-1 col-lg-1">
									<a href=""><img src="<?=base_url()?>img/cancel.png"></a>
									</div>
								<?php endforeach; ?>
									<div class="user_ticket col-xs-7 col-sm-7 col-md-7 col-lg-7">
								 	<strong>Итого</strong>
								 	</div>		
									<div class="user_ticket col-xs-4 col-sm-4 col-md-4 col-lg-4">	
									<?php $sum = $this->items_model->get_user_sum($item['id_item_act']); ?>
									<strong><span id="sum<?=$item['id_item_act']?>"><?=$sum?></span> сом</strong>
									</div>
									<div class="user_ticket col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>	
							</div>
						</div>
					</div>
				</div>
                <?php endforeach; ?>
            <?php endif;  ?>

			</div>
			<div class="group_nom col-sm-12 col-md-12 col-lg-12">
					<h3><span>Оплата</span></h3>
			</div>
			<div class="row padding-top">
				<div class=" col-sm-12 col-md-6 col-lg-7">Выберите способ оплаты:<br><br></div>
				<div class=" col-sm-12 col-md-6 col-lg-5">
					<?php $all_sum = $this->items_model->all_user_sum(); ?>
					<div class="cart">
						<h3>Всего - <?=$all_sum?> сом</h3>
						<a href="" class="btn wide">Оплатить</a>
					</div>
				</div>
			</div>
		</div>
</div>
</div>
	