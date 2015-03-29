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
<h2>Добавление отдельных характеристик</h2>
<?php 
if (isset($_POST['add_button']))      
    {
        if(isset($info))
        {
        echo "<span class='info radius'>'".$info."'</span><br />";    
        }
}
?>
<form action="<?=base_url()."specifications/items_add";?>" method="post" class="clear" enctype="multipart/form-data">
<?=form_error('specific_item');?><div class="clear"></div>
<?=form_error('bind');?><div class="clear"></div>
<br />
<input type="text" name="specific_item" style="width:300px"/> Наименование характеристики<br /><br />
<select name="bind">
<option disabled selected>Выберите категорию</option>
<?php $specific_groups = $this->specifications_model->get_specific_groups(); ?>
<?php foreach($specific_groups as $spec_groups):?>
<option value="<?=$spec_groups['id_specific'];?>"><?=$spec_groups['specific_group'];?></option>
<?php endforeach;?>
</select> Связка с группой спецификаций<br /><br />
<input type="hidden" name="status" value="1"/>
<input type="hidden" name="date" value="<? $date = date ("Y-m-d H-i-s"); echo $date;?>"/> 

<?php 
if(isset($error))
{
echo $error;    
}
?>
<input type="submit" name="add_button" class="radius" value="Добавить"/><br /><br />
</form>
<br /><br />
</div>
</div>
</div>
<div class="clear"></div>