<!-- CONTAINER -->
<div id="content" class="row">
<div id="featured" class="col-xs-12 col-sm-4 col-md-3 col-lg-3">

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
</td>
</tr>
</table>
</div></li></a>
<?php endforeach; ?>
</ul>
</div>

</div>

<div id="sidebar" class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

<div id="content_block">
<div id="center">
<br />
<h2>Добавить представление</h2>
<?php 
if (isset($_POST['add_button']))      
    {
        if(isset($info))
        {
        echo "<span class='info radius'>'".$info."'</span><br />";    
        }
}
?>
<form action="<?=base_url()."items/add";?>" method="post" class="clear" enctype="multipart/form-data">
<?=form_error('item_name');?><div class="clear"></div>
<?=form_error('id_measure');?><div class="clear"></div>
<?=form_error('cost');?><div class="clear"></div>
<?=form_error('id_category');?><div class="clear"></div>
<?=form_error('id_second_menu');?><div class="clear"></div>
<?=form_error('id_third_menu');?><div class="clear"></div>
<br />
<input type="text" name="item_name" style="width:300px"/> Наименование<br /><br />
<input type="text" name="cost"/> Стоимость<br /><br />
<select name="id_category">
<option disabled selected>Выберите категорию</option>
<?php $category = $this->category_model->get_category(); ?>
<?php foreach($category as $item):?>
<option value="<?=$item['id_menu'];?>"><?=$item['menu'];?></option>
<?php endforeach;?>
</select><br /><br />
<select name="id_second_menu">
<option disabled selected>Выберите учреждение</option>
<?php $category = $this->category_model->get_second_menu(); ?>
<?php foreach($category as $item):?>
<option value="<?=$item['id_menu'];?>"><?=$item['menu'];?></option>
<?php endforeach;?>
</select><br /><br />
<select name="id_third_menu">
<option disabled selected>Выберите жанр (категорию)</option>
<?php $category = $this->category_model->get_third_menu(); ?>
<?php foreach($category as $item):?>
<option value="<?=$item['id_menu'];?>"><?=$item['menu'];?></option>
<?php endforeach;?>
</select><br /><br />


<input type="hidden" name="create_date" value="<? $date = date ("Y-m-d H-i-s"); echo $date;?>"/> 
<?php 
    echo 'Нет изображения для отображения<br /><br /><input type="checkbox" name="usersfile" checked="checked"/> Загрузить изображение?<br /><br /><input type="file" name="userfile" size="20" /><br /><br /><input type="hidden" name="is_file" value="1"/>';
?>
<?php 
if(isset($error))
{
echo $error;    
}
?>
<input type="text" name="madein" value=""/> Производитель <br /><br />
<textarea name="descrip" cols="80" rows="6"></textarea> Описание <br /><br />
<input type="submit" name="add_button" class="radius" value="Добавить"/><br /><br />
</form>
<br /><br />
</div>
</div>
</div>

</div>
</div>