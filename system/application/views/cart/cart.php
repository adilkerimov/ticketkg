<?php if(!$this->cart->contents()):
	echo '<a href="">Корзина</a><br />Пусто';
else:
?>
<?php foreach($this->cart->contents() as $items): ?>
	  	<div class="quantitie" style="display: none;"><?php echo $items['qty']; ?></div>	  		
<?php endforeach; ?>

<div style="display: none;" class="quantity"></div>
<script type="text/javascript">
		$(document).ready(function(){
		var sum = 0;
		$('.quantitie').each(function() {
		sum += parseFloat($(this).text());
		return sum;
  		});
		var endsum = sum.toFixed(0)
		$('#quanty').text(endsum);
});
		</script>
<a href="">Корзина</a><br /><?php echo $this->cart->format_number($this->cart->total()); ?> сом <div id="quanty" class="count radius"></div>
<?php 
endif;
?>