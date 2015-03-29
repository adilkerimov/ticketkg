    <div class="clear"></div>
<br />
	<h1>Менеджерский раздел компании <span style="color: #137171; border-bottom: 1px dashed #137171;">
        <?php 
        $name = $rozygr['id_company'];
        $comp_name = $this->prizes_model->get_comp($name);
        echo $comp_name['company'];?></span></h1>
      
<div class="clear mymarg"></div>
    <div class="window">
    
    <div style="width: 1000px; float: left; height: auto; padding:0 0 10px 0;">
    <div style="margin: 0 auto; text-align: center; color: #137171; font-size: 15px; font-weight: bold;">
    Статистика страницы розыгрыша - "<?=$rozygr['rozyg_title'];?>"  
    </div>
<br />
<table class="stats round_s">
<tr>
<td><strong>№</strong></td>
<td><strong>Дата</strong></td>
<td><strong>Попыток</strong></td>
<td><strong>Пользователей</strong></td>
<td><strong>Разыграно денег</strong></td>
<td><strong>Разыграно призов</strong></td>
<td><strong>Использовано из бюджета</strong></td>
<td><strong>Остаток бюджета</strong></td>
</tr>
<?php $i = 1; 
$budget_count = $rozygr['budget'];

?>
<?php 
$data['id'] = $rozygr['id_rozygr'];
foreach ($main_click as $item):
$data['date'] = $item['date_click'];
$county = $this->manager_model->click_per_day($data);
$users = $this->manager_model->user_per_day($data);
$users_all = $this->manager_model->user_per_rozyg($data);
$used_budget = $county['click_count']*30/1000;
?>

<tr>
<td><?=$i?></td>
<td><?=$item['date_click'];?></td>
<td><?=$county['click_count'];?></td>
<td><?=$users;?></td>
<td></td>
<td></td>
<td><?=$used_budget;?></td>
<td><?=$budget_count;?></td>
</tr>

<?php 
$i = $i+1; 
$budget_count = $budget_count - $used_budget;
?>
<?php endforeach;?>

</table>
<br />
<strong style="color: #137171;">Уникальные пользователи за все время:</strong> <?=$users_all;?>





  

    </div>
    <div style="width: 980px; height: 200px; float: left; border-top: 0px dashed #074343; padding: 5px 0 5px 0;">
    
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
                        echo "<img class='status' title='Активный' width='13' src='".base_url()."img/status_".$item['id_status'].".png'/><a href='#' style='border-bottom:1px dashed #137171; color: #137171;'>".$item['prize_name']."</a><br />";    
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
                        echo "<img class='status' title='Активный' width='13' src='".base_url()."img/status_".$item['id_status'].".png'/><a href='#' style='border-bottom:1px dashed #137171; color: #137171;'>".$item['prize_name']."</a><br />";    
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
                        echo "<img class='status' title='Активный' width='13' src='".base_url()."img/status_".$item['id_status'].".png'/><a href='#' style='border-bottom:1px dashed #137171; color: #137171;'>".$item['prize_name']."</a><br />";    
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