<!-- CONTAINER -->
<div id="container">

<div id="rightcolumn">
<div id="rightnav"  class="droplist">
<div id="rightnavhead">
<p class="strong"><img src="/img/list.png" width="8"/>&nbsp;&nbsp;КАТАЛОГ ТОВАРОВ</p>
</div>
<ul class="menus">
<?php foreach($menu_first as $item):?>
<a href="<?=base_url();?>catalog/<?=$item['link'];?>"><li><?=$item['menu'];?><div class="table_block radius_under none" id="menu">
<table>
<tr><td></td><td>
<dl>
<?php $second_menu = $this->items_model->get_menu_second($item['id_menu']); ?>
<?php foreach($second_menu as $second):?>
<dt><a href="<?=base_url();?>catalog/<?=$item['link'];?>/<?=$second['link'];?>"><?=$second['menu'];?></a></dt>
<?php $third_menu = $this->items_model->get_menu_third($second['id_menu']); ?>
<?php foreach($third_menu as $third):?>
<dd><a href="<?=base_url();?>catalog/<?=$item['link'];?>/<?=$second['link'];?>/<?=$third['link'];?>"><?=$third['menu'];?></a></dd>
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
<div id="banner" class="radius">
<div id="owl-demo" class="owl-carousel">
<div class="item"><img src="<?=base_url();?>img/assets/fullimage1.jpg" alt="The Last of us"></div>
<div class="item"><img src="<?=base_url();?>img/assets/fullimage2.jpg" alt="GTA V"></div>
<div class="item"><img src="<?=base_url();?>img/assets/fullimage3.jpg" alt="Mirror Edge"></div>
</div>
</div>
<div style="position: relative;"><br />
<?php foreach($items as $item):?>
<div class="item_1 radius">
    <svg class="item_mark" width="95" height="22">
    <polygon points="0,0 80,0 95,10 80,20 0,20" fill="#5DA100"/>
    <text x="10" y="13" fill="#fff" style="font-size: 12px;">Новинки</text>  
    </svg>
    <img src="<?=base_url();?>img/items/<?=$item['item_img'];?>" width="150"/><br /><br />
    <?=$item['item_name'];?><br />
    <div class="item_price">
    Цена за шт: <span><?=$item['cost'];?> сом</span>
    </div>
    <br />
<div class="item_add">
<div class="quant_form">
<div class='js_down amdown'>-</div>
<input class='js_amount orderamount' id='amount<?=$item['id_item'];?>' value="1"/>
<div class='js_up amup'>+</div>
</div>
<div class="js_cart" id="<?=$item['id_item'];?>"><a href="" class="buy radius" id="<?=$item['id_item'];?>">В корзину</a></div>
</div>
</div>
<?php endforeach; ?>

</div>
<div class="clear"><br /></div>



<div class="clear"><br /></div>


<br /><br />
</div>
</div>
</div>
<div class="clear"></div>
<div id="cart_content"></div>