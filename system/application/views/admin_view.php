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



<div id="separat_new">
<div id="title_new" class="green"><p>Новинки</p></div>
<svg class="left" width="15" height="22">
<polygon points="0,20 0,0 15,10" fill="#5DA100"  />
</svg>
<svg class="left" width="557" height="20">
    <line x1="700" y1="10" x2="5" y2="10" stroke="#D3D3D3" stroke-width="1" />
</svg>
<div class="all_div"><a class="all" href="">Показать все</a></div>
</div><div class="clear"></div>

<div id="separat_new">
<div id="title_new" class="blue"><p>Хит продаж</p></div>
<svg class="left" width="15" height="22">
<polygon points="0,20 0,0 15,10" fill="#3F48CC"  />
</svg>
<svg class="left" width="557" height="20">
    <line x1="700" y1="10" x2="5" y2="10" stroke="#D3D3D3" stroke-width="1" />
</svg>
<div class="all_div"><a class="all" href="">Показать все</a></div>
</div><div class="clear"></div>

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

<br /><br />
</div>
</div>
</div>
<div class="clear"></div>