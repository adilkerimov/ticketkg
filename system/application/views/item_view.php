
<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<title>LuckyStore - купи любой товар за 100 сом!</title>
    <script language="javascript" src="http://luckystore.kg/js/jquery-1.10.1.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="http://luckystore.kg/styles/jquery.arcticmodal-0.3.css"/>
    <link rel="stylesheet" href="http://luckystore.kg/styles/simple.css"/>
    <link href="http://luckystore.kg/img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <script src="http://luckystore.kg/js/jquery.arcticmodal-0.3.min.js"></script>
    
    <script language="javascript" src="http://luckystore.kg/js/jquery.countdown.min.js" type="text/javascript"></script>
    <script language="javascript" src="http://luckystore.kg/js/jquery.countdown-ru.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function(){setTimeout(function(){
        $("#start").hide();
        $("#result").show();
        },3000);
    });
    </script>
    <script type="text/javascript" src="http://luckystore.kg/js/jquery.scrollbar.min.js"></script>
    <script type="text/javascript">

            function initCustomScrollbar(){
                $('.scroll-standard').scrollbar();

                $('.scroll-simple').scrollbar({
                    "type": "simple"
                });

                $('.external-scroll').scrollbar({
                    "autoScrollSize": false,
                    "scrollx": $('.external-scroll_x'),
                    "scrolly": $('.external-scroll_y')
                });
            }

            function destroyCustomScrollbar(){
                $('.scroll-content').scrollbar('destroy');
            }

            $(document).ready(function(){
                initCustomScrollbar();

                $('.buttons').each(function(){
                    $(this).find('input.default').attr('checked', true);
                }).find('input:radio').change(function(){
                    $(this).closest('form').next().find('.resizable').css($(this).attr('name'), $(this).val());
                });

            });
        </script>
        <style>
.box {
  display: none;
}
.box.visible {
  display: block;
}
</style>
    <link href="http://luckystore.kg/styles/style.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="http://luckystore.kg/styles/jquery.scrollbar.css" rel="stylesheet" media="all" />
</head>
<body><!-- HEADER -->
<div style="height: 3px; width: 100%; background-color: #127271 /*D0E4E7*/; border-bottom: 0px dashed #458B8C;"></div>
<div style="height: 25px; width: 1000px; margin: 0 auto; ">
<div style="float: left; font-size: 18px; font-weight: 900;"><br /><a href="<?=base_url();?>">LuckyStore</a></div>
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


<div style="width: 980px; margin: 0 auto; border: 1px dashed #074343; padding: 10px 10px; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; ">
<strong>ID товара:</strong> <?=$only_item['id_item']?><br />
<strong>Дата создания:</strong> <?=$only_item['create_date']?><br />
<strong>Пользователь:</strong> <?=$only_item['id_user']?><br />
<strong>Сумма:</strong> <?=$only_item['sum']?> сом<br />
<strong>Наименование товара:</strong> <a href="<?=base_url();?>item/<?=$only_item['id_item'];?>"><?=$only_item['item_name']?></a><br />
<strong>Описание товара:</strong> <?=$only_item['item_descript']?><br />
<strong>Всего долей:</strong> <? $quant=$this->items_model->get_quantity($only_item['id_item']); echo $quant['quantity'];?><br />
<strong>Осталось долей:</strong> <?php $quant=$this->items_model->get_quantity($only_item['id_item']); $all = $this->items_model->get_shares($only_item['id_item']); $total = $quant['quantity']-$all;  echo $total;?><br />
</div><br />




</body>
</html>