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
<div class="item"><img src="img/assets/fullimage1.jpg" alt="The Last of us"></div>
<div class="item"><img src="img/assets/fullimage2.jpg" alt="GTA V"></div>
<div class="item"><img src="img/assets/fullimage3.jpg" alt="Mirror Edge"></div>
</div>
</div>
<div id="separat_new">
<div id="title_new" class="green"><p>Новинки</p></div>
<svg class="left" width="15" height="22">
<polygon points="0,20 0,0 15,10" fill="#5DA100"  />
</svg>
<svg class="left" width="557" height="20">
    <line x1="700" y1="10" x2="5" y2="10" stroke="#D3D3D3" stroke-width="1" />
</svg>
<div class="all_div"><a class="all" href="">Показать все</a></div>
</div>
<div style="position: relative;">
<div id="slider1" class="owl-carousel owl-theme">
<?php foreach($items as $item):?>
<div class="item_1 radius">
    <svg class="item_mark" width="95" height="22">
    <polygon points="0,0 80,0 95,10 80,20 0,20" fill="#5DA100"/>
    <text x="10" y="13" fill="#fff" style="font-size: 12px;">Новинки</text>  
    </svg>
    <img src="<?=base_url();?>img/items/<?=$item['item_img'];?>" class="imagess"/><br />
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
<div class="customNavigation">
  <a class="btn prev" id="prev"><svg class="prev_svg" height="35px" width="30px" id="Layer_1" style="enable-background:new 0 0 35 35;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 "/></svg></a>
  <a class="btn next" id="next"><svg class="next_svg" height="35px" width="30px" id="Layer_1" style="enable-background:new 0 0 35 35;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="160,115.4 180.7,96 352,256 180.7,416 160,396.7 310.5,256 "/></svg></a>
</div>
</div>
<div class="clear"></div>
<div id="separat_new">
<div id="title_new" class="blue"><p>Хит продаж</p></div>
<svg class="left" width="15" height="22">
<polygon points="0,20 0,0 15,10" fill="#3F48CC"  />
</svg>
<svg class="left" width="557" height="20">
    <line x1="700" y1="10" x2="5" y2="10" stroke="#D3D3D3" stroke-width="1" />
</svg>
<div class="all_div"><a class="all" href="">Показать все</a></div>
</div>
<div style="position: relative;">
<div id="slider2" class="owl-carousel owl-theme">
<?php foreach($items as $item):?>
<div class="item_1 radius">
    <svg class="item_mark" width="95" height="22">
    <polygon points="0,0 80,0 95,10 80,20 0,20" fill="#3F48CC"/>
    <text x="7" y="13" fill="#fff" style="font-size: 11px;">Хит продаж</text>  
    </svg>
    <img src="<?=base_url();?>img/items/<?=$item['item_img'];?>" height="150"/><br />
    <?//=$item['id_item'];?><br />
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
<div class="customNavigation">
  <a class="btn prev" id="prev2"><svg class="prev_svg" height="35px" width="30px" id="Layer_1" style="enable-background:new 0 0 35 35;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 "/></svg></a>
  <a class="btn next" id="next2"><svg class="next_svg" height="35px" width="30px" id="Layer_1" style="enable-background:new 0 0 35 35;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="160,115.4 180.7,96 352,256 180.7,416 160,396.7 310.5,256 "/></svg></a>
</div>
</div>
<div class="clear"></div>
<div id="separat_new">
<div id="title_new" class="red"><p>Распродажи</p></div>
<svg class="left" width="15" height="22">
<polygon points="0,20 0,0 15,10" fill="#ED1C24"  />
</svg>
<svg class="left" width="557" height="20">
    <line x1="700" y1="10" x2="5" y2="10" stroke="#D3D3D3" stroke-width="1" />
</svg>
<div class="all_div"><a class="all" href="">Показать все</a></div>
</div>
<div style="position: relative;">
<div id="slider3" class="owl-carousel owl-theme">
<?php foreach($items as $item):?>
<div class="item_1 radius">
    <svg class="item_mark" width="95" height="22">
    <polygon points="0,0 80,0 95,10 80,20 0,20" fill="#ED1C24"/>
    <text x="7" y="13" fill="#fff" style="font-size: 11px;">Хит продаж</text>  
    </svg>
    <img src="<?=base_url();?>img/items/<?=$item['item_img'];?>" height="150"/><br />
    <?//=$item['id_item'];?><br />
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
<div class="customNavigation">
  <a class="btn prev" id="prev3"><svg class="prev_svg" height="35px" width="30px" id="Layer_1" style="enable-background:new 0 0 35 35;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 "/></svg></a>
  <a class="btn next" id="next3"><svg class="next_svg" height="35px" width="30px" id="Layer_1" style="enable-background:new 0 0 35 35;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="160,115.4 180.7,96 352,256 180.7,416 160,396.7 310.5,256 "/></svg></a>
</div>
</div>
<br /><br />
</div>
</div>
</div>
<div class="clear"></div>
<div id="cart_content"></div>