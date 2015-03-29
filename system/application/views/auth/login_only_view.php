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