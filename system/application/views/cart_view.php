<!-- CONTAINER -->
<div id="stripe">
<div id="container" class="stripe_in">
<h1>Ваша корзина</h1>
</div>
</div>
<div id="container">
<form method="post" action="<?=base_url();?>cart">
<div class="main_row">
<div class="cart_img"></div>
<div class="cart_name">Наименование</div>
<div class="cart_price">Цена</div>
<div class="cart_quant">Количество</div>
<div class="cart_sum">Сумма</div>
<div class="cart_del"></div>
</div>
<?php $i = 1; ?>
<?php foreach($this->cart->contents() as $items): ?>
<div class="simple_row radius clear">
<div class="cart_img"><img src="<?=base_url();?>img/items/item_blue.jpg" height="70"/><?=$items['id'];?></div>
<div class="cart_name"><?=$items['name'];?></div>
<div class="cart_price"><h3><?php echo $this->cart->format_number($items['price']);?> сом</h3></div>
<div class="cart_quant">
<div class="quant_form_cart">
<div class='js_down amdown'>-</div>
<input class='js_amount orderamount' id='amount<?=$items['id'];?>' value="<?=$items['qty'];?>"/>
<div class='js_up amup'>+</div>
</div>
</div>
<div class="cart_sum"><h3><?php echo $this->cart->format_number($items['subtotal']);?> сом</h3></div>
<div class="cart_del">X</div>
</div>
    <input type='hidden' name='id_product<?php echo $i; ?>' value='<?php echo $items['id']; ?>' />
    <input type='hidden' name='quantity<?php echo $i; ?>' value='<?php echo $items['qty']; ?>' id='quantity_ch<?php echo $items['id']; ?>'/>
	<input type='hidden' name='product_cost<?php echo $i; ?>' value='<?php echo $this->cart->format_number($items['price']); ?>'/>
	<input type='hidden' name='order_cost<?php echo $i; ?>' value='<?php echo $this->cart->format_number($items['subtotal']); ?>' id='sum_ch<?php echo $items['id']; ?>'/>
	<input type='hidden' name='productname<?php echo $i; ?>' value='<?php echo $items['name']; ?>'/>
<?php $i++; ?>
<?php endforeach; ?>
<br /><br />
<div id="ways" class="radius">
Способ получения заказа:<br />
<label><input type="radio" name="how" value="1"/>Самовывоз</label>
<label><input type="radio" name="how" value="2"/>Доставка</label>
</div>
<div id="totals">
Стоимость товара: <span class="green_text" id="totalcost"><?php echo $this->cart->format_number($this->cart->total());?></span>сом<br />
Стоимость доставки: <span class="green_text" id="delivery">150</span>сом<br />
Скидка на сумму: <span class="green_text" id="discount">500</span>сом<br />
Итого: <span class="green_text" id="total"></span>сом<br />
<br />
<input type="hidden" name="quantity_ord" id="totalquantity" /> 
<input type="hidden" name="date" value="<? $date = date ("Y-m-d H:i:s"); echo $date;?>"/>
<input type="hidden" name="summ" value="<?php echo $this->cart->format_number($this->cart->total());?>"/>
<input type='hidden' name='counter' id="counter" value="<?php echo $this->cart->format_number($this->cart->total_items()); ?>"/>
<input type="hidden" name="pincode" value="<?php echo mt_rand(1, 9); echo mt_rand(1, 9); echo mt_rand(1, 9); echo mt_rand(1, 9);?>" />

<h5>Введите свои данные</h5>
<?=form_error('fio');?>
<?=form_error('contact');?>
<?=form_error('address');?>
<br />
<label><input type="text" name="fio" class="radius"/> Имя<span class="kovych"></span></label>
<br/>
<label><input type="text" name="contact" class="radius"/> Контакты<span class="kovych"></span></label>
<br/>
<label><input type="text" name="address" class="radius"/> Адрес доставки<span class="kovych"></span></label>
<input type="hidden" name="pincode" value="<?php echo mt_rand(1, 9); echo mt_rand(1, 9); echo mt_rand(1, 9); echo mt_rand(1, 9) . "\n";?>" />
Дополнительная информация <br/>
<textarea class="wide" rows="2" name="dopinfo" class="radius" placeholder="" onfocus="placeholder='';" onblur="placeholder='';" ></textarea>
<br />
<input type="submit" class="radius" name="add_button" value="Оформить заказ"/>
</form>
</div>
</div>
<div class="clear"></div><br /><br />
