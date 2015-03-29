<!-- HEADER -->
<div id="upperline">

<div id="upperline_in">
<div id="login_block">
<?php 
    		if (!$this->ion_auth->logged_in())
		{
          echo "<div id='login' class='radius'>Личный кабинет<div id='sub-login' class='radius none'>
Личный кабинет".form_open('')."<br /><div id='log_block'><div id='login_data'><input type='text' class='radius' id='identity' placeholder='E-mail/Логин' /><br /><input type='password' class='radius' id='password' placeholder='Пароль' /></div><div id='login_enter'><input type='submit' onclick='return false;' class='button radius' value='Войти'>".form_checkbox('remember', '1', FALSE, 'id="remember"')."Запомнить<br /></div></div>".form_close()."<div id='forgot' class='clear'><a href='".base_url()."auth/forgot_password'>Забыли пароль?</a><a href='".base_url()."registration'>Регистрация</a>
</div></div></div>";  
		}
        else
        {
            $user = $this->ion_auth->user()->row();
            $to_get = $user->id;
            $user_account = $this->category_model->user_account($to_get);
            echo "<div id='login' class='radius'><a class='underline' href='".base_url()."userprizes'>".$user_account['balance']." сом</a> <a class='underline' href='".base_url()."userinfo'>".$user->email."</a><a id='logout' onclick='return false;' href='".base_url()."logout/'><span class='exit radius'>Выход</span></a></div>";
        }
?>
</div>

<div id="line_center"><div style="width: 100px; height: 22px; float: left;"></div><strong style="float: left; padding-right: 15px;">996 555 55-55-55</strong><p style="float: left; top: 10px; line-height: 20px;">Единая справочная служба</p></div>
<a href="" class="hover_a"><div id="compare" class="radius">Просмотреть заказ&nbsp;&nbsp;<span class="radius">0</span></div></a>

</div>
</div>
<div id="header">
<a href="<?=base_url();?>"><div id="logo" class="radius">
<br /><br /><br /><strong>ЛОГОТИП</strong> 
</div></a>
<div class="space"></div>
<div id="search_block">
<div id="search_nav">
<ul>
<li><a href="">Помощь</a></li>
<li><a href="">Оплата</a></li>
<li><a href="">Доставка</a></li>
<li><a href="">Самовывоз</a></li>
</ul>
</div>
<div id="search" class="radius">
<input type="text" id="search_in" placeholder="Поиск по сайту" class="radius"/>
<a><div id="search_but"><p>Найти</p></div></a>
</div>
</div>
<div class="space"></div>
<div id="min_block" class="radius">
<div id="bag"><img src="/img/balance2.png" /></div> 
<div id="camp_text">
<?php if(!$this->cart->contents()):
	echo '<a href="">Корзина</a><br />Пусто';
else:
?>
<a href="">Сравнение</a><br />товаров<div id="compares" class="count radius"></div>
<?php 
endif;
?>
</div>
<div class="left clear"><a href="" class="min_buy radius">Перейти к вравнению</a></div>
</div>
<div id="min_block">
<div id="bag"><img src="/img/shop.png" width="37"/></div>
<div id="bag_text">
<?php if(!$this->cart->contents()):
	echo '<a href="">Корзина</a><br />Пусто';
else:
?>
<?php foreach($this->cart->contents() as $items): ?>
	  	<div class="quantitie" style="display: none;"><?php echo $items['qty']; ?></div>	  		
<?php endforeach; ?>
<a href="">Корзина</a><br /><?php echo $this->cart->format_number($this->cart->total()); ?> сом <div id="quanty" class="count radius"></div>
<?php 
endif;
?>
</div>
<div class="left clear"><a href="<?=base_url();?>cart" class="min_buy radius">Оформить заказ</a></div>
</div>
</div>