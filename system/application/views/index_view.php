<!DOCTYPE html>
<html>
  <head>
 <title>Билеты в театры и на концерты Бишкека</title>
 	<!-- Bootstrap -->
 <link href="<?=base_url();?>styles/reset.css" rel="stylesheet"/>
 <link href="<?=base_url();?>styles/bootstrap.min.css" rel="stylesheet"/>
 <link href="<?=base_url();?>styles/style.css" rel="stylesheet"/>
 </head>
 <body>
<div id="wrapper" class="container">
	<div id="header" class="row">
		<div id="logo" class="col-md-3"><div class="well"><a href="<?=base_url();?>">Ticket.kg</a></div></div>
		<div id="header-content" class="col-md-9"><div class="well">9<br/>header-content</div></div>
	</div>
	<div id="header" class="row">
		<div class="product col-sm-12 col-md-12 col-lg-12"><div class="well">Навигация<br />
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
        </div></div>
	</div>
	<div id="content" class="row">
		<div id="featured" class="col-md-9">
			<div class="row">
				<?php foreach($items as $item):?>
				<div class="product col-sm-6 col-md-4 col-lg-3"><div class="well"><ins>Заголовок</ins>: <?=$item['item_name'];?><br /><ins>Описание</ins>: <?=$item['item_descript'];?><br /><ins>Продолжительность</ins>: <?=$item['duration'];?><br /><ins>Организатор</ins>: <?=$item['organizer'];?><br /><img width="50" src="<?=base_url();?>img/items/<?=$item['item_img'];?>" /></div></div>
                <?php endforeach; ?>
			</div>
		</div>
		<div id="sidebar" class="col-md-3"><div class="well">3<br/>#sidebar</div></div>
	</div>
	<div id="footer">
		<div class="footer-top row">
			<div class="menu-footer col-sm-6 col-md-2"><div class="well">Онас<br />О компании<br />
Адреса наших касс<br />
Адреса офисов<br />
Лого Ticketland.ru<br />
Пресс-центр<br />
Реквизиты<br />
Вакансии</div></div>
			<div class="menu-footer col-sm-6 col-md-2"><div class="well">Проекты<br />
Электронный билет<br />
Программа «Карта Зрителя»<br />
Подарочная карта<br />
Благотворительность<br />
Промо-код</div></div>
			<div class="menu-footer col-sm-6 col-md-2"><div class="well">Помощь<br />
Изменения в репертуаре<br />
Часто задаваемые вопросы<br />
Как заказать билеты<br />
Карта сайта</div></div>
			<div class="menu-footer col-sm-6 col-md-2"><div class="well">Правила использования<br />
Пользовательское соглашение<br />
Публичная оферта<br />
Политика конфиденциальности</div></div>
			<div class="menu-footer col-sm-6 col-md-4"><div class="well">Контакты<br />
+996 (312) 99-77-99<br />
Ибраимова, д. 103, Бишкек, 720000 (остановка «ЦУМ»)</div></div>
		</div>
		<div class="footer-bottom row">
			<div class="copyrights col-sm-6 col-md-6"><div class="well">© ОсОО «TICKET», 2015
Ибраимова, д. 103, Бишкек, 720000
Телефон: +996 (312) 99-77-99
office@ticket.kg</div></div>
			<div class="social-icons col-sm-6 col-md-6"><div class="well">6<br>.social-icons</div></div>
		</div>
	</div>
</div>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?=base_url();?>js/bootstrap.min.js"></script>
  </body>
</html>