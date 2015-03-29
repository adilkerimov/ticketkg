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
	<h1>Розыгрыш призов от компании <span style="color: #137171; border-bottom: 1px dashed #137171;"><?php 
        $name = $rozygr['id_company'];
        $comp_name = $this->prizes_model->get_comp($name);
        echo $comp_name['company']; ?></span> <!-- (<?//=$rozygr['rozyg_title'];?>) --> </h1>

        
        <form method="post" action="<?=base_url();?>company/<?=$rozygr['id_rozygr'];?>">
    
    
    <div class="window">
    <?php 
    	if (!$this->ion_auth->logged_in())
		{  
		}
        else
        {
            $user = $this->ion_auth->user()->row();
            $to_get = $user->id;
            $data = array();
            $data['user_id'] = $to_get;
            $data['rozygrysh'] = $rozygr['id_rozygr'];
            $count_account = $this->user_click_model->get_click_count($data);
            //echo $count_account['click_count'];
            if ($count_account)
            {
                $remain = $rozygr['max_count'] - $count_account['click_count'];
                if($remain <= 0)
                {
                  echo "<div style='border: 1px solid #80A7A6; color: #E84F54; padding: 2px 0 0 35px; font-weight: bold; float: right; width: 155px; height: 23px; background-color: #FAC7C8; position: absolute; margin: 3px 0 0 85px;'><span style='color: #C11115 ;'>Приходите завтра</span></div>";  
                }
                else
                {
                  echo "<div style='border: 1px solid #80A7A6; color: #E84F54; padding: 2px 0 0 10px; font-weight: bold; float: right; width: 155px; height: 23px; background-color: #EAF4F1; position: absolute; margin: 0 0 0 95px;'><span style='color: #137171 ;'>Попыток осталось: </span>".$remain."</div>";  
                }
            }
            else
            {
                $remain = $rozygr['max_count'];
                echo "<div style='border: 1px solid #80A7A6; color: #E84F54; padding: 2px 0 0 10px; font-weight: bold; float: right; width: 155px; height: 23px; background-color: #EAF4F1; position: absolute; margin: 0 0 0 100px;'><span style='color: #137171 ;'>Попыток осталось: </span>".$remain."</div>";
            }
            
        }
        
     ?>
    <div style="width: 350px; float: left;">
    <div id="inception">
    <div style="margin: 0 auto; text-align: center; color: #137171; font-size: 15px; font-weight: bold;">
 
    </div>
    
        <p id="pMessage" style="margin: 0 auto; display: block; width: 300px;">
			<img src="<?=base_url();?>/img/coin_first.png" id="imgFailCoin" />
		</p>
	</div>
    <input type="hidden" value="<? $date = date ("Y-m-d H:i:s"); echo $date;?>" name="win_date" />
    <input type="hidden" value="<?=$rozygr['id_rozygr'];?>" name="id_rozygr" />
    <div style="margin: 0 auto; width: 120px;">
    <input class="button" type="submit" value="получить" class="submit" name="my_button" />
    </div><br />
    </div>
    <div class="round_s" style="width: 628px; float: left; background: #f6f6f6; height: 368px; border: 1px solid #0E4444;">
    <img class="round_s" src="<?=base_url();?>img/banner/1.jpg" />
    </div>
    <div style="width: 980px; height: 200px; float: left; border-top: 0px dashed #074343; padding: 8px 0 5px 0;">
    
    <div style="padding: 0; float: left;">
    <div class="round" style="background: #FBFDFD; width: 232px; height: 180px; float: left; padding: 5px 0 0 3px; border: 1px solid #80A7A6;">
<div>
<div style="float: left;"><img src="<?=base_url();?>img/gold_cup.png" width="30"/></div>
<div style="float: left; padding-top: 7px;">
<?php 
$to_get = $rozygr['id_rozygr']; $rozygr_count_g = $this->prizes_model->count_gold_prizes($to_get);
?>
<div id="test-webkit" class="content scroll-simple scroll-simple_outer">
                <div class="resizable" style="padding: 3px 10px 3px 3px;">
                        
                        
                        <?php
                        if ($gold_prizes)
                        {
                        foreach ($gold_prizes as $item):
                        if($item['id_status'] == 0)
                        {
                            $realstatus = 'Активный';
                        }
                        else
                        {
                            $realstatus = 'Неактивный';
                        }
                        echo "<img class='status' title='".$realstatus."' width='13' src='".base_url()."img/status_".$item['id_status'].".png'/><a href='#' style='border-bottom:1px dashed #137171; color: #137171;'>".$item['prize_name']."</a><br />";    
                        endforeach;
                        }
                        else
                        {
                        echo "Нет золотых призов";    
                        }
                        ?>
                                            
                </div>
</div> 
</div>
</div>
</div>
</div>

    <div style="padding: 0 0 0 10px; float: left;">
    <div class="round" style="background: #FBFDFD; width: 232px; height: 180px; float: left; padding: 5px 0 0 3px; border: 1px solid #80A7A6;">
<div class="clear">
<div style="float: left;"><img src="<?=base_url();?>img/silver_cup.png" width="30"/></div>
<div style="float: left; padding-top: 7px;">
<?php 
$rozygr_count_s = $this->prizes_model->count_silver_prizes($to_get);
?> 
<div id="test-webkit" class="content scroll-simple scroll-simple_outer" >
                <div class="resizable" style="padding: 3px 10px 3px 3px;">

                        <?php
                        if ($silver_prizes)
                        {
                        foreach ($silver_prizes as $item):
                        if($item['id_status'] == 0)
                        {
                            $realstatus = 'Активный';
                        }
                        else
                        {
                            $realstatus = 'Неактивный';
                        }
                        echo "<img class='status' title='".$realstatus."' width='13' src='".base_url()."img/status_".$item['id_status'].".png'/><a href='#' style='border-bottom:1px dashed #137171; color: #137171;'>".$item['prize_name']."</a><br />";    
                        endforeach;
                        }
                        else
                        {
                        echo "Нет серебрянных призов";    
                        }
                        ?>
                        
                        </div>
</div>
</div>
</div>
</div>
</div>
    
    <div style="padding: 0 0 0 10px; float: left;">
    <div class="round" style="background: #FBFDFD; width: 233px; height: 180px; float: left; padding: 5px 0 0 3px; border: 1px solid #80A7A6;">
<div class="clear">
<div style="float: left;"><img src="<?=base_url();?>img/bronz_cup.png" width="30"/></div><div style="float: left; padding-top: 7px;"> 
<?php 
$rozygr_count_b = $this->prizes_model->count_bronz_prizes($to_get); //echo $rozygr_count_b;
?> 
<div id="test-webkit" class="content scroll-simple scroll-simple_outer" >
                <div class="resizable" style="padding: 3px 10px 3px 3px;">
                        <?php
                        if ($bronz_prizes)
                        {
                        foreach ($bronz_prizes as $item):
                        if($item['id_status'] == 0)
                        {
                            $realstatus = 'Активный';
                        }
                        else
                        {
                            $realstatus = 'Неактивный';
                        }
                        echo "<img class='status' title='".$realstatus."' width='13' src='".base_url()."img/status_".$item['id_status'].".png'/><a href='#' style='border-bottom:1px dashed #137171; color: #137171;'>".$item['prize_name']."</a><br />";    
                        endforeach;
                        }
                        else
                        {
                        echo "Нет бронзовых призов";    
                        }
                        ?>
                </div>
</div>
</div>
</div>
</div>
</div>
    
    <div style="padding: 0 0 0 10px; float: left;">
    <div class="round" style="background: #FBFDFD; width: 233px; height: 180px; float: left; padding: 5px 0 0 3px; border: 1px solid #80A7A6;">
<div class="clear">
<div style="float: left;"><img src="<?=base_url();?>img/coin.png" width="30"/></div>
<div style="float: left; padding-top: 7px;">
<div id="test-webkit" class="content scroll-simple scroll-simple_outer" >
<div class="resizable" style="padding: 3px 10px 3px 3px;">
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
</div>
    
    
    </div>
    </div>
  
</form>      

</div>
<div class="clear mymarg"></div>