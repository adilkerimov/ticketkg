<ul class="products">
	<?php foreach($conditer as $p): ?>
	<li>
		<h3><?php echo $p['product']; ?></h3>
		
		<small>&euro;<?php echo $p['cost']; ?></small>
		<?php echo form_open('products/add_cart_item'); ?>
			<fieldset>
				<label>Quantity</label>
				<?php echo form_input('quantity', '6', 'maxlength="2"'); ?>
				<?php echo form_hidden('product_id', $p['id_product']); ?>
				<?php echo form_submit('add', 'Add'); ?>
			</fieldset>
		<?php echo form_close(); ?>
	</li>
	<?php endforeach;?>
</ul>
