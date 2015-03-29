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
<h2>Изменить продукт</h2>

<form action="<?=base_url()."products/update/$id_product";?>" method="post" enctype="multipart/form-data">

<input type="text" name="product" value="<?=set_value('product', $product);?>" style="width:300px"/> Наименование<br /><br /><?=form_error('product');?>
<?php 
$options_meas = array(
                  'кг'   => 'кг',
                  'литр' => 'л',
                  'шт'   => 'шт',
                  'пуч'  => 'пуч'
                );
echo form_dropdown('measure', $options_meas, $measure);
?> Ед. измерения<br /><br /><?=form_error('measure');?>
<input type="text" name="cost" value="<?=set_value('cost', $cost);?>" /> Стоимость покупки<br /><br /><?=form_error('cost');?>
<input type="text" name="cost_sell" value="<?=set_value('cost_sell', $cost_sell);?>" /> Стоимость продажи<br /><br /><?=form_error('cost_sell');?>
<?php 
$options = array(
                  '1'  => 'Овощи',
                  '2'  => 'Фрукты',
                  '3'  => 'Сухофрукты',
                  '4'  => 'Мясо',
                  '5'  => 'Зелень',
                  '6'  => 'Бакалея',
                  '7'  => 'Грибы',
                  '8'  => 'Птица',
/**
 *                   '9'  => 'Колбасные',
 *                   '10'  => 'Масло',
 *                   '11'  => 'Крупы',
 *                   '12'  => 'Мука',
 *                   '13'  => 'Макароны',
 *                   '14'  => 'Приправы',
 *                   '15'  => 'Консервы',
 *                   '16'  => 'Соль, сахар, яйцо',
 *                   '17'  => 'Печенье',
 *                   '18'  => 'Шампуни, Кондиционеры, Гели для душа',
 *                   '19'  => 'Мыло',
 *                   '20'  => 'Для стирки и ухода',
 *                   '21'  => 'Зубные пасты, щетки',
 *                   '22'  => 'Для бритья',
 *                   '23'  => 'Для мытья посуды',
 *                   '24'  => 'Освежители воздуха',
 *                   '25'  => 'Прокладки, подгузники, салфетки',
 */
                );
echo form_dropdown('group', $options, $group);
?> Группа<br /><br /><?=form_error('group');?>
<input type="text" name="date" value="<? $date = date ("Y-m-d"); echo $date;?>"/> Дата<br /><br />
<?php 
if($imgfile)
{
    echo '<input type="hidden" name="imgfile" value="'.set_value('imgfile', $imgfile).'" style="width:300px"/> <strong>Путь к файлу:</strong> http://snabjenec.kg/img/products/'.$imgfile.' <br /><br /><img src="http://snabjenec.kg/img/products/'.$imgfile.'" /><br /><br /><input type="hidden" name="is_file"/>';
}
else
{
    echo 'Нет изображения для отображения<br /><br /><input type="checkbox" name="usersfile" checked="checked"/> Загрузить изображение?<br /><br /><input type="file" name="userfile" size="20" /><br /><br /><input type="hidden" name="is_file" value="1"/>';
    
}
?>
<?php echo $error;?>
<input type="text" name="madein" value="<?=set_value('madein', $madein);?>"/> Производитель <br /><br />
<textarea name="descrip" cols="80" rows="6"><?=set_value('descrip', $descrip);?></textarea> Описание <br /><br />
<input type="submit" name="update_button" value="Изменить продукт"/>
</form>
<br /><br />
</div>
</div>
</div>
<div class="clear"></div>