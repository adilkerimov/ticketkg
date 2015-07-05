	<div class="row hidden-xs hidden-sm ">
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
					<div class="col-xs-9 col-sm-10 col-md-10 col-lg-10">
						<?=$s_inst['menu'];?> (зрительный зал)
					</div>
					<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
						<a href="<?=base_url()?>cart" class="btn right">Купить</a>	
					</div>
				</div>
			</div>
			<div id="accordion" class="panel-group padding-top">
  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse" style="cursor:pointer">
      <div class="panel-title">
      		  <?php
				if(isset($user_seat)){
					echo "Вы выбрали <span class='count'>".$u_seat_count."</span> билет(ов) на сумму <span class='sum'>".$u_seat_sum."</span> сом";
				} 
				?>
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse">
                <img src="<?=base_url()?>img/arrow_down.png">

              </a>
      </div>
    </div>
    <div id="collapse" class="panel-collapse collapse">
      <div class="panel-body">
        <div class="padding10">
        	<?php $ticks = $this->items_model->get_user_tickets($page_id4); $i = 1;?>
        	<p>Ваши места:</p>
        	<?php if($ticks==true) {foreach ($ticks as $tick) : ?>
        	<?php $parse = explode('-', $tick['target']); ?> 
        	<?php echo $i; $i++; ?>.&nbsp;&nbsp;ряд: <?=$parse[2]?>, место: <?=$parse[3]?><br>
        	<?php endforeach; }?>
        </div>
      </div>
    </div>
  </div>
</div>
			<div id="featured" class="col-md-12">

			</div>

		</div>
	</div>
	<br> 
	<div class="map col-sm-12 col-md-12 col-lg-12">
	<div style="width:1300px; margin-top:20px; background:#ccc">
	<div class="row">
		<div class="marker" style="width:1300px">
			<h4>Амфитеатр</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_aaa"></div>
			<div class="blank_aaa"></div>
			<div class="blank_a"></div>
			<div id="3-5-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="3-5-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="3-5-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="3-5-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="3-5-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="3-5-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="3-5-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="3-5-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="3-5-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="3-5-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="3-5-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 12</p><h5>500 сом</h5>">12</div>
			<div class="blank_aaa"></div>
			<div class="blank_aa"></div>
			<div class="blank_aaa">Ряд: 5</div>
			<div class="blank_aaa"></div>
			<div class="blank_aa"></div>
			<div id="3-5-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="3-5-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="3-5-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="3-5-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="3-5-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="3-5-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="3-5-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="3-5-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 5</p><h5>500 сом</h5>">4</div>
			<div id="3-5-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="3-5-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="3-5-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 1</p><h5>500 сом</h5>">1</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_aaa"></div>
			<div class="blank_aaa"></div>
			<div class="blank_a"></div>
			<div id="3-4-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="3-4-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="3-4-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="3-4-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="3-4-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="3-4-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="3-4-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="3-4-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="3-4-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="3-4-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="3-4-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 12</p><h5>500 сом</h5>">12</div>
			<div class="blank_aaa"></div>
			<div class="blank_aa"></div>
			<div class="blank_aaa">Ряд: 4</div>
			<div class="blank_aaa"></div>
			<div class="blank_aa"></div>
			<div id="3-4-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="3-4-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="3-4-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="3-4-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="3-4-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="3-4-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="3-4-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="3-4-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="3-4-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="3-4-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="3-4-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 1</p><h5>500 сом</h5>">1</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_d"></div>
			<div id="3-3-31" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 31</p><h5>500 сом</h5>">31</div>
			<div class="blank_a"></div>
			<div class="blank_c"></div>
			<div id="3-3-30" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 30</p><h5>500 сом</h5>">30</div>
			<div id="3-3-29" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 29</p><h5>500 сом</h5>">29</div>
			<div id="3-3-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 28</p><h5>500 сом</h5>">28</div>
			<div id="3-3-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 27</p><h5>500 сом</h5>">27</div>
			<div id="3-3-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="3-3-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="3-3-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="3-3-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="3-3-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="3-3-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 21</p><h5>500 сом</h5>">21</div>
			<div class="blank_aaa"></div>
			<div class="blank_aa"></div>
			<div class="blank_aaa">Ряд: 3</div>
			<div class="blank_aaa"></div>
			<div class="blank_aa"></div>
			<div id="3-3-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="3-3-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="3-3-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="3-3-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="3-3-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="3-3-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="3-3-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="3-3-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="3-3-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="3-3-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="3-3-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 10</p><h5>500 сом</h5>">10</div>
			<div class="blank_a"></div>
			<div id="3-3-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 9</p><h5>500 сом</h5>">9</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div id="3-3-32" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 32</p><h5>500 сом</h5>">32</div>
			<div id="3-2-37" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 37</p><h5>500 сом</h5>">37</div>
			<div class="blank_aa"></div>
			<div class="blank_c"></div>
			<div id="3-2-36" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 36</p><h5>500 сом</h5>">36</div>
			<div id="3-2-35" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 35</p><h5>500 сом</h5>">35</div>
			<div id="3-2-34" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 34</p><h5>500 сом</h5>">34</div>
			<div id="3-2-33" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 33</p><h5>500 сом</h5>">33</div>
			<div id="3-2-32" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 32</p><h5>500 сом</h5>">32</div>
			<div id="3-2-31" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 31</p><h5>500 сом</h5>">31</div>
			<div id="3-2-30" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 30</p><h5>500 сом</h5>">30</div>
			<div id="3-2-29" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 29</p><h5>500 сом</h5>">29</div>
			<div class="blank_aaa"></div>
			<div id="3-2-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 28</p><h5>500 сом</h5>">28</div>
			<div id="3-2-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 27</p><h5>500 сом</h5>">27</div>
			<div id="3-2-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 26</p><h5>500 сом</h5>">26</div>
			<div class="blank_aaa">Ряд: 2</div>
			<div id="3-2-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="3-2-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="3-2-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 23</p><h5>500 сом</h5>">23</div>
			<div class="blank_aaa"></div>
			<div class="blank_a"></div>
			<div id="3-2-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="3-2-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="3-2-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="3-2-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="3-2-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="3-2-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="3-2-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="3-2-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="3-2-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 14</p><h5>500 сом</h5>">14</div>
			<div class="blank_a"></div>
			<div id="3-2-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="3-3-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 8</p><h5>500 сом</h5>">8</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div id="3-3-33" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 33</p><h5>500 сом</h5>">33</div>
			<div id="3-2-38" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 38</p><h5>500 сом</h5>">38</div>
			<div class="blank_aaa"></div>
			<div class="blank_bc"></div>
			<div id="3-1-34" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 34</p><h5>500 сом</h5>">34</div>
			<div id="3-1-33" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 33</p><h5>500 сом</h5>">33</div>
			<div id="3-1-32" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 32</p><h5>500 сом</h5>">32</div>
			<div id="3-1-31" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 31</p><h5>500 сом</h5>">31</div>
			<div id="3-1-30" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 30</p><h5>500 сом</h5>">30</div>
			<div id="3-1-29" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 29</p><h5>500 сом</h5>">29</div>
			<div id="3-1-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 28</p><h5>500 сом</h5>">28</div>
			<div class="blank_aaa"></div>
			<div id="3-1-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 27</p><h5>500 сом</h5>">27</div>
			<div id="3-1-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="3-1-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 25</p><h5>500 сом</h5>">25</div>
			<div class="blank_aaa">Ряд: 1</div>
			<div id="3-1-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="3-1-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="3-1-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="3-1-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 21</p><h5>500 сом</h5>">21</div>
			<div class="blank_aaa"></div>
			<div class="blank_aa"></div>
			<div id="3-1-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="3-1-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="3-1-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="3-1-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="3-1-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="3-1-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="3-1-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 14</p><h5>500 сом</h5>">14</div>
			<div class="blank_a"></div>
			<div id="3-1-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="3-2-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="3-3-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 7</p><h5>500 сом</h5>">7</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div id="3-3-34" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 34</p><h5>500 сом</h5>">34</div>
			<div id="3-2-39" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 39</p><h5>500 сом</h5>">39</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div id="3-3-35" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 35</p><h5>500 сом</h5>">35</div>
			<div id="3-2-40" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 40</p><h5>500 сом</h5>">40</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div id="3-3-36" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 36</p><h5>500 сом</h5>">36</div>
			<div id="3-2-41" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 41</p><h5>500 сом</h5>">41</div>
			<div class="blank_a"></div>
			<div class="blank_bc"></div>
			<div class="blank_4"></div>
			<div id="2-11-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="2-11-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="2-11-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 24</p><h5>500 сом</h5>">24</div>
			<div class="blank_aaa">Ряд: 11</div>
			<div id="2-11-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="2-11-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="2-11-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="2-11-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="2-11-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="2-11-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="2-11-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="2-11-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="2-11-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="2-11-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 14</p><h5>500 сом</h5>">14</div>
			<div class="blank_aaa"></div>
			<div id="2-11-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="2-11-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="2-11-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="2-11-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="2-11-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="2-11-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="2-11-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="2-11-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="2-11-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="2-11-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 4</p><h5>500 сом</h5>">4</div>
			<div class="blank_aaa">Ряд: 11</div>
			<div id="2-11-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="2-11-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="2-11-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 1</p><h5>500 сом</h5>">1</div>
			<div class="blank_a"></div>
			<div class="blank_bc"></div>
			<div class="blank_4"></div>
			<div id="3-1-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="3-2-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="3-3-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 4</p><h5>500 сом</h5>">4</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div id="3-3-37" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 37</p><h5>500 сом</h5>">37</div>
			<div id="3-2-42" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 42</p><h5>500 сом</h5>">42</div>
			<div class="blank_aa"></div>
			<div class="blank_d"></div>
			<div class="blank_2"></div>
			<div id="2-10-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="2-10-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="2-10-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 24</p><h5>500 сом</h5>">24</div>
			<div class="blank_aaa">Ряд: 10</div>
			<div id="2-10-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="2-10-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="2-10-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="2-10-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="2-10-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="2-10-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="2-10-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="2-10-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="2-10-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="2-10-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 14</p><h5>500 сом</h5>">14</div>
			<div class="blank_aaa"></div>
			<div id="2-10-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="2-10-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="2-10-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="2-10-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="2-10-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="2-10-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="2-10-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="2-10-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="2-10-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="2-10-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 4</p><h5>500 сом</h5>">4</div>
			<div class="blank_aaa">Ряд: 10</div>
			<div id="2-10-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="2-10-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="2-10-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 1</p><h5>500 сом</h5>">1</div>
			<div class="blank_aa"></div>
			<div class="blank_d"></div>
			<div class="blank_2"></div>
			<div id="3-1-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="3-2-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="3-3-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 3</p><h5>500 сом</h5>">3</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div id="3-3-38" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 38</p><h5>500 сом</h5>">38</div>
			<div id="3-2-43" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 43</p><h5>500 сом</h5>">43</div>
			<div class="blank_a"></div>
			<div class="blank_c"></div>
			<div class="blank_d"></div>
			<div class="blank_2"></div>
			<div id="2-9-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 28</p><h5>500 сом</h5>">28</div>
			<div id="2-9-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 27</p><h5>500 сом</h5>">27</div>
			<div id="2-9-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="2-9-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 25</p><h5>500 сом</h5>">25</div>
			<div class="blank_aaa">Ряд: 9</div>
			<div id="2-9-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="2-9-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="2-9-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="2-9-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="2-9-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="2-9-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="2-9-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="2-9-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="2-9-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="2-9-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 15</p><h5>500 сом</h5>">15</div>
			<div class="blank_aaa"></div>
			<div id="2-9-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="2-9-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="2-9-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="2-9-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="2-9-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="2-9-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="2-9-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="2-9-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="2-9-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="2-9-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 5</p><h5>500 сом</h5>">5</div>
			<div class="blank_aaa">Ряд: 9</div>
			<div id="2-9-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="2-9-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="2-9-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="2-9-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 1</p><h5>500 сом</h5>">1</div>
			<div class="blank_a"></div>
			<div class="blank_c"></div>
			<div class="blank_d"></div>
			<div class="blank_2"></div>
			<div id="3-1-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="3-2-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="3-3-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 2</p><h5>500 сом</h5>">2</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div id="3-3-39" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 39</p><h5>500 сом</h5>">39</div>
			<div id="3-2-44" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 44</p><h5>500 сом</h5>">44</div>
			<div class="blank_aa"></div>
			<div class="blank_2"></div>
			<div id="2-8-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 28</p><h5>500 сом</h5>">28</div>
			<div id="2-8-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 27</p><h5>500 сом</h5>">27</div>
			<div id="2-8-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="2-8-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 25</p><h5>500 сом</h5>">25</div>
			<div class="blank_aaa">Ряд: 8</div>
			<div id="2-8-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="2-8-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="2-8-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="2-8-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="2-8-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="2-8-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="2-8-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="2-8-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="2-8-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="2-8-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 15</p><h5>500 сом</h5>">15</div>
			<div class="blank_aaa"></div>
			<div id="2-8-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="2-8-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="2-8-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="2-8-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="2-8-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="2-8-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="2-8-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="2-8-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="2-8-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="2-8-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 5</p><h5>500 сом</h5>">5</div>
			<div class="blank_aaa">Ряд: 8</div>
			<div id="2-8-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="2-8-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="2-8-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="2-8-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 1</p><h5>500 сом</h5>">1</div>
			<div class="blank_aa"></div>
			<div class="blank_2"></div>
			<div id="3-1-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="3-2-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="3-3-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 1</p><h5>500 сом</h5>">1</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div id="3-3-40" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 40</p><h5>500 сом</h5>">40</div>
			<div id="3-2-45" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 45</p><h5>500 сом</h5>">45</div>
			<div class="blank_aa"></div>
			<div class="blank_c"></div>
			<div class="blank_2"></div>
			<div id="2-7-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 28</p><h5>500 сом</h5>">28</div>
			<div id="2-7-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 27</p><h5>500 сом</h5>">27</div>
			<div id="2-7-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="2-7-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 25</p><h5>500 сом</h5>">25</div>
			<div class="blank_aaa">Ряд: 7</div>
			<div id="2-7-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="2-7-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="2-7-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="2-7-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="2-7-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="2-7-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="2-7-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="2-7-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="2-7-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="2-7-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 15</p><h5>500 сом</h5>">15</div>
			<div class="blank_aaa"></div>
			<div id="2-7-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="2-7-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="2-7-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="2-7-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="2-7-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="2-7-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="2-7-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="2-7-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="2-7-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="2-7-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 5</p><h5>500 сом</h5>">5</div>
			<div class="blank_aaa">Ряд: 7</div>
			<div id="2-7-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="2-7-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="2-7-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="2-7-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 1</p><h5>500 сом</h5>">1</div>
			<div class="blank_aa"></div>
			<div class="blank_c"></div>
			<div class="blank_2"></div>
			<div id="3-1-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="3-2-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 5</p><h5>500 сом</h5>">5</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div id="3-3-41" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 41</p><h5>500 сом</h5>">41</div>
			<div id="3-2-46" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 46</p><h5>500 сом</h5>">46</div>
			<div class="blank_a"></div>
			<div class="blank_b"></div>
			<div class="blank_d"></div>
			<div class="blank_e"></div>
			<div class="blank_1"></div>
			<div id="2-6-31" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 31</p><h5>500 сом</h5>">31</div>
			<div id="2-6-30" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 30</p><h5>500 сом</h5>">30</div>
			<div id="2-6-29" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 29</p><h5>500 сом</h5>">29</div>
			<div id="2-6-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 28</p><h5>500 сом</h5>">28</div>
			<div id="2-6-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 27</p><h5>500 сом</h5>">27</div>
			<div class="blank_aaa">Ряд: 6</div>
			<div id="2-6-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="2-6-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="2-6-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="2-6-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="2-6-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="2-6-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="2-6-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="2-6-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="2-6-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="2-6-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="2-6-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 16</p><h5>500 сом</h5>">16</div>
			<div class="blank_aa"></div>
			<div id="2-6-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="2-6-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="2-6-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="2-6-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="2-6-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="2-6-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="2-6-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="2-6-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="2-6-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="2-6-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 6</p><h5>500 сом</h5>">6</div>
			<div class="blank_aaa">Ряд: 6</div>
			<div id="2-6-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="2-6-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="2-6-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="2-6-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="2-6-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 1</p><h5>500 сом</h5>">1</div>
			<div class="blank_a"></div>
			<div class="blank_b"></div>
			<div class="blank_d"></div>
			<div class="blank_e"></div>
			<div class="blank_1"></div>
			<div id="3-1-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="3-2-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 4</p><h5>500 сом</h5>">4</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_c"></div>
			<div class="blank_c"></div>
			<div id="3-3-42" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 42</p><h5>500 сом</h5>">42</div>
			<div id="3-2-47" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 47</p><h5>500 сом</h5>">47</div>
			<div class="blank_aa"></div>
			<div class="blank_d"></div>
			<div id="2-5-32" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 32</p><h5>500 сом</h5>">32</div>
			<div id="2-5-31" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 31</p><h5>500 сом</h5>">31</div>
			<div id="2-5-30" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 30</p><h5>500 сом</h5>">30</div>
			<div id="2-5-29" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 29</p><h5>500 сом</h5>">29</div>
			<div id="2-5-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 28</p><h5>500 сом</h5>">28</div>
			<div class="blank_aaa">Ряд: 5</div>
			<div id="2-5-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 27</p><h5>500 сом</h5>">27</div>
			<div id="2-5-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="2-5-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="2-5-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="2-5-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="2-5-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="2-5-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="2-5-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="2-5-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="2-5-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="2-5-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 17</p><h5>500 сом</h5>">17</div>
			<div class="blank_a"></div>
			<div id="2-5-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="2-5-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="2-5-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="2-5-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="2-5-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="2-5-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="2-5-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="2-5-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="2-5-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="2-5-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="2-5-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 6</p><h5>500 сом</h5>">6</div>
			<div class="blank_aaa">Ряд: 5</div>
			<div id="2-5-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="2-5-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="2-5-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="2-5-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="2-5-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 1</p><h5>500 сом</h5>">1</div>
			<div class="blank_aa"></div>
			<div class="blank_d"></div>
			<div id="3-1-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="3-2-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 3</p><h5>500 сом</h5>">3</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_c"></div>
			<div id="3-3-43" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 43</p><h5>500 сом</h5>">43</div>
			<div id="3-2-48" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 48</p><h5>500 сом</h5>">48</div>
			<div class="blank_a"></div>
			<div class="blank_b"></div>
			<div class="blank_1"></div>
			<div id="2-4-34" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 34</p><h5>500 сом</h5>">34</div>
			<div id="2-4-33" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 33</p><h5>500 сом</h5>">33</div>
			<div id="2-4-32" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 32</p><h5>500 сом</h5>">32</div>
			<div id="2-4-31" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 31</p><h5>500 сом</h5>">31</div>
			<div id="2-4-30" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 30</p><h5>500 сом</h5>">30</div>
			<div id="2-4-29" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 29</p><h5>500 сом</h5>">29</div>
			<div class="blank_aaa">Ряд: 4</div>
			<div id="2-4-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 28</p><h5>500 сом</h5>">28</div>
			<div id="2-4-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 27</p><h5>500 сом</h5>">27</div>
			<div id="2-4-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="2-4-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="2-4-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="2-4-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="2-4-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="2-4-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="2-4-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="2-4-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="2-4-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 18</p><h5>500 сом</h5>">18</div>
			<div class="blank_a"></div>
			<div id="2-4-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="2-4-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="2-4-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="2-4-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="2-4-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="2-4-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="2-4-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="2-4-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="2-4-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="2-4-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="2-4-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 7</p><h5>500 сом</h5>">7</div>
			<div class="blank_aaa">Ряд: 4</div>
			<div id="2-4-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="2-4-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="2-4-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="2-4-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="2-4-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="2-4-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 1</p><h5>500 сом</h5>">1</div>
			<div class="blank_a"></div>
			<div class="blank_b"></div>
			<div class="blank_1"></div>
			<div id="3-1-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="3-2-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 2</p><h5>500 сом</h5>">2</div>			
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div id="3-3-44" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 44</p><h5>500 сом</h5>">44</div>
			<div id="3-2-49" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 49</p><h5>500 сом</h5>">49</div>
			<div class="blank_aa"></div>
			<div id="2-3-32" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 32</p><h5>500 сом</h5>">32</div>
			<div id="2-3-31" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 31</p><h5>500 сом</h5>">31</div>
			<div id="2-3-30" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 30</p><h5>500 сом</h5>">30</div>
			<div id="2-3-29" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 29</p><h5>500 сом</h5>">29</div>
			<div id="2-3-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 28</p><h5>500 сом</h5>">28</div>
			<div id="2-3-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 27</p><h5>500 сом</h5>">27</div>
			<div class="blank_aaa">Ряд: 3</div>
			<div id="2-3-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="2-3-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="2-3-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="2-3-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="2-3-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="2-3-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="2-3-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="2-3-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="2-3-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="2-3-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 17</p><h5>500 сом</h5>">17</div>
			<div class="blank_aaa"></div>
			<div id="2-3-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="2-3-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="2-3-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="2-3-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="2-3-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="2-3-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="2-3-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="2-3-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="2-3-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="2-3-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 7</p><h5>500 сом</h5>">7</div>
			<div class="blank_aaa">Ряд: 3</div>
			<div id="2-3-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="2-3-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="2-3-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="2-3-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="2-3-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="2-3-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 1</p><h5>500 сом</h5>">1</div>
			<div class="blank_aa"></div>
			<div id="3-1-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="3-2-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 1</p><h5>500 сом</h5>">1</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div id="3-2-50" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 50</p><h5>500 сом</h5>">50</div>
			<div class="blank_aa"></div>
			<div id="2-2-34" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 34</p><h5>500 сом</h5>">34</div>
			<div id="2-2-33" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 33</p><h5>500 сом</h5>">33</div>
			<div id="2-2-32" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 32</p><h5>500 сом</h5>">32</div>
			<div id="2-2-31" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 31</p><h5>500 сом</h5>">31</div>
			<div id="2-2-30" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 30</p><h5>500 сом</h5>">30</div>
			<div id="2-2-29" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 29</p><h5>500 сом</h5>">29</div>
			<div id="2-2-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 28</p><h5>500 сом</h5>">28</div>
			<div class="blank_aaa">Ряд: 2</div>
			<div id="2-2-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 27</p><h5>500 сом</h5>">27</div>
			<div id="2-2-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="2-2-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="2-2-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="2-2-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="2-2-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="2-2-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="2-2-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="2-2-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="2-2-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 18</p><h5>500 сом</h5>">18</div>
			<div class="blank_aaa"></div>
			<div id="2-2-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="2-2-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="2-2-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="2-2-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="2-2-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="2-2-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="2-2-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="2-2-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="2-2-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="2-2-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 8</p><h5>500 сом</h5>">8</div>
			<div class="blank_aaa">Ряд: 2</div>
			<div id="2-2-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="2-2-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="2-2-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="2-2-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="2-2-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="2-2-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="2-2-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 1</p><h5>500 сом</h5>">1</div>
			<div class="blank_aa"></div>
			<div id="3-1-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 1</p><h5>500 сом</h5>">1</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_aaa"></div>
			<div class="blank_aa"></div>
			<div id="2-1-31" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 31</p><h5>500 сом</h5>">31</div>
			<div id="2-1-30" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 30</p><h5>500 сом</h5>">30</div>
			<div id="2-1-29" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 29</p><h5>500 сом</h5>">29</div>
			<div id="2-1-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 28</p><h5>500 сом</h5>">28</div>
			<div id="2-1-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 27</p><h5>500 сом</h5>">27</div>
			<div class="blank_aaa">Ряд: 1</div>
			<div id="2-1-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="2-1-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="2-1-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="2-1-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="2-1-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="2-1-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="2-1-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="2-1-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="2-1-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="2-1-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 17</p><h5>500 сом</h5>">17</div>
			<div class="blank_aaa"></div>
			<div id="2-1-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="2-1-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="2-1-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="2-1-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="2-1-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="2-1-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="2-1-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="2-1-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="2-1-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="2-1-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 7</p><h5>500 сом</h5>">7</div>
			<div class="blank_aaa">Ряд: 1</div>
			<div id="2-1-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="2-1-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="2-1-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="2-1-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="2-1-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="2-1-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 1</p><h5>500 сом</h5>">1</div>
		</div>
	</div>
	<div class="row">
		<div class="marker" style="width:1300px">
			<h4>Партер</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_aaa"></div>
			<div class="blank_aa"></div>
			<div id="1-11-36" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 36</p><h5>500 сом</h5>">36</div>			
			<div id="1-11-35" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 35</p><h5>500 сом</h5>">35</div>
			<div id="1-11-34" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 34</p><h5>500 сом</h5>">34</div>
			<div id="1-11-33" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 33</p><h5>500 сом</h5>">33</div>
			<div id="1-11-32" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 32</p><h5>500 сом</h5>">32</div>
			<div id="1-11-31" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 31</p><h5>500 сом</h5>">31</div>
			<div id="1-11-30" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 30</p><h5>500 сом</h5>">30</div>
			<div id="1-11-29" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 29</p><h5>500 сом</h5>">29</div>
			<div id="1-11-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 28</p><h5>500 сом</h5>">28</div>
			<div id="1-11-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 27</p><h5>500 сом</h5>">27</div>
			<div id="1-11-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="1-11-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="1-11-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="1-11-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="1-11-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="1-11-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="1-11-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="1-11-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 19</p><h5>500 сом</h5>">19</div>
			<div class="blank_aaa">Ряд: 11</div>
			<div id="1-11-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="1-11-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="1-11-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="1-11-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="1-11-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="1-11-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="1-11-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="1-11-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="1-11-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="1-11-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="1-11-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="1-11-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="1-11-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="1-11-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="1-11-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="1-11-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="1-11-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="1-11-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 11 Место: 1</p><h5>500 сом</h5>">1</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_aaa"></div>
			<div class="blank_aa"></div>
			<div id="1-10-36" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 36</p><h5>500 сом</h5>">36</div>
			<div id="1-10-35" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 35</p><h5>500 сом</h5>">35</div>
			<div id="1-10-34" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 34</p><h5>500 сом</h5>">34</div>
			<div id="1-10-33" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 33</p><h5>500 сом</h5>">33</div>
			<div id="1-10-32" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 32</p><h5>500 сом</h5>">32</div>
			<div id="1-10-31" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 31</p><h5>500 сом</h5>">31</div>
			<div id="1-10-30" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 30</p><h5>500 сом</h5>">30</div>
			<div id="1-10-29" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 29</p><h5>500 сом</h5>">29</div>
			<div id="1-10-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 28</p><h5>500 сом</h5>">28</div>
			<div id="1-10-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 27</p><h5>500 сом</h5>">27</div>
			<div id="1-10-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="1-10-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="1-10-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="1-10-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="1-10-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="1-10-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="1-10-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="1-10-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 19</p><h5>500 сом</h5>">19</div>
			<div class="blank_aaa">Ряд: 10</div>
			<div id="1-10-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="1-10-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="1-10-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="1-10-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="1-10-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="1-10-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="1-10-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="1-10-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="1-10-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="1-10-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="1-10-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="1-10-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="1-10-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="1-10-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="1-10-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="1-10-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="1-10-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="1-10-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 10 Место: 1</p><h5>500 сом</h5>">1</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_aaa"></div>
			<div class="blank_aa"></div>
			<div id="1-9-36" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 36</p><h5>500 сом</h5>">36</div>
			<div id="1-9-35" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 35</p><h5>500 сом</h5>">35</div>
			<div id="1-9-34" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 34</p><h5>500 сом</h5>">34</div>
			<div id="1-9-33" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 33</p><h5>500 сом</h5>">33</div>
			<div id="1-9-32" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 32</p><h5>500 сом</h5>">32</div>
			<div id="1-9-31" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 31</p><h5>500 сом</h5>">31</div>
			<div id="1-9-30" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 30</p><h5>500 сом</h5>">30</div>
			<div id="1-9-29" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 29</p><h5>500 сом</h5>">29</div>
			<div id="1-9-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 28</p><h5>500 сом</h5>">28</div>
			<div id="1-9-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 27</p><h5>500 сом</h5>">27</div>
			<div id="1-9-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="1-9-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="1-9-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="1-9-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="1-9-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="1-9-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="1-9-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="1-9-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 19</p><h5>500 сом</h5>">19</div>
			<div class="blank_aaa">Ряд: 9</div>
			<div id="1-9-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="1-9-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="1-9-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="1-9-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="1-9-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="1-9-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="1-9-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="1-9-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="1-9-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="1-9-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="1-9-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="1-9-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="1-9-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="1-9-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="1-9-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="1-9-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="1-9-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="1-9-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 9 Место: 1</p><h5>500 сом</h5>">1</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_aaa"></div>
			<div class="blank_aa"></div>
			<div id="1-8-36" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 36</p><h5>500 сом</h5>">36</div>
			<div id="1-8-35" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 35</p><h5>500 сом</h5>">35</div>
			<div id="1-8-34" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 34</p><h5>500 сом</h5>">34</div>
			<div id="1-8-33" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 33</p><h5>500 сом</h5>">33</div>
			<div id="1-8-32" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 32</p><h5>500 сом</h5>">32</div>
			<div id="1-8-31" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 31</p><h5>500 сом</h5>">31</div>
			<div id="1-8-30" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 30</p><h5>500 сом</h5>">30</div>
			<div id="1-8-29" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 29</p><h5>500 сом</h5>">29</div>
			<div id="1-8-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 28</p><h5>500 сом</h5>">28</div>
			<div id="1-8-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 27</p><h5>500 сом</h5>">27</div>
			<div id="1-8-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="1-8-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="1-8-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="1-8-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="1-8-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="1-8-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="1-8-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="1-8-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 19</p><h5>500 сом</h5>">19</div>
			<div class="blank_aaa">Ряд: 8</div>
			<div id="1-8-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="1-8-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="1-8-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="1-8-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="1-8-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="1-8-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="1-8-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="1-8-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="1-8-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="1-8-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="1-8-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="1-8-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="1-8-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="1-8-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="1-8-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="1-8-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="1-8-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="1-8-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 8 Место: 1</p><h5>500 сом</h5>">1</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_aaa"></div>
			<div class="blank_aaa"></div>
			<div id="1-7-34" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 34</p><h5>500 сом</h5>">34</div>
			<div id="1-7-33" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 33</p><h5>500 сом</h5>">33</div>
			<div id="1-7-32" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 32</p><h5>500 сом</h5>">32</div>
			<div id="1-7-31" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 31</p><h5>500 сом</h5>">31</div>
			<div id="1-7-30" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 30</p><h5>500 сом</h5>">30</div>
			<div id="1-7-29" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 29</p><h5>500 сом</h5>">29</div>
			<div id="1-7-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 28</p><h5>500 сом</h5>">28</div>
			<div id="1-7-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 27</p><h5>500 сом</h5>">27</div>
			<div id="1-7-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="1-7-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="1-7-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="1-7-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="1-7-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="1-7-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="1-7-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="1-7-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="1-7-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 18</p><h5>500 сом</h5>">18</div>
			<div class="blank_aaa">Ряд: 7</div>
			<div id="1-7-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="1-7-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="1-7-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="1-7-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="1-7-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="1-7-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="1-7-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="1-7-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="1-7-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="1-7-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="1-7-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="1-7-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="1-7-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="1-7-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="1-7-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="1-7-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="1-7-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 7 Место: 1</p><h5>500 сом</h5>">1</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_aaa"></div>
			<div class="blank_aaa"></div>
			<div id="1-6-34" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 34</p><h5>500 сом</h5>">34</div>
			<div id="1-6-33" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 33</p><h5>500 сом</h5>">33</div>
			<div id="1-6-32" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 32</p><h5>500 сом</h5>">32</div>
			<div id="1-6-31" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 31</p><h5>500 сом</h5>">31</div>
			<div id="1-6-30" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 30</p><h5>500 сом</h5>">30</div>
			<div id="1-6-29" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 29</p><h5>500 сом</h5>">29</div>
			<div id="1-6-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 28</p><h5>500 сом</h5>">28</div>
			<div id="1-6-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 27</p><h5>500 сом</h5>">27</div>
			<div id="1-6-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="1-6-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="1-6-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="1-6-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="1-6-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="1-6-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="1-6-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="1-6-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="1-6-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 18</p><h5>500 сом</h5>">18</div>
			<div class="blank_aaa">Ряд: 6</div>
			<div id="1-6-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="1-6-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="1-6-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="1-6-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="1-6-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="1-6-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="1-6-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="1-6-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="1-6-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="1-6-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="1-6-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="1-6-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="1-6-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="1-6-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="1-6-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="1-6-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="1-6-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 6 Место: 1</p><h5>500 сом</h5>">1</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_aaa"></div>
			<div class="blank_aaa"></div>
			<div class="blank_a"></div>
			<div id="1-5-32" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 32</p><h5>500 сом</h5>">32</div>
			<div id="1-5-31" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 31</p><h5>500 сом</h5>">31</div>
			<div id="1-5-30" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 30</p><h5>500 сом</h5>">30</div>
			<div id="1-5-29" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 29</p><h5>500 сом</h5>">29</div>
			<div id="1-5-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 28</p><h5>500 сом</h5>">28</div>
			<div id="1-5-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 27</p><h5>500 сом</h5>">27</div>
			<div id="1-5-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="1-5-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="1-5-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="1-5-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="1-5-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="1-5-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="1-5-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="1-5-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="1-5-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="1-5-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 17</p><h5>500 сом</h5>">17</div>
			<div class="blank_aaa">Ряд: 5</div>
			<div id="1-5-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="1-5-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="1-5-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="1-5-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="1-5-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="1-5-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="1-5-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="1-5-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="1-5-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="1-5-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="1-5-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="1-5-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="1-5-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="1-5-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="1-5-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="1-5-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 5 Место: 1</p><h5>500 сом</h5>">1</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_aaa"></div>
			<div class="blank_aaa"></div>
			<div class="blank_aa"></div>
			<div id="1-4-30" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 30</p><h5>500 сом</h5>">30</div>
			<div id="1-4-29" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 29</p><h5>500 сом</h5>">29</div>
			<div id="1-4-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 28</p><h5>500 сом</h5>">28</div>
			<div id="1-4-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 27</p><h5>500 сом</h5>">27</div>
			<div id="1-4-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="1-4-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="1-4-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="1-4-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="1-4-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="1-4-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="1-4-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="1-4-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="1-4-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="1-4-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="1-4-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 16</p><h5>500 сом</h5>">16</div>
			<div class="blank_aaa">Ряд: 4</div>
			<div id="1-4-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="1-4-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="1-4-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="1-4-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="1-4-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="1-4-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="1-4-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="1-4-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="1-4-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="1-4-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="1-4-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="1-4-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="1-4-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="1-4-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="1-4-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 4 Место: 1</p><h5>500 сом</h5>">1</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_aaa"></div>
			<div class="blank_aaa"></div>
			<div class="blank_aaa"></div>
			<div id="1-3-28" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 28</p><h5>500 сом</h5>">28</div>
			<div id="1-3-27" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 27</p><h5>500 сом</h5>">27</div>
			<div id="1-3-26" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 26</p><h5>500 сом</h5>">26</div>
			<div id="1-3-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="1-3-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="1-3-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="1-3-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="1-3-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="1-3-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="1-3-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="1-3-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="1-3-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="1-3-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="1-3-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 15</p><h5>500 сом</h5>">15</div>
			<div class="blank_aaa">Ряд: 3</div>
			<div id="1-3-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="1-3-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 13</p><h5>500 сом</h5>">13</div>
			<div id="1-3-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="1-3-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="1-3-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="1-3-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="1-3-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="1-3-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="1-3-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="1-3-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="1-3-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="1-3-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="1-3-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="1-3-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 3 Место: 1</p><h5>500 сом</h5>">1</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_aaa"></div>
			<div class="blank_aaa"></div>
			<div class="blank_aaa"></div>
			<div class="blank_a"></div>
			<div id="1-2-25" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 25</p><h5>500 сом</h5>">25</div>
			<div id="1-2-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="1-2-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="1-2-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="1-2-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="1-2-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="1-2-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="1-2-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="1-2-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="1-2-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="1-2-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="1-2-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="1-2-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 13</p><h5>500 сом</h5>">13</div>
			<div class="blank_aaa">Ряд: 2</div>
			<div id="1-2-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="1-2-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="1-2-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="1-2-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="1-2-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="1-2-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="1-2-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="1-2-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="1-2-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="1-2-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="1-2-2" class="btn btn-default seat " data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="1-2-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 2 Место: 1</p><h5>500 сом</h5>">1</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blank_aaa"></div>
			<div class="blank_aaa"></div>
			<div class="blank_aaa"></div>
			<div class="blank_aa"></div>
			<div id="1-1-24" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 24</p><h5>500 сом</h5>">24</div>
			<div id="1-1-23" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 23</p><h5>500 сом</h5>">23</div>
			<div id="1-1-22" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 22</p><h5>500 сом</h5>">22</div>
			<div id="1-1-21" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 21</p><h5>500 сом</h5>">21</div>
			<div id="1-1-20" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 20</p><h5>500 сом</h5>">20</div>
			<div id="1-1-19" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 19</p><h5>500 сом</h5>">19</div>
			<div id="1-1-18" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 18</p><h5>500 сом</h5>">18</div>
			<div id="1-1-17" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 17</p><h5>500 сом</h5>">17</div>
			<div id="1-1-16" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 16</p><h5>500 сом</h5>">16</div>
			<div id="1-1-15" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 15</p><h5>500 сом</h5>">15</div>
			<div id="1-1-14" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 14</p><h5>500 сом</h5>">14</div>
			<div id="1-1-13" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 13</p><h5>500 сом</h5>">13</div>
			<div class="blank_aaa">Ряд: 1</div>
			<div id="1-1-12" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 12</p><h5>500 сом</h5>">12</div>
			<div id="1-1-11" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 11</p><h5>500 сом</h5>">11</div>
			<div id="1-1-10" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 10</p><h5>500 сом</h5>">10</div>
			<div id="1-1-9" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 9</p><h5>500 сом</h5>">9</div>
			<div id="1-1-8" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 8</p><h5>500 сом</h5>">8</div>
			<div id="1-1-7" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 7</p><h5>500 сом</h5>">7</div>
			<div id="1-1-6" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 6</p><h5>500 сом</h5>">6</div>
			<div id="1-1-5" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 5</p><h5>500 сом</h5>">5</div>
			<div id="1-1-4" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 4</p><h5>500 сом</h5>">4</div>
			<div id="1-1-3" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 3</p><h5>500 сом</h5>">3</div>
			<div id="1-1-2" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 2</p><h5>500 сом</h5>">2</div>
			<div id="1-1-1" class="btn btn-default seat" data-html="true" data-toggle="tooltip" data-placement="top" title="<p>Ряд: 1 Место: 1</p><h5>500 сом</h5>">1</div>
		</div>
	</div>
	<div class="clear"><br><br></div>
	<div class="blank_aaa"></div>
	<div class="blank_aaa"></div>
	<div class="blank_aaa"></div>
	<div class="blank_a"></div>
	<div class="blank_b"></div>
	<div id="screen" class="btn btn-default screen">Сцена</div>



	</div>
	</div>
			
	



	</div>