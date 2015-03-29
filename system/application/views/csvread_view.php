<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Get Lucky - получи свой приз бесплатно!</title>
    <script language="javascript" src="<?=base_url();?>js/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?=base_url();?>js/jquery.scrollbar.min.js"></script>
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

//                $('.content').add('h2').add('.buttons').add('.content-container').hide();
//
//                $('#test-webkit-2, #test-webkit').prev().show().end().show().scrollbar({
//                    "type": "simple"
//                });
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
    <link href="<?=base_url();?>styles/style.css" rel="stylesheet" type="text/css" />
    <link type="text/css" href="<?=base_url();?>styles/jquery.scrollbar.css" rel="stylesheet" media="all" />
</head>
<body>
<?php 
$user = $this->ion_auth->user()->row();
?>

<div style="height: 25px; border-bottom: 1px solid #127271; width: 100%; background-color: #EAF4F1 /*F0585C D0E4E7*/; ">
<div style="width: 1000px; margin: 0 auto; height: 100%; color: #fff; padding: 0 0 20px 0;">
<ul class="user"><li><strong>Баланс:</strong> 100 сом</li><li><strong><?//=$user->email;?></strong></li></ul>
</div>
</div>

<!-- <div style="height: 8px; width: 100%; background: url(/img/ornament_top.gif);"></div> -->
<br />
<div id="container">

<h1>Главная страница администратора</h1>



<ul class="admin">
<li>
<a href="<?=base_url();?>adimin">Главная</a>
</li>
<li>
<a href="<?=base_url();?>adimin/email">Рассылка</a>
</li>
<li>
<a href="<?=base_url();?>adimin/money_gen">Генерация времени</a>
</li>
<li>
<a href="<?=base_url();?>adimin/add_rozyg">Добавить розыгрыш</a>
</li>
<li>
<a href="<?=base_url();?>adimin/readExcel">Считать эксель</a>
</li>
<li>
<a href="<?=base_url();?>auth">Пользователи</a>
</li>
</ul>
<br /><br />

<?php echo form_open("adimin/addprizes");?>

<select name="id_rozygr">
    <option disabled selected>Выберите розыгрыш</option>
    <?php foreach ($all_rozygr as $item):?>
    <option value="<?=$item['id_rozygr']?>"><?php $name = $item['id_company'];
        $comp_name = $this->prizes_model->get_comp($name);
        echo $comp_name['company'];?> - <?=$item['rozyg_title']?></option>
    <?php endforeach;?>
</select>
<br /><br />
<select name="prize_group">
    <option disabled selected>Выберите группу приза</option>
    <option value="1">Золотой приз</option>
    <option value="2">Серебрянный приз</option>
    <option value="3">Бронзовый приз</option>
    <option value="4">Дененжный приз</option>
</select>


<div class="clear"></div><br />
<table border="1" cellpadding="0" cellspacing="0" width="100%">
    <tr>
            <td width = "10%">ID</td>
            <td width = "20%">День время</td>
            <td width = "20%">Номинал</td>
            <td width = "30%">пусто</td>
            <td width = "10%">Сумма</td>
    </tr>
            <?php $i = 1; ?>
            <?php foreach($csvData as $field){?>
                <tr>
                    <td><?php echo $field['id']?></td>
                    <td><input name="activate_date<?=$i?>" value="<?php echo $field['day']?> <?php echo $field['time']?>"/></td>
                    <td><input name="prize_name<?=$i?>" value="<?php echo $field['nominal']?>"/></td>
                    <td></td>
                    <td><input name="sum<?=$i?>" value="<?php echo $field['sum']?>"/></td>
                </tr>
            <?php $i++; ?>
            <?php }?>
            
</table>
<br />
<?php echo "<input name='counter' value='".$i."'/>"; ?>
<br />
<br />
<p><?php $attributes = 'class = "button_r"'; echo form_submit('submit', 'добавить призы', $attributes);?></p>
<?php echo form_close();?>



<br /><br />
</div>
<div class="clear mymarg"></div>
<br />
<div style="width: 980px; margin: 0 auto; height: 40px; border: 1px dashed #074343; padding: 20px 10px; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; ">
<img src="<?=base_url();?>/img/water.png" style="float: left;"/>
<h4><span style="font-size: 22px; padding-right: 3px;">&#171;</span>В каждой странице розыгрыша имеется максимальное количество попыток за день<span style="font-size: 22px; padding-left: 3px;"">&#187;</span></h4>
</div>
<br /><br />
<div style="height: 8px; width: 100%; background: url(/img/ornament_bot.gif);"></div>
<div style="background: #127271; width: 100%; height: 140px;">
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
</div>
</div>
<div style="background: #0E4444; width: 100%; height: 35px;">
<div id="footer">
<strong>&copy; 2013-2014 GetLucky.kg</strong> <br />
</div>
</div>

</body>
</html>