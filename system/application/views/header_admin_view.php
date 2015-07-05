<div id="upper_adm" class="hidden-xs"></div>
<div id="up_small_bg" class="visible-xs"></div>
<div id="wrapper" class="container">
    <div id="header" class="row hidden-xs">
        <div id="logo" class="col-sm-3 col-md-3 col-lg-3"><a href="<?=base_url();?>"><div class="well"></div></a></div>
        <div id="header-content" class="col-sm-9 col-md-9 col-lg-9">
            <div class="user_block"><?php 
        		if (!$this->ion_auth->logged_in())
    		      {
                     echo "<ul class='nav nav-pills' id='user_block_self'><li><a href='".base_url()."auth/login/'>ВХОД</a></li><li><a href='".base_url()."auth/create_user'>РЕГИСТРАЦИЯ</a></li></ul>";
    		      }
                else
                  {
                    $user = $this->ion_auth->user()->row();
                    $user_account = $this->items_model->user_account($user->id);
                    echo "<ul class='nav nav-pills' id='user_block_self'><li><a class='underline' href='".base_url()."user_account'>".$user_account['balance']." сом</a></li><li><a class='underline' href='".base_url()."user_info'>".$user->email."</a></li><li><a href='".base_url()."logout'>ВЫХОД</a></li></ul>";
                  }?>
            </div>

        </div>
    </div>