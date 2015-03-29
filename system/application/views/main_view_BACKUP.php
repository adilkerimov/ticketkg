<!-- CONTAINER -->
<div id="container">

<div id="rightcolumn">
<div id="rightnav"  class="droplist">
<div id="rightnavhead">
<p class="strong">КАТАЛОГ ТОВАРОВ</p>
</div>
<ul class="menus">
<a href=""><li>Продукты питания<div class="table_block radius_under none" id="menu">
<table>
<tr>
<td>
</td>
<td>
<dl>
<dt>Растительность</dt>
<dd>Овощи</dd>
<dd>Фрукты</dd>
<dd>Зелень</dd>
<dt>Бакалея</dt>
<dd>Масло</dd>
<dd>Крупы</dd>
<dd>Консервы</dd>
<dt>Напитки</dt>
<dd>Алкогольные</dd>
<dd>Безалкогольные</dd>
<dd>Натуральные</dd>
</dl>
</td>
</tr>
</table>
</div></li></a>
<a href=""><li>Косметика и гигиена<div class="table_block radius_under none" id="menu">
<table>
<tr>
<td>
</td>
<td>
<dl>
<dt>Телевизоры, аудио, видео</dt>
<dd>Телевизоры</dd>
<dd>ДВД</dd>
<dd>Блю-рей</dd>
<dt>Аксессуары</dt>
<dd>Антенны</dd>
<dd>Кабели</dd>
<dd>Кронштейны</dd>

</dl>
</td>
</tr>
</table>
</div></li></a>
<a href=""><li>Стирка и уход за бельем<div class="table_block radius_under none" id="menu">
<table>
<tr>
<td>
</td>
<td>
<dl>
<dt></dt>
<dd></dd>
<dd></dd>
<dd></dd>
<dt></dt>
<dd></dd>
<dd></dd>
<dd></dd>

</dl>
</td>
</tr>
</table>
</div></li></a>
<a href=""><li>Уборка и уход за домом</li></a>
<a href=""><li>Дом, интерьер, кухня</li></a>
<a href=""><li>Цветы и растения</li></a>
<a href=""><li>Зоомагазин</li></a>
<a href=""><li>Товары для мам</li></a>
<a href=""><li>Товары для детей</li></a>
<a href=""><li>Игры и игрушки</li></a>
<a href=""><li>Творчество, хобби, развлечения</li></a>
<a href=""><li>Товары для праздника</li></a>
<a href=""><li>Бытовая техника и элекроника</li></a>
<a href=""><li>Книги и журналы</li></a>
<a href=""><li>Канцтовары</li></a>
<a href=""><li>Одежда, обувь, аксессуары</li></a>
<a href=""><li>Оптика</li></a>
<!--
<a href=""><li>Отдых, кемпинг, путешествия</li></a>
<a href=""><li>Товары для автолюбителей</li></a>
<a href=""><li>Товары для дачи, сада, огорода</li></a>
<a href=""><li>Товары для ремонта</li></a>
<a href=""><li>Спорт и фитнес</li></a>
-->
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
<!--
<div id="banner" class="radius">
<div id="owl-demo2" class="owl-carousel">
<div class="item"><img src="img/assets/fullimage1.jpg" alt="The Last of us"></div>
<div class="item"><img src="img/assets/fullimage2.jpg" alt="GTA V"></div>
<div class="item"><img src="img/assets/fullimage3.jpg" alt="Mirror Edge"></div>
</div>
</div>
-->
<div id="separat_new">
<div id="title_new" class="green"><p>Новинки</p></div>
<svg class="left" width="15" height="22">
<polygon points="0,20 0,0 15,10" fill="#5DA100"  />
</svg>
<svg class="left" width="650" height="20">
    <line x1="700" y1="10" x2="5" y2="10" stroke="#D3D3D3" stroke-width="1" />
</svg>
</div>
<?php foreach($items as $item):?>
<div class="item_1 radius">
<svg class="item_mark" width="95" height="22">
<polygon points="0,0 80,0 95,10 80,20 0,20" fill="#5DA100"/>
<text x="10" y="13" fill="#fff" style="font-size: 12px;">Новинки</text>  
</svg>
<img src="<?=base_url();?><?=$item['item_img'];?>" width="150"/><br />
<?//=$item['id_item'];?><br />
<?=$item['item_name'];?><br />
Цена за шт. <?=$item['cost'];?> сом<br /><br />
<div style='width:100px; height:30px; overflow:hidden; float:left;'>
<div class='js_down amdown'>-</div>
<input class='js_amount orderamount' id='amount1' value="1"/>
<div class='js_up amup'>+</div>
</div>
</div>
<?php endforeach; ?>
<div class="clear"></div>
<div id="separat_new">
<div id="title_new" class="blue"><p>Хит продаж</p></div>
<svg class="left" width="15" height="22">
<polygon points="0,20 0,0 15,10" fill="#3F48CC"  />
</svg>
<svg class="left" width="650" height="20">
    <line x1="700" y1="10" x2="5" y2="10" stroke="#D3D3D3" stroke-width="1" />
</svg>
</div>
<?php foreach($items as $item):?>
<div class="item_1 radius">
<svg class="item_mark" width="95" height="22">
<polygon points="0,0 80,0 95,10 80,20 0,20" fill="#3F48CC"/>
<text x="7" y="13" fill="#fff" style="font-size: 11px;">Хит продаж</text>  
</svg>
<img src="<?=base_url();?><?=$item['item_img'];?>" width="150"/><br />
<?//=$item['id_item'];?><br />
<?=$item['item_name'];?><br />
Цена за шт. <?=$item['cost'];?> сом<br /><br />
<div style='width:100px; height:30px; overflow:hidden; float:left;'>
<div class='js_down amdown'>-</div>
<input class='js_amount orderamount' id='amount1' value="1"/>
<div class='js_up amup'>+</div>
</div>
</div>
<?php endforeach; ?>
<div class="clear"></div>
<div id="separat_new">
<div id="title_new" class="red"><p>Распродажи</p></div>
<svg class="left" width="15" height="22">
<polygon points="0,20 0,0 15,10" fill="#ED1C24"  />
</svg>
<svg class="left" width="650" height="20">
    <line x1="700" y1="10" x2="5" y2="10" stroke="#D3D3D3" stroke-width="1" />
</svg>
</div>
<?php foreach($items as $item):?>
<div class="item_1 radius">
<svg class="item_mark" width="95" height="22">
<polygon points="0,0 80,0 95,10 80,20 0,20" fill="#ED1C24"/>
<text x="5" y="13" fill="#fff" style="font-size: 11px;">Распродажи</text>  
</svg>
<img src="<?=base_url();?><?=$item['item_img'];?>" width="150"/><br />
<?//=$item['id_item'];?><br />
<?=$item['item_name'];?><br />
Цена за шт. <?=$item['cost'];?> сом<br /><br />
<div style='width:100px; height:30px; overflow:hidden; float:left;'>
<div class='js_down amdown'>-</div>
<input class='js_amount orderamount' id='amount1' value="1"/>
<div class='js_up amup'>+</div>
</div>
</div>
<?php endforeach; ?>
<br /><br />
</div>
</div>
</div>
<div class="clear"></div>