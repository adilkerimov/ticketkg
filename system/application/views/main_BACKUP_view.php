<!DOCTYPE html>
<html>
  <head>
 <title>Билеты в театры и на концерты Бишкека</title>
 	<!-- Bootstrap -->
 <link href="<?=base_url();?>styles/reset.css" rel="stylesheet"/>
 <link href="<?=base_url();?>styles/bootstrap.min.css" rel="stylesheet"/>
 <link href="<?=base_url();?>styles/style.css" rel="stylesheet"/>
 <link href="<?=base_url();?>styles/owl-carousel/owl.carousel.css" rel="stylesheet"/>
 <link href="<?=base_url();?>styles/owl-carousel/owl.theme.css" rel="stylesheet"/> 
 </head>
 <body>
<div id="upper_bg"></div>
<div id="wrapper" class="container">
	<div id="header" class="row">
		<div id="logo" class="col-md-3"><div class="well"><a href="<?=base_url();?>">Ticket.kg</a></div></div>
		<div id="header-content" class="col-md-9"><div class="well">9<br/>header-content</div></div>
	</div>
	<div id="navigation" class="row">
		<div class="product col-sm-12 col-md-12 col-lg-12">
			<div class="nav">
	            <ul class="nav nav-pills nav-justified">
					<li class="active"><a href="#">ГЛАВНАЯ</a></li>
					<li><a href="#">СПЕКТАКЛИ</a></li>
					<li><a href="#">КОНЦЕРТЫ</a></li>
					<li><a href="#">МЮЗИКЛЫ</a></li>
					<li><a href="#">КЛАССИКА</a></li>
					<li><a href="#">СПОРТ</a></li>
					<li><a href="#">ФЕСТИВАЛИ</a></li>
					<li><a href="#">ДЕТЯМ</a></li>
	            </ul>
        	</div>
    	</div>
	</div>
	<div id="content" class="row">
		<div id="featured" class="col-md-9">
			<div class="row">
				<div id="owl-demo" class="owl-carousel col-sm-6 col-md-4 col-lg-3">
				    <div class="item"><img src="img/assets/1.png"><h4>1</h4></div>
				    <div class="item"><img src="img/assets/2.png"><h4>2</h4></div>
				    <div class="item"><img src="img/assets/3.png"><h4>3</h4></div>
				    <div class="item"><img src="img/assets/4.png"><h4>4</h4></div>
				    <div class="item"><img src="img/assets/1.png"><h4>5</h4></div>
				    <div class="item"><img src="img/assets/2.png"><h4>6</h4></div>
				    <div class="item"><img src="img/assets/3.png"><h4>7</h4></div>
				    <div class="item"><img src="img/assets/4.png"><h4>8</h4></div>
				    <div class="item"><img src="img/assets/1.png"><h4>9</h4></div>
				    <div class="item"><img src="img/assets/2.png"><h4>10</h4></div>
				    <div class="item"><img src="img/assets/3.png"><h4>11</h4></div>
				    <div class="item"><img src="img/assets/4.png"><h4>12</h4></div>
				</div>
				<div id="next" style="width:20px; height:20px; background:#ccc; float:left; cursor:pointer;">999</div>
			</div>
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
			<div class="menu-footer col-sm-6 col-md-2"><div class="well">
<ul>
<li><a href="#">Онас</a></li><br />
<li><a href="#">О компании</a></li><br />
<li><a href="#">Адреса наших касс</a></li><br />
<li><a href="#">Адреса офисов</a></li><br />
<li><a href="#">Лого Ticket.kg</a></li><br />
<li><a href="#">Пресс-центр</a></li><br />
<li><a href="#">Реквизиты</a></li><br />
<li><a href="#">Вакансии</a></li></div></div>
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
    <script src="<?=base_url();?>js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="<?=base_url();?>js/menulist.js"></script>
    <script language="javascript" src="<?=base_url();?>js/core.js" type="text/javascript"></script>
    
    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
      
      baseClass : "owl-carousel",
      theme : "owl-theme",
        
      //navigation : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true,
      autoPlay : true,
      stopOnHover : true

      });

      // Custom Navigation Events
      $("#next").click(function(){
        owl.trigger('next.owl.carousel');
      })
      //$("#prev").click(function(){
      //  owl.trigger('owl.prev');
      //})
     }); 
     

   
    </script>

  </body>
</html>