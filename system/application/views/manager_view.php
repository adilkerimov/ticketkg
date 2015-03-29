    <br />
    <div id="nav_block">
    <div id="nav_block_in">
    <!-- <h5>Статистика</h5> 
    <br /> -->
    <p style="float: left;"><span class="done_r">Разыграно призов:</span><span class="done"><?=$won_count;?></span></p>
    <p style="float: left; padding: 0 10px;"><span class="done_r">Начислено денежных вознаграждений:</span><span class="done"><?=$account_count;?> сом</span></p>
    <p style="float: left;"><span class="done_r">Пользователи онлайн:</span><span class="done"><?=$auth_session;?></span></p>
    <p style="float: left;"><span class="done_r">Розыгрышей проведено:</span><span class="done"><?=$all_count;?></span></p>
    <p style="float: right;"><span class="done_r"></span><span class="done">Подробнее</span></p>
    
    </div>
    </div>
    <div class="clear"></div>
<br />
	<h1>Менеджерский раздел компании <span style="color: #137171; border-bottom: 1px dashed #137171;">
        <?php
        $user = $this->ion_auth->user()->row(); 
        $name = $user->company;
        $comp_name = $this->prizes_model->get_comp($name);
        echo $comp_name['company'];?>
        </span></h1>
      
<div class="clear mymarg"></div>

<?php foreach ($main_info as $item):?>
<div class="window">

<div id="win_head"><h2><?php 
$name = $item['id_company'];
$comp_name = $this->prizes_model->get_comp($name);
echo $comp_name['company'];
?> - <?=$item['rozyg_title'];?></h2>
</div>
<div id="imgw" class="round"><img class="round" src="<?=base_url();?>img/<?=$item['rozyg_img'];?>" /></div>
<div id="win_right">
<div id="upper_side">
<div id="end_date<?=$item['id_rozygr'];?>" style="display: none;"><?=$item['end_date'];?></div>
<div class="round" style="background: #FBFDFD; width: 220px; float: left; padding: 5px 0 0 3px; border: 1px solid #80A7A6; clear: both;">
<div class="px5">
<div style="float: left;"><img src="<?=base_url();?>img/gold_cup.png" width="35"/></div><div style="float: left; padding-top: 7px;">X 
<?php 
$to_get = $item['id_rozygr']; $rozygr_count_g = $this->prizes_model->count_gold_prizes($to_get); echo $rozygr_count_g;
?> - <a class="info" onclick="$('#exampleModalG<?=$item['id_rozygr'];?>').arcticmodal()">список призов</a>
<div class="g-hidden">
		<div class="box-modal" id="exampleModalG<?=$item['id_rozygr'];?>">
				<div class="box-modal_close arcticmodal-close">закрыть</div>
                        <?php
                        $gold_prizes = $this->prizes_model->get_gold_prizes($item['id_rozygr']);
                        
                        if ($gold_prizes)
                        {
                        foreach ($gold_prizes as $prize):
                        if($prize['id_status'] == 0)
                        {
                            $realstatus = 'Активный';
                        }
                        else
                        {
                            $realstatus = 'Неактивный';
                        }
                        echo "<div class='clear'><img class='status_main' title='".$realstatus."' width='13' src='".base_url()."img/status_".$prize['id_status'].".png'/><a href='#' style='border-bottom:1px dashed #137171; color: #137171;'>".$prize['prize_name']."</a><br /></div>";    
                        endforeach;
                        }
                        else
                        {
                        echo "Нет золотых призов в данном розыгрыше.";    
                        }
                        ?>
		</div>
</div>
</div>
</div>
<div class="px5">
<div style="float: left;"><img src="<?=base_url();?>img/silver_cup.png" width="35"/></div><div style="float: left; padding-top: 7px;">X 
<?php 
$rozygr_count_s = $this->prizes_model->count_silver_prizes($to_get); echo $rozygr_count_s;
?> - <a class="info" onclick="$('#exampleModalS<?=$item['id_rozygr'];?>').arcticmodal()">список призов</a>
<div class="g-hidden">
		<div class="box-modal" id="exampleModalS<?=$item['id_rozygr'];?>">
				<div class="box-modal_close arcticmodal-close">закрыть</div>
                        <?php
                        $silver_prizes = $this->prizes_model->get_silver_prizes($item['id_rozygr']);
                        
                        if ($silver_prizes)
                        {
                        foreach ($silver_prizes as $prize):
                        if($prize['id_status'] == 0)
                        {
                            $realstatus = 'Активный';
                        }
                        else
                        {
                            $realstatus = 'Неактивный';
                        }
                        echo "<div class='clear'><img class='status_main' title='".$realstatus."' width='13' src='".base_url()."img/status_".$prize['id_status'].".png'/><a href='#' style='border-bottom:1px dashed #137171; color: #137171;'>".$prize['prize_name']."</a><br /></div>";    
                        endforeach;
                        }
                        else
                        {
                        echo "Нет серебрянных призов в данном розыгрыше.";    
                        }
                        ?>
		</div>
</div>
</div>
</div>
<div class="clear">
<div style="float: left;"><img src="<?=base_url();?>img/bronz_cup.png" width="35"/></div><div style="float: left; padding-top: 7px;">X 
<?php 
$rozygr_count_b = $this->prizes_model->count_bronz_prizes($to_get); echo $rozygr_count_b;
?> - <a class="info" onclick="$('#exampleModalB<?=$item['id_rozygr'];?>').arcticmodal()">список призов</a>
<div class="g-hidden">
		<div class="box-modal" id="exampleModalB<?=$item['id_rozygr'];?>">
				<div class="box-modal_close arcticmodal-close">закрыть</div>
                        <?php
                        $bronz_prizes = $this->prizes_model->get_bronz_prizes($item['id_rozygr']);
                        
                        if ($bronz_prizes)
                        {
                        foreach ($bronz_prizes as $prize):
                        if($prize['id_status'] == 0)
                        {
                            $realstatus = 'Активный';
                        }
                        else
                        {
                            $realstatus = 'Неактивный';
                        }
                        echo "<div class='clear'><img class='status_main' title='".$realstatus."' width='13' src='".base_url()."img/status_".$prize['id_status'].".png'/><a href='#' style='border-bottom:1px dashed #137171; color: #137171;'>".$prize['prize_name']."</a><br /></div>";    
                        endforeach;
                        }
                        else
                        {
                        echo "Нет бронзовых призов в данном розыгрыше.";    
                        }
                        ?>
		</div>
</div>
</div>
</div>
<div class="clear">
<div style="float: left;"><img src="<?=base_url();?>img/coin.png" width="35"/></div><div style="float: left; padding-top: 7px;">= 
<a class="info" onclick="$('#exampleModalM<?=$item['id_rozygr'];?>').arcticmodal()"><?php 
$rozygr_count_m = $this->prizes_model->count_money_prizes($to_get); echo $rozygr_count_m;
?> сом </a>
<div class="g-hidden">
		<div class="box-modal" id="exampleModalM<?=$item['id_rozygr'];?>">
				<div class="box-modal_close arcticmodal-close">закрыть</div>
                        <?php 
                        $som1 = $this->prizes_model->count_1som_prizes($to_get);
                        $done1 = $this->prizes_model->count_1som_done($to_get);
                        $som3 = $this->prizes_model->count_3som_prizes($to_get);
                        $done3 = $this->prizes_model->count_3som_done($to_get);
                        $som5 = $this->prizes_model->count_5som_prizes($to_get);
                        $done5 = $this->prizes_model->count_5som_done($to_get);
                        $som10 = $this->prizes_model->count_10som_prizes($to_get);
                        $done10 = $this->prizes_model->count_10som_done($to_get);
                        $som20 = $this->prizes_model->count_20som_prizes($to_get);
                        $done20 = $this->prizes_model->count_20som_done($to_get);
                        $som50 = $this->prizes_model->count_50som_prizes($to_get);
                        $done50 = $this->prizes_model->count_50som_done($to_get);
                        
                        if($done1 != 0)
                        {
                            $status1 = 'Активный';
                            $status1s = '0';
                            
                        }
                        else
                        {
                            $status1 = 'Неактивный';
                            $status1s = '1';
                        }
                        
                        if($done3 != 0)
                        {
                            $status3 = 'Активный';
                            $status3s = '0';
                        }
                        else
                        {
                            $status3 = 'Неактивный';
                            $status3s = '1';
                        }
                        
                        if($done5 != 0)
                        {
                            $status5 = 'Активный';
                            $status5s = '0';
                        }
                        else
                        {
                            $status5 = 'Неактивный';
                            $status5s = '1';
                        }
                        
                        if($done10 != 0)
                        {
                            $status10 = 'Активный';
                            $status10s = '0';
                        }
                        else
                        {
                            $status10 = 'Неактивный';
                            $status10s = '1';
                        }
                        
                        if($done20 != 0)
                        {
                            $status20 = 'Активный';
                            $status20s = '0';
                        }
                        else
                        {
                            $status20 = 'Неактивный';
                            $status20s = '1';
                        }
                        
                        if($done50 != 0)
                        {
                            $status50 = 'Активный';
                            $status50s = '0';
                        }
                        else
                        {
                            $status50 = 'Неактивный';
                            $status50s = '1';
                        }
                        
                        echo "<div class='clear'><img class='status' title='".$status1."' width='13' src='".base_url()."img/status_".$status1s.".png'/><a href='#' style='border-bottom:1px dashed #137171; color: #137171;'>1 сом x ".$som1."</a> (осталось ".$done1.")<br /></div>";
                        echo "<div class='clear'><img class='status' title='".$status3."' width='13' src='".base_url()."img/status_".$status3s.".png'/><a href='#' style='border-bottom:1px dashed #137171; color: #137171;'>3 сом x ".$som3."</a> (осталось ".$done3.")<br /></div>";
                        echo "<div class='clear'><img class='status' title='".$status5."' width='13' src='".base_url()."img/status_".$status5s.".png'/><a href='#' style='border-bottom:1px dashed #137171; color: #137171;'>5 сом x ".$som5."</a> (осталось ".$done5.")<br /></div>";
                        echo "<div class='clear'><img class='status' title='".$status10."' width='13' src='".base_url()."img/status_".$status10s.".png'/><a href='#' style='border-bottom:1px dashed #137171; color: #137171;'>10 сом x ".$som10."</a> (осталось ".$done10.")<br /></div>";
                        echo "<div class='clear'><img class='status' title='".$status20."' width='13' src='".base_url()."img/status_".$status20s.".png'/><a href='#' style='border-bottom:1px dashed #137171; color: #137171;'>20 сом x ".$som20."</a> (осталось ".$done20.")<br /></div>";
                        echo "<div class='clear'><img class='status' title='".$status50."' width='13' src='".base_url()."img/status_".$status50s.".png'/><a href='#' style='border-bottom:1px dashed #137171; color: #137171;'>50 сом x ".$som50."</a> (осталось ".$done50.")<br /></div>";
?>
		</div>
</div>
</div>
</div>
</div>

<div style="margin: 0 0 8px 10px; float: right;">
<div class="round" style="background: #FBFDFD; width: 307px; float: right; padding: 4px 0 0 5px; border: 1px solid #80A7A6;">
<div class="clear"></div>
<div style="float: left;"><img src="<?=base_url();?>img/clock.png" width="50" /></div>
<div style="float: left; padding: 4px 0 0 10px;">
<div id="rezult">
<div class="countdown-example<?=$item['id_rozygr'];?>"></div><br />
</div>
</div>
</div>
</div>
<div style="margin-left: 10px; float: right;">
<div class="round" style="background: #fff; width: 307px; height: 60px; float: right; padding: 4px 0 0 5px; border: 1px solid #80A7A6;">
<div class="clear"></div>
<div style="float: left;">Здесь должно быть описание/условия </div>

</div>
</div>
</div>
<div id="bottom_side">
<div class="button right"><a href="<?=base_url();?>manager/company/<?=$item['id_rozygr'];?>">статистика</a></div>
</div>
</div>
</div>
<div class="clear mymarg"></div>
<script type="text/javascript">
    $(function () {
        var rozyg_id = <?=$item['id_rozygr'];?>;
        var text = $('#end_date' + rozyg_id).text();
        var mdate = new Date(text.replace(/(\d+)-(\d+)-(\d+)/, '$2/$3/$1'));
    	austDay = new Date(mdate.getFullYear(), mdate.getMonth(), mdate.getDate());
        $('.countdown-example' + rozyg_id).countdown({until: austDay});
    });
</script>
<?php endforeach;?>




</div>