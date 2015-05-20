$(document).ready(function() { 
	/*place jQuery actions here*/ 
	var link = "http://ticket.kg/";

    // Покупка доли Ticket.kg
	$(document).on("click",'.seat',function(){
        var pid = $(this).attr('id');
        var t_cost = $(this).attr('cost');
        if ($(this).hasClass('btn-primary')) {

        $(this).removeClass('btn-primary').addClass('btn-default');
        var conf="Вы действительно хотите удалить?";
          if(confirm(conf)){
          $.post(link + "main/abort_ticket", {id_item: pid},
             function(data){
              if(isNaN(data)){
              alert("Бронь по данному билету не может быть удалена."); 
              }
              else{
              
              }
              //$.get(link + "main/show_my_share", function(cart){
              //$("body").html(cart);
              //});
             });
          }
        }
        else if ($(this).hasClass('btn-danger')) {
        $(this).removeClass('btn-danger').addClass('btn-default');
        var conf="Вы действительно хотите удалить?";
          if(confirm(conf)){
          $.post(link + "main/abort_ticket", {id_item: pid},
             function(data){
              if(isNaN(data)){
              alert(data); 
              }
              else{
              //alert("Что то не то"); 
              }
              //$.get(link + "main/show_my_share", function(cart){
              //$("body").html(cart);
              //});
             });
          }
        }
        else{
        //var pid = $(this).attr('id');
        $(this).removeClass('btn-default').addClass('btn-primary');
        //var ticks = $('#amount'+pid).val();
        //if(confirm(conf)){
          $.post(link + "main/buy_ticket", {id_item: pid, cost:t_cost},
             function(data){
              if(isNaN(data)){
              alert(data); 
              }
              else{
                var myinput=$('.sum');

                var inival=parseFloat(myinput.text());


                var cost = $('#'+pid).attr('cost');
                var costval=parseFloat(cost);

                if(isNaN(inival)) inival=0;
                var newval=inival+costval;
                newval=parseFloat(Math.round(newval * 100) / 100).toFixed(0);
                myinput.text(newval);


              }
              
              //$.get(link + "main/show_my_share", function(cart){
              //$("body").html(cart);
              //});
             });
        //}
        };
    });	
    
    // Авторизация AJAX
    $(document).on("click",'.button',function(){
        var conf="Вы действительно хотите войти?";
        var id_user = $('#identity').val();
        var pass = $('#password').val();
        
		$.post(link + "auth/login", { identity: id_user, password: pass},
  			function(data){
    			$.get(link + "main/show_my_login", function(cart){
  					$("#login_block").html(cart);
				});
 		 });	
    });
    
    
    // Выход AJAX
    $(document).on("click",'#logout',function(){
        var conf="Вы действительно хотите выйти?";
        var id_user = $('#identity').val();
        var pass = $('#password').val();
        
		$.post(link + "auth/logout", { identity: id_user, password: pass},
  			function(data){
    			$.get(link + "main/show_my_login", function(cart){
  					$("#login_block").html(cart);
				});
 		 });	
    });

//Покупка на главной странице
  $(document).on("click",'.day_li',function(){
        //e.preventDefault();
    var id = $(this).attr('id');
    $('#sidebar .nav li').removeClass('active');
    $(this).addClass('active');
    $('.sidebar_date').addClass('hidden');
    $('#side' + id).removeClass('hidden');
    

  });
  
});



