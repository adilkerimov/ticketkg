<!-- CONTENT -->
<div id="themain">
<div id="content">

<div id="center">
<h2>Список продуктов для изменения</h2>

<table border=1>
<tr>
<td>Наименование товара</td><td>Группа товара</td>
</tr>
<?php foreach ($pages_list as $item):?>
<tr>
<td style="text-align:left"><a href = "<?=base_url()."products/edit/$item[id_product]";?>"><?="$item[product]";?></a></td><td><?="$item[group]"; ?></td>
</tr>
<?php endforeach;?>
</table>
</form>
</div>