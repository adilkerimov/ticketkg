<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Get Lucky - получи свой приз бесплатно!</title>
    <script language="javascript" src="<?=base_url();?>js/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script language="javascript" src="<?=base_url();?>js/jquery.countdown.min.js" type="text/javascript"></script>
    <script language="javascript" src="<?=base_url();?>js/jquery.countdown-ru.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function(){setTimeout(function(){
        $("#start").hide();
        $("#result").show();
        },3000);
    });
    </script>
    <?php 
    		if (!$this->ion_auth->logged_in())
		{
            echo "<script language='javascript' src='".base_url()."js/login.js' type='text/javascript'></script>";
		}
        else
        {
        }
        
     ?>
<link href="<?=base_url();?>styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<!-- HEADER -->
<!--
<div id="header">
<div id="header_in">
<div id="header_right">
<div style="float:right; width:115px; overflow: ;">
<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2F%25D0%25A1%25D0%25BB%25D1%2583%25D0%25B6%25D0%25B1%25D0%25B0-%25D0%25B4%25D0%25BE%25D1%2581%25D1%2582%25D0%25B0%25D0%25B2%25D0%25BA%25D0%25B8-%25D0%25A1%25D0%25BD%25D0%25B0%25D0%25B1%25D0%25B6%25D0%25B5%25D0%25BD%25D0%25B5%25D1%2586%2F309696259170240&amp;width=200&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;send=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe>
</div>
</div>
</div>
</div>
-->
<div style="height: 5px; width: 100%; background-color: #E84F54 /*D0E4E7*/; border-bottom: 0px dashed #458B8C;"></div>
<div id="project">
<!-- CONTAINER -->
<div id="container">
    
	<h1><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /> <!-- Добро пожаловать на сайт Get Lucky! Проект начат 15 октября 2013 г. - Запуск 01 декабря 2013 г. --></h1>  

    <p style="float: right;"><span class="done">Разыграно призов:</span><span class="done_r"><?=$won_count;?></span></p>
    <p style="float: right; padding: 0 10px;"><span class="done">Начислено денежных вознаграждений:</span><span class="done_r"><?=$account_count;?> сом</span></p>
    <p style="float: right;"><span class="done">Пользователи онлайн:</span><span class="done_r"><?=$auth_session;?></span></p>
    
     <?php 
    		if (!$this->ion_auth->logged_in())
		{
            echo "<div id='user_block'><a href='".base_url()."auth/login/'>Авторизация</a><br /><a href='".base_url()."auth/create_user'>Регистрация</a></div>";
		}
        else
        {
            $user = $this->ion_auth->user()->row();
            $to_get = $user->id;
            $user_account = $this->prizes_model->user_account($to_get);
            echo "<div id='user_block'><ins>E-mail пользователя</ins>: ".$user->email."<br /><ins>На вашем счете</ins>:<br /><img src='".base_url()."img/coin.png' width='20'/> ".$user_account['balance']." сом<br /><a href='".base_url()."auth/logout/'>Выход</a></div>";
        }
        
     ?>
<div class="clear mymarg"></div>
<?php foreach ($main_info as $item):?>
<div class="window">
<?php 
    	if (!$this->ion_auth->logged_in())
		{  
		}
        else
        {
            $user = $this->ion_auth->user()->row();
            $to_get = $user->id;
            $data = array();
            $data['user_id'] = $to_get;
            $data['rozygrysh'] = $item['id_rozygr'];
            $count_account = $this->user_click_model->get_click_count($data);
            //echo $count_account['click_count'];
            if ($count_account)
            {
                $remain = $item['max_count'] - $count_account['click_count'];
                if($remain <= 0)
                {
                  echo "<div style='border: 1px solid #80A7A6; border-top: none; color: #E84F54; padding: 2px 0 0 25px; font-weight: bold; float: right; width: 155px; height: 23px; background-color: #FAC7C8; position: absolute; margin: -10px 0 0 802px;'><span style='color: #C11115 ;'>Приходите завтра</span></div>";  
                }
                else
                {
                  echo "<div style='border: 1px solid #80A7A6; border-top: none; color: #E84F54; padding: 2px 0 0 10px; font-weight: bold; float: right; width: 155px; height: 23px; background-color: #EAF4F1; position: absolute; margin: -10px 0 0 802px;'><span style='color: #137171 ;'>Попыток осталось: </span>".$remain."</div>";  
                }
            }
            else
            {
                $remain = $item['max_count'];
                echo "<div style='border: 1px solid #80A7A6; border-top: none; color: #E84F54; padding: 2px 0 0 10px; font-weight: bold; float: right; width: 155px; height: 23px; background-color: #EAF4F1; position: absolute; margin: -10px 0 0 802px;'><span style='color: #137171 ;'>Попыток осталось: </span>".$remain."</div>";
            }
            
        }
        
     ?>
<div id="win_head"><h2><?php 
$name = $item['id_company'];
$comp_name = $this->prizes_model->get_comp($name);
echo $comp_name['company'];
?> - <?=$item['rozyg_title'];?></h2>
</div>
<div id="imgw" class="round"><img class="round" src="<?=base_url();?>img/img_1.jpg" /></div>
<div id="win_right">
<div id="upper_side">
<div id="end_date<?=$item['id_rozygr'];?>" style="display: none;"><?=$item['end_date'];?></div>
<div class="round" style="background: #FBFDFD; width: 220px; float: left; padding: 5px 0 0 3px; border: 1px solid #80A7A6; clear: both;">
<div>
<div style="float: left;"><img src="<?=base_url();?>img/gold_cup.png" width="35"/></div><div style="float: left; padding-top: 7px;">X 
<?php 
$to_get = $item['id_rozygr']; $rozygr_count_g = $this->prizes_model->count_gold_prizes($to_get); echo $rozygr_count_g;
?> - <a href="#" style="border-bottom:1px dashed #137171; color: #137171;">список призов</a>
</div>
</div>
<div class="clear">
<div style="float: left;"><img src="<?=base_url();?>img/silver_cup.png" width="35"/></div><div style="float: left; padding-top: 7px;">X 
<?php 
$rozygr_count_s = $this->prizes_model->count_silver_prizes($to_get); echo $rozygr_count_s;
?> - <a href="#" style="border-bottom:1px dashed #137171; color: #137171;">список призов</a>
</div>
</div>
<div class="clear">
<div style="float: left;"><img src="<?=base_url();?>img/bronz_cup.png" width="35"/></div><div style="float: left; padding-top: 7px;">X 
<?php 
$rozygr_count_b = $this->prizes_model->count_bronz_prizes($to_get); echo $rozygr_count_b;
?> - <a href="#" style="border-bottom:1px dashed #137171; color: #137171;">список призов</a></div>
</div>
<div class="clear">
<div style="float: left;"><img src="<?=base_url();?>img/coin.png" width="35"/></div><div style="float: left; padding-top: 7px;">= 
<a href="#" style="border-bottom:1px dashed #137171; color: #137171;"><?=$item['budget'];?> сом</a></div>
</div>
</div>

<div style="margin: 0 0 8px 10px; float: right;">
<div class="round" style="background: #FBFDFD; width: 307px; float: right; padding: 4px 0 0 5px; border: 1px solid #80A7A6;">
<div class="clear"></div>
<div style="float: left;"><img src="<?=base_url();?>img/clock.png" width="50" /></div>
<div style="float: left; padding: 4px 0 0 10px;">
<div id="rezult">
<div class="countdown-example<?=$item['id_rozygr'];?>"></div><br />
</div>
</div>
</div>
</div>
<div style="margin-left: 10px; float: right;">
<div class="round" style="background: #fff; width: 307px; height: 60px; float: right; padding: 4px 0 0 5px; border: 1px solid #80A7A6;">
<div class="clear"></div>
<div style="float: left;">Здесь должно быть описание/условия </div>

</div>
</div>
</div>
<div id="bottom_side">
<div class="button right"><a href="<?=base_url();?>welcome/company/<?=$item['id_rozygr'];?>">получить</a></div>
</div>
</div>
</div>
<div class="clear mymarg"></div>
<script type="text/javascript">
    $(function () {
        var rozyg_id = <?=$item['id_rozygr'];?>;
        var text = $('#end_date' + rozyg_id).text();
        var mdate = new Date(text.replace(/(\d+)-(\d+)-(\d+)/, '$2/$3/$1'));
    	austDay = new Date(mdate.getFullYear(), mdate.getMonth(), mdate.getDate());
        $('.countdown-example' + rozyg_id).countdown({until: austDay});
    });
</script>
<?php endforeach;?>
</div>
<div class="clear"></div>
<div style="width: 980px; margin: 0 auto; height: 40px; border: 1px dashed #074343; padding: 20px 10px; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; ">
<img src="<?=base_url();?>/img/water.png" style="float: left;"/>
<h4><span style="font-size: 22px; padding-right: 3px;">&#171;</span>В каждой странице розыгрыша имеется максимальное количество попыток за день<span style="font-size: 22px; padding-left: 3px;"">&#187;</span></h4>
</div>
<br /><br />


<!-- FOOTER --> 
<div id="footer">
<div style="width: 230px; float: left; padding-right: 20px; line-height: 22px;">
<strong>О проекте</strong><br />
Пользовательское соглашение<br />
Правила сайта<br />
Наша команда<br />
</div>
<div style="width: 230px; float: left; padding-right: 20px; line-height: 22px;">
<strong>Помощь</strong><br />
Как работает GetLucky<br />
Найти ответ самостоятельно<br />
Написать нам в службу поддержки<br />
</div>
<div style="width: 230px; float: left; padding-right: 20px; line-height: 22px;">
<strong>Партнерам</strong><br />
Разместите свою компанию<br />
Реализованные кампании<br />
</div>
<div style="width: 230px; float: left; line-height: 22px;">
<strong>Контакты</strong><br />
0 (553) 899 433<br />
0 (312) 899 433<br />
info@getlucky.kg<br />
</div>

<br /><br /><br /><br />

<br /><br /><br />
<strong>&copy; 2013-2014 GetLucky.kg</strong> <br />

</div>
</div>
</body>
</html>