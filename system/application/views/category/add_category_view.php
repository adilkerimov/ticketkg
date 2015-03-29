<!-- CONTAINER -->
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
<p class="strong">Добавить категорию</p>
<?=form_error('menu');?>
<?=form_error('link');?>
<?php echo form_open("category/add_category");?><br />
<p style="float: left; clear: both; margin: 15px 0 15px 0;">
    <?php echo form_input($menu);?> Наименование категории<br /><br />
    <?php echo form_input($link);?> Короткое имя на латинице<br />
</p><br /><br />

<p style="float: left; clear: both; margin: 15px 0 15px 0;"><?php $attributes = 'class = "buy radius"'; echo form_submit('my_button', 'Добавить категорию', $attributes);?></p>


<?php echo form_close();?>

<br /><br />
</div>
</div>
</div>
<div class="clear"></div>