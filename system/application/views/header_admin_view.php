<!-- HEADER -->
<div style="height: 3px; width: 100%; background-color: #127271 /*D0E4E7*/; border-bottom: 0px dashed #458B8C;"></div>
<div style="height: 25px; width: 1000px; margin: 0 auto; ">
<div style="float:left; width:115px; overflow: hidden; padding: 3px 0 3px 5px;">
<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fgetlucky.kg&amp;width=130&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:130px; height:21px;" allowTransparency="true"></iframe>
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
    <div id="header"><br />
    <div style="margin-top: 0; width: auto; float: right; border: 0px solid #1A9595; width: 399px; height: 50px; float: left;"></div>
    <a href="<?=base_url();?>adimin"><div id="logo"></div></a> 
    <div style="width: auto; float: right; border: 0px solid #1A9595; padding: 7px; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; ">
    </div>
    </div>
    
    <div class="clear">
    <br /><br />
    <div style="background: #178C8C; padding: 0 0 0 40px; width: 450px; margin: 0 auto; height: 35px; -webkit-border-radius: 4px ; -moz-border-radius: 4px; border-radius: 4px;">
    <ul class="nav">
    <a href="<?=base_url();?>howtowin"><img src="<?=base_url();?>img/prize.png"  style="float: left; padding: 0 2px 0 0;"/><li>Как выиграть</li></a>
    <a href="<?=base_url();?>partners"><img src="<?=base_url();?>img/partner.png"  style="float: left; padding: 0 2px 0 0;"/><li>Партнерам</li></a>
    <a href="<?=base_url();?>contact"><img src="<?=base_url();?>img/contact.png"  style="float: left; padding: 0 2px 0 0;"/><li>Контакты</li></a>
    </ul>
    </div>
    </div>