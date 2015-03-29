<div class="clear"></div>
<div style="width: 980px; margin: 0 auto; border: 1px dashed #074343; padding: 10px 10px; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; ">
<h4 style="margin: 2px 0 10px 0; padding:0"><span style="font-size: 22px; padding-right: 3px;"></span><?=$main_info['title'];?></h4>
<div  class="clear">
<table class="event round">
<?php foreach ($all_user_prizes as $item):?>
<?php 
$company = $this->prizes_model->get_comp($item['id_company']);
$get_user = $this->prizes_model->get_user($item['id_user']);
$get_category = $this->prizes_model->get_category($item['prize_group']); 
?>
<tr>
<td width="135">
[<?=$item['win_date']?>]
</td>
<td>
<?php 
$email_fix = substr_replace($get_user['email'], '*****', 3);
$domain = strstr($get_user['email'], '@');
?>
<span style="float: left;">Пользователь <strong><?=$email_fix.$domain?></strong>&nbsp;&nbsp;выиграл&nbsp;&nbsp;</span><img width="20" style="float: left;" title="<?=$get_category['prize_group']?>" src="<?=base_url()?>img/<?=$get_category['group_img']?>" /> <strong><?=$item['prize_name']?></strong>&nbsp;&nbsp;от компании <strong><?=$company['company']?></strong>
</td>
</tr>
<?php endforeach;?>
</table>
<?=$page_nav;?>   
</div>
</div>