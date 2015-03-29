<!-- CONTENT -->
<div id="themain">
<div id="content">

<div id="center">
<h2>Удалить продукт</h2>

<form action = "<?=base_url();?>products/delete" method="post">  

<?php foreach ($pages_list as $item): ?>

<p><?="<input name='id_product' type='radio' value='$item[id_product]'>$item[product]";?> -  <u><?="$item[group]"; ?></u> </p>

<?php endforeach;?>

<p><input type = "submit" name = "delete_button" value = "Удалить продукт"></p>

</form>



</div>