<!-- CONTENT -->
<div id="themain">
<div id="content">

<div id="center">
<h2>������ ��������� ��� ���������</h2>

<table border=1>
<tr>
<td>������������ ������</td><td>������ ������</td>
</tr>
<?php foreach ($pages_list as $item):?>
<tr>
<td style="text-align:left"><a href = "<?=base_url()."products/edit/$item[id_product]";?>"><?="$item[product]";?></a></td><td><?="$item[group]"; ?></td>
</tr>
<?php endforeach;?>
</table>
</form>
</div>