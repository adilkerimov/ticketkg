$(document).ready(function() { 
	/*place jQuery actions here*/ 
	var link = "http://mm.kg/";
	
	//Покупка на главной странице
	$(document).on("click",'.js_cart',function(){
        //e.preventDefault();
		var id = $(this).attr('id');
		var qty = $('#amount'+id).val();
		
		 $.post(link + "items/add_cart_item", { product_id: id, quantity: qty, ajax: '1' },
  			function(data){
  			if(data == 'true'){
    			$.get(link + "items/show_cart", function(cart){
  					$("#bag_text").html(cart);
				});
                $('#amount'+id).val("");

    		}else{
    			alert("Product does not exist");
    		}	
 		 }); 

		return false;
	});


    // Покупка доли LuckyStore.kg
	$(document).on("click",'.js_buy',function(){
        var conf="Вы действительно хотите купить?";
        var pid = $(this).attr('iid');
        var quant = $('#amount'+pid).val();
        if(confirm(conf)){
               
		$.post(link + "main/buy_share", { id_item: pid, quantity: quant},
  			function(data){
    			$.get(link + "main/show_my_share", function(cart){
  					$("body").html(cart);
				});
 		 });
        }	
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



