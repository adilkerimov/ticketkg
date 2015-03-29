<!-- CONTENT -->
<div id="container">
<div id="rightcolumn">
<div id="rightnav"  class="droplist">
<div id="rightnavhead">
<p class="strong"><img src="/img/list.png" width="8"/>&nbsp;&nbsp;АДМИНИСТРИРОВАНИЕ</p>
</div>
<ul class="menus">
<?php foreach($menu_first as $item):?>
<a href=""><li><?=$item['menu'];?><div class="table_block radius_under none" id="menu">
<table>
<tr><td></td><td>
<dl>
<?php $second_menu = $this->items_model->get_menu_admin2($item['id_menu']); ?>
<?php foreach($second_menu as $second):?>
<dt><?=$second['menu'];?></dt>
<?php $third_menu = $this->items_model->get_menu_admin3($second['id_menu']); ?>
<?php foreach($third_menu as $third):?>
<dd><a href="<?=base_url();?><?=$third['link'];?>"><?=$third['menu'];?></a></dd>
<?php endforeach; ?>
<?php endforeach; ?>
</dl>
</td></tr>
</table>
</div></li></a>
<?php endforeach; ?>
</ul>
</div>
</div>
<div id="content_block">
<div id="center">
<br />
<h2>Создание набора характеристик</h2>
<?php 
if (isset($_POST['add_button']))      
    {
        if(isset($info))
        {
        echo "<span class='info radius'>'".$info."'</span><br />";    
        }
}
?>
<form action="<?=base_url()."specifications/add";?>" method="post" class="clear" enctype="multipart/form-data">
<?=form_error('specific_name');?><div class="clear"></div>
<?php if(form_error('id_specification0'))
{
    echo '<span class="error radius">По крайней мере одна характеристика должна быть добавлена.</span>';
    
}

;?><div class="clear"></div>
<?=form_error('date');?><div class="clear"></div>
<br />
<input type="text" name="specific_name" style="width:300px"/> Наименование набора характеристик<br /><br />
<dl>
<?php $specific_groups = $this->specifications_model->get_specific_groups(); ?>
<?php foreach($specific_groups as $spec_groups):?>
<dt><?=$spec_groups['specific_group'];?></dt>
<?php $specific_items = $this->specific_items_model->get_specific_items($spec_groups['id_specific']);?>
<div>
<div class="add_item radius">Добавить спецификацию</div><div class="clear"></div>
<div class="select none">
<select>
<option disabled selected>Выберите характеристику</option>
<?php foreach($specific_items as $item):?>
<dd><option value="<?=$item['id_specific_items'];?>"><?=$item['specific_item'];?></option></dd>
<?php endforeach; ?>
</select><br /><br />
</div>
</div>
<?php endforeach; ?>
</dl>
<input type="hidden" name="date" value="<? $date = date ("Y-m-d H-i-s"); echo $date;?>"/>
<input type="hidden" name="counter" id="counter"/>
<?php 
if(isset($error))
{
echo $error;    
}
?>
<input type="submit" name="add_button" class="radius" value="Создать"/><br /><br />
</form>
<br /><br />
</div>
</div>
</div>
<div class="clear"></div>