<div id="content" class="row">
      <div id="featured" class="col-md-9">
            <h1><?php echo lang('create_user_heading');?></h1>
            <p><?php echo lang('create_user_subheading');?></p>

            <div id="infoMessage"><?php echo $message;?></div><br />


      <?php echo form_open("registration");?>

      <p>
            <?php echo lang('create_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($first_name);?>
      </p>

      <p>
            <?php echo lang('create_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($last_name);?>
      </p>

      <p>
            <?php echo lang('create_user_company_label', 'company');?> <br />
            <!-- <?php echo form_input($company);?> -->
            <select name="company">
            <option value="мужской" <?php echo set_select('myselect', 'one', TRUE); ?> >Мужской</option>
            <option value="женский" <?php echo set_select('myselect', 'two'); ?> >Женский</option>
            </select>
      </p>

      <p>
            <?php echo lang('create_user_email_label', 'email');?> <br />
            <?php echo form_input($email);?>
      </p>

      <p>
            <?php echo lang('create_user_phone_label', 'phone');?> <br />
            <?php echo form_input($phone);?>
      </p>

      <p>
            <?php echo lang('create_user_password_label', 'password');?> <br />
            <?php echo form_input($password);?>
      </p>

      <p>
            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
            <?php echo form_input($password_confirm);?>
      </p>
      
       <p>
            <?php echo lang('create_user_birthdate_label', 'birthdate');?> <br />
            <?php echo form_input($birthdate,'2013-01-01');?>
      </p><br />
      <br />
      <p><?php $attributes = 'class = "button_r radius"'; echo form_submit('submit', lang('create_user_submit_btn'), $attributes);?></p>
      <br />
      <?php echo form_close();?>  

      <p>Нажимая кнопку «Зарегистрироваться», Вы принимаете условия <a style=" border-bottom: 1px dashed;" href="<?=base_url();?>agreement"><strong>Пользовательского соглашения</strong></a>.
      </p>
      </div>
   



<br /><br />




</div>

</div>