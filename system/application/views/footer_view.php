<!-- FOOTER -->
<div id="footer_obl"></div>
<div id="footer">
<div id="footer_in">
<div class="quart">
<p class="strong"></p>
<ul>
<li></li>
</ul>
</div>
<div class="quart">
<p class="strong">Интернет-магазин</p>
<ul>
<li><a href="">Помощь покупателю</a></li>
<li><a href="">Доставка</a></li>
<li><a href="">Самовывоз</a></li>
<li><a href="">Оплата</a></li>
<li><a href="">Обмен и возврат</a></li>
<li><a href="">Правила работы</a></li>
<li><a href="">Регистрация</a></li>
<li><a href="">Как сделать заказ</a></li>
<li><a href="">Обратная связь</a></li>
</ul>
</div>
<div class="quart">
<p class="strong">Информация для покупателей</p>
<ul>
<li><a href="">Адреса магазинов</a></li>
<li><a href="">Покупка в кредит</a></li>
<li><a href="">Подарочные сертификаты</a></li>
<li><a href="">Корпоративный раздел</a></li>
<li><a href="">Гарантийное обслуживание</a></li>
<li><a href="">Адреса сервисных центров</a></li>
</ul>
</div>
<div class="quart">
<p class="strong">О компании</p>
<ul>
<li><a href="">Информация о компании</a></li>
<li><a href="">Новости компании</a></li>
<li><a href="">Вакансии</a></li>
<li><a href="">Контактная информация</a></li>
<li><a href="">Юридическая и финансовая информация</a></li>
</ul>
</div>
</div>
</div>
<div id="footer_bot"></div>

    <script language="javascript" src="<?=base_url();?>js/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?=base_url();?>js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="<?=base_url();?>js/menulist.js"></script>
    <script language="javascript" src="<?=base_url();?>js/core.js" type="text/javascript"></script>
    
    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
      
      baseClass : "owl-carousel",
      theme : "owl-theme",
        
      navigation : false,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true,
      autoPlay : true,
      stopOnHover : true

      });
     }); 
     
    
    $(document).ready(function() {
 
      var owl = $("#slider1");
     
      owl.owlCarousel({
          items : 3, //10 items above 1000px browser width
          itemsDesktop : [1000,3], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,3], // betweem 900px and 601px
          itemsTablet: [600,2], //2 items between 600 and 0
          itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
          pagination : false,
          autoPlay : false,
          mouseDrag: false,
          
          
      });
        
      // Custom Navigation Events
      $("#next").click(function(){
        owl.trigger('owl.next');
      })
      $("#prev").click(function(){
        owl.trigger('owl.prev');
      })
    });
    
    $(document).ready(function() {
 
      var owl2 = $("#slider2");
     
      owl2.owlCarousel({
          items : 3, //10 items above 1000px browser width
          itemsDesktop : [1000,3], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,3], // betweem 900px and 601px
          itemsTablet: [600,2], //2 items between 600 and 0
          itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
          pagination : false,
          autoPlay : false,
          mouseDrag: false,
          
          
      });
        
      // Custom Navigation Events
      $("#next2").click(function(){
        owl2.trigger('owl.next');
      })
      $("#prev2").click(function(){
        owl2.trigger('owl.prev');
      })
    });
    
    $(document).ready(function() {
 
      var owl3 = $("#slider3");
     
      owl3.owlCarousel({
          items : 3, //10 items above 1000px browser width
          itemsDesktop : [1000,3], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,3], // betweem 900px and 601px
          itemsTablet: [600,2], //2 items between 600 and 0
          itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
          pagination : false,
          autoPlay : false,
          mouseDrag: false,
          
          
      });
        
      // Custom Navigation Events
      $("#next3").click(function(){
        owl3.trigger('owl.next');
      })
      $("#prev3").click(function(){
        owl3.trigger('owl.prev');
      })
    });
    
    </script>
    <script type="text/javascript">
    var timeout;
	var i = 1;
	$('.js_up').mousedown(function(){
        $(this).css('background-position','-25px 0');
        var myinput=$(this).siblings('.js_amount');
        var inival=parseFloat(myinput.val());
        if(isNaN(inival)) inival=0;
        var newval=inival+1;
        newval=parseFloat(Math.round(newval * 100) / 100).toFixed(0);
        myinput.val(newval);

        timeout = setInterval(function(){
            var inival=parseFloat(myinput.val());
            var newval=inival+1;
            newval=parseFloat(Math.round(newval * 100) / 100).toFixed(0);
            myinput.val(newval);
        }, 200);
        return false;
    });

    $('.js_down').mousedown(function(){
        $(this).css('background-position','-25px -15px');
        var myinput=$(this).siblings('.js_amount');
        var inival=parseFloat(myinput.val());
        if(isNaN(inival)) inival=0;
        var newval=inival-1;
        if(newval<0) newval=0;
        newval=parseFloat(Math.round(newval * 100) / 100).toFixed(0);
        myinput.val(newval);

        timeout = setInterval(function(){
            var inival=parseFloat(myinput.val());
            var newval=inival-1;
            if(newval<0) newval=0;
            newval=parseFloat(Math.round(newval * 100) / 100).toFixed(0);
            myinput.val(newval);
        }, 200);
        return false;
    });

    $(document).mouseup(function(){
        $('.js_down').css('background-position','0px -15px');
        $('.js_up').css('background-position','0 0');
        clearInterval(timeout);
        return false;
    });


    $(document).on('click','.js_prodlink', function(e){e.preventDefault();
        var pid=parseInt($(this).attr('pid'));

        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        $('#mask').css({'width':maskWidth,'height':maskHeight});
        $('#mask').show();

        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();
        $("#dialog").css('top',  winH/2-$("#dialog").height()/2);
        $("#dialog").css('left', winW/2-$("#dialog").width()/2);
        $("#dialog").fadeIn();

        $.ajax({
            type:'POST',
            url:'/product/getinfo',
            data: {id:pid},
            beforeSend:function(){$('#load'+pid).css('display','inline-block'); $('#dialogContent').html('<img src="/images/loader.gif" />');},
            success: function(data)
            {
                if(data.length)
                    $('#dialogContent').html(data);
                else
                    $('#dialogContent').html("<p>Описане на этот продукт будет в ближайшее время.</p>");
                $('#load'+pid).css('display','none');
            },
            complete: function(){
                $("#dialog").css('top',  winH/2-$("#dialog").height()/2);
                $("#dialog").css('left', winW/2-$("#dialog").width()/2-20);
            }
        });
    });
</script>
<script type="text/javascript">
		$(document).ready(function(){
		var sum = 0;
		$('.quantitie').each(function(){
		sum += parseFloat($(this).text());
		return sum;
  		});
		var endsum = sum.toFixed(0)
		$('#quanty').text(endsum);
        $('#totalquantity').attr('value',endsum);
});
</script>
<script type="text/javascript">
		$(document).ready(function(){
		var summ = 0;
        summ = parseFloat($('#totalcost').text()) + parseFloat($('#delivery').text()) + parseFloat($('#discount').text());
		var endsumm = summ.toFixed(1)
		//$('#totalquantity').attr('value',endsumm);
		$('#total').html(endsumm);
        });
</script>
</body>
</html>