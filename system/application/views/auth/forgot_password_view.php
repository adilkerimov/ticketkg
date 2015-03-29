<div id="container">
<div class="clear mymarg"></div>

<div class="window_simp">
<h1><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>
<div>
<?php echo form_open("auth/forgot_password");?>

      <p>
      	<label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label> <br />
      	<?php echo form_input($email);?>
      </p>
      <br />
      <br />
      <p><?php $attributes = 'class = "button_r radius"'; echo form_submit('submit', lang('create_user_submit_btn'), $attributes);?></p>

<?php echo form_close();?>
<br />
</div>
</div>

<div class="clear"></div>

</div>