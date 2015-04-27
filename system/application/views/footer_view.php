<!-- FOOTER -->
<div id="footer">
    
      <div class="bg_footer_top">
        <div id="wrapper" class="container">

        </div>
      </div>
  </div>
  <div id="footer">
    <div id="wrapper" class="container">
  
    <div class="footer-top row">
      <div class="menu-footer col-sm-6 col-md-2"><div class="well">
<ul class="footer_list">
<li>Онас</li><br />
<li><a href="#">О компании</a></li><br />
<li><a href="#">Адреса наших касс</a></li><br />
<li><a href="#">Адреса офисов</a></li><br />
<li><a href="#">Лого Ticket.kg</a></li><br />
<li><a href="#">Пресс-центр</a></li><br />
<li><a href="#">Реквизиты</a></li><br />
<li><a href="#">Вакансии</a></li>
</ul>
</div></div>
      <div class="menu-footer col-sm-6 col-md-2"><div class="well">
<ul class="footer_list">
<li>Проекты</li><br />
<li><a href="#">Электронный билет</a></li><br />
<li><a href="#">Программа «Карта Зрителя»</a></li><br />
<li><a href="#">Подарочная карта</a></li><br />
<li><a href="#">Благотворительность</a></li><br />
<li><a href="#">Промо-код</a></li><br />
</ul>
</div></div>
      <div class="menu-footer col-sm-6 col-md-2"><div class="well">
<ul class="footer_list">
<li>Помощь</li><br />
<li><a href="#">Изменения в репертуаре</a></li><br />
<li><a href="#">Часто задаваемые вопросы</a></li><br />
<li><a href="#">Как заказать билеты</a></li><br />
<li><a href="#">Карта сайта</a></li><br />
</ul>
</div></div>
      <div class="menu-footer col-sm-6 col-md-2"><div class="well">
<ul class="footer_list">
<li>Правила использования</li><br />
<li><a href="#">Пользовательское соглашение</a></li><br />
<li><a href="#">Публичная оферта</a></li><br />
<li><a href="#">Политика конфиденциальности</a></li><br />
</ul>
</div></div>
      <div class="menu-footer col-sm-6 col-md-4"><div class="well"><a href="">Контакты</a><br />
+996 (312) 99-77-99<br />
Ибраимова, д. 103, Бишкек, 720000 (остановка «ЦУМ»)</div></div>
    </div>
</div>
</div>
    <div id="footer" style="border-top:1px solid #ccc">
    <div id="wrapper" class="container">
    <div class="footer-bottom row">
      <div class="copyrights col-sm-6 col-md-6"><div class="foot_well">© ОсОО «TICKET», 2015<br>
Ибраимова, д. 103, Бишкек, 720000<br>
Телефон: +996 (312) 99-77-99<br>
office@ticket.kg</div></div>
      <div class="social-icons col-sm-6 col-md-6"><div class="foot_well">Footer</div></div>
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
    var owl = $("#owl-demo");
      owl.owlCarousel({
      
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
        owl.trigger('owl.next');
      })
      $("#prev").click(function(){
        owl.trigger('owl.prev');
      })
     }); 
     

   
    </script>

  </body>
</html>