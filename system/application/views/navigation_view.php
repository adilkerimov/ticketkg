<nav class="navbar navbar-default" role="navigation"> <!-- navbar-fixed-top -->
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <div class="navbar-left">
      <a href="<?=base_url();?>" class="navbar-brand visible-xs"><div class="logo_m"><img src="<?=base_url()?>img/logo.png"></div></a>
      </div>
      <div class="navbar-right">
      <a href="<?=base_url()?>login" class="visible-xs"><img width="20" src="<?=base_url()?>img/user.png" class="left"></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
      </button>
      </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1">
      <?php
      if(empty($page_id)){
      $link_act = ''; 
      }
      elseif(isset($items[0]['id_third_menu'])){
      $link_act = $this->items_model->get_menu_by_id($items[0]['id_third_menu']);  
      }
      elseif(isset($main_info['id_third_menu'])){
      $link_act = $this->items_model->get_menu_by_id($main_info['id_third_menu']);    
      }
      else{
      $link_act = '';  
      } ?>
      <ul class="nav nav-justified">
		      <li<?php if(!isset($page_id)){echo " class='active'";}?>><a href="<?=base_url()?>">ГЛАВНАЯ</a></li>
          <?php foreach ($menu_third as $menu_t):?>
          <?php $menu_up = mb_strtoupper($menu_t['menu']);?>
          <li<?php if(empty($page_id)){} elseif(isset($page_none)){} elseif(empty($link_act)){if($page_id==$menu_t['link']){echo " class='active'";}} elseif($link_act['link'] == $menu_t['link']){echo " class='active'";} ?>><a href="<?=base_url();?>view/<?=$menu_t['link'];?>"><?=$menu_up;?></a></li>
          <?php endforeach;?>
	  </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>