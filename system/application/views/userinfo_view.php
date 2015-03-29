<div class="clear"></div>
<br />
	<h1><?=$main_info['title'];?> <br /></h1>
    <span style="color: #137171; border-bottom: 1px dashed #137171;"></span>
    
    <strong>Фамилия:</strong> <?=$last_name;?><br />
    <strong>Имя:</strong> <?=$first_name;?><br />
    <!-- <strong>Возраст:</strong> <?=$main_info['title'];?><br />
    <strong>Пол:</strong> <?=$main_info['title'];?><br /> 
    <strong>Выиграно призов:</strong> <?=$email;?><br />
    -->
    <strong>Баланс:</strong> <a style="color:#127271; border-bottom: 1px dashed #127271;" href="<?=base_url();?>userprizes"><?=$user_account['balance'];?> сом<br /></a>
    <strong>Телефон:</strong> <?=$phone;?><br />
    <strong>E-mail:</strong> <?=$email;?><br />
    <br />
    <p style="padding: 0;" class="button_r"><a href="<?=base_url();?>withdrawal">&nbsp;&nbsp;&nbsp;Вывод средств</a></p>           
                    
    
    
    <br />
</div>