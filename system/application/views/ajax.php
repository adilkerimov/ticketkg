<!-- HEADER -->
<div id="cart_content"></div>
<div style="height: 3px; width: 100%; background-color: #127271 /*D0E4E7*/; border-bottom: 0px dashed #458B8C;"></div>
<div style="height: 25px; width: 1000px; margin: 0 auto; ">
<div style="float: left; font-size: 18px; font-weight: 900;"><br /><a href="<?=base_url();?>">LuckyStore</a></div>
<div style="float:left; width:115px; overflow: hidden; padding: 3px 0 3px 5px;">
</div>
<div style="width: auto; float: right; height: 25px; color: #fff; padding: 0 5px 2px 5px;  background: #127271; -webkit-border-radius: 0 0 4px 4px; -moz-border-radius: 0 0 4px 4px; border-radius: 0 0 4px 4px;">
     <?php 
    		if (!$this->ion_auth->logged_in())
		{
            echo "<ul class='user'><li><a href='".base_url()."auth/login/'>Авторизация</a></li><li><a href='".base_url()."auth/create_user'>Регистрация</a></li></ul>";
		}
        else
        {
            $user = $this->ion_auth->user()->row();
            $to_get = $user->id;
            $user_account = $this->prizes_model->user_account($to_get);
            echo "<ul class='user'><li><img src='".base_url()."img/coin.png' width='20' style='float:left; padding:0 2px 0 0;'/><a class='underline' href='".base_url()."userprizes'>".$user_account['balance']." сом</a></li><li><a class='underline' href='".base_url()."userinfo'>".$user->email."</a></li><li><a href='".base_url()."auth/logout/'><img src='".base_url()."img/logout.png' width='17' style='float:left; padding:2px 0 0 0;'/></a></li></ul>";
        }
     ?>
</div>
</div>


<!-- CONTAINER -->
<div id="container">
</div><div class="clear"></div>
<br /><br /><br />

<?php foreach($items as $item): ?>
<div style="width: 980px; margin: 0 auto; border: 1px dashed #074343; padding: 10px 10px; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; ">
<strong>ID товара:</strong> <?=$item['id_item']?><br />
<strong>Дата создания:</strong> <?=$item['create_date']?><br />
<strong>ID победителя:</strong> <?=$item['id_user']?><br />
<strong>Сумма:</strong> <?=$item['sum']?> сом<br />
<strong>Наименование товара:</strong> <a style="border-bottom: 1px dashed #127271;" href="<?=base_url();?>item/<?=$item['id_item'];?>"><?=$item['item_name']?></a><br />
<strong>Описание товара:</strong> <?=$item['item_descript']?><br />
<strong>Всего долей:</strong> <? $quant=$this->items_model->get_quantity($item['id_item']); echo $quant['quantity'];?><br />
<strong><div style="float: left; padding-right: 4px;">Осталось долей:</div></strong><div id="newval" style="float: left;"> <?php $quant=$this->items_model->get_quantity($item['id_item']); $all = $this->items_model->get_shares($item['id_item']); $total = $quant['quantity']-$all;  echo $total;?></div><br />
<?php
    		if (!$this->ion_auth->logged_in())
		{
            echo "<a style='border-bottom: 1px dashed #127271;'  href='".base_url()."auth/login/'>Авторизоваться</a>";
		}
        else
        {
            $user = $this->ion_auth->user()->row();
            $to_get = $user->id;
            $user_account = $this->prizes_model->user_account($to_get);
            echo "<form method='post' action='<?=base_url();?>buy'><div class='js_down amdown'>-</div><input class='js_amount orderamount' id='amount".$item['id_item']."'/><div class='js_up amup'>+</div><div class='clear'></div><br /><div style='display: block; cursor: pointer; border:1px solid #4F5155; width:40px; height:20px; padding:5px 20px;' class='js_buy' iid='".$item['id_item']."'>Купить</div></form>";
        }
?>

</div><br />
<?php endforeach ?>

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

</script>