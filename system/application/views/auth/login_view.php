<div id="content" class="row">
      <div id="featured" class="col-md-9">
<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?><br />

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p><br />

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p><br />

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p><br />


  <p><?php $attributes = 'class = "button"'; echo form_submit('submit', lang('login_submit_btn'), $attributes);?></p>
<br />
<?php echo form_close();?>

<p><a href="<?=base_url();?>auth/forgot_password"><?php echo lang('login_forgot_password');?></a></p>

</div>

</div>
</div>
