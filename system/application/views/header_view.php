<div id="upper_bg"></div>
<div id="wrapper" class="container">
    <div id="header" class="row">
        <div id="logo" class="col-md-3"><div class="well"><a href="<?=base_url();?>">Ticket.kg</a></div></div>
        <div id="header-content" class="col-md-9"><div class="well"><?php 
    		if (!$this->ion_auth->logged_in())
		{
            echo "<ul class='user'><li><a href='".base_url()."auth/login/'>Авторизация</a></li><li><a href='".base_url()."auth/create_user'>Регистрация</a></li></ul>";
		}
        else
        {
            $user = $this->ion_auth->user()->row();
            $to_get = $user->id;
            $user_account = $this->items_model->user_account($to_get);
            echo "<ul class='user'><li><a class='underline' href='".base_url()."user_account'>".$user_account['balance']." сом</a></li><li><a class='underline' href='".base_url()."user_info'>".$user->email."</a></li><li><a href='".base_url()."logout'>Выход</a></li></ul>";
        }
     ?></div></div>
    </div>