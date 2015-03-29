<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Auth Lang - English
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*
* Author: Daniel Davis
*         @ourmaninjapan
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.09.2013
*
* Description:  English language file for Ion Auth example views
*
*/

// Errors
$lang['error_csrf'] = 'This form post did not pass our security checks.';

// Login
$lang['login_heading']         = 'Авторизация';
$lang['login_subheading']      = 'Уважаемый посетитель, для того чтобы войти на сайт пожалуйста авторизуйтесь, испольуя Ваш e-mail/логин и пароль ниже.';
$lang['login_identity_label']  = 'E-mail/Логин:';
$lang['login_password_label']  = 'Пароль:';
$lang['login_remember_label']  = 'Запомнить меня:';
$lang['login_submit_btn']      = 'Войти';
$lang['login_forgot_password'] = 'Забыли пароль?';

// Index
$lang['index_heading']           = 'Пользователи';
$lang['index_subheading']        = 'Ниже приведен список студентов.';
$lang['index_fname_th']          = 'Имя';
$lang['index_lname_th']          = 'Фамилия';
$lang['index_email_th']          = 'E-mail';
$lang['index_groups_th']         = 'Группа';
$lang['index_status_th']         = 'Статус';
$lang['index_action_th']         = 'Действие';
$lang['index_active_link']       = 'Активный';
$lang['index_inactive_link']     = 'Неактивный';
$lang['index_create_user_link']  = 'Создать нового пользователя';
$lang['index_create_group_link'] = 'Создать новую группу';

// Activate message
$lang['activate_message_heading']           = 'Регистрация';
$lang['activate_message_subheading']        = 'Данные для регистрации успешно введены';

// Login / Logout
$lang['login_successful'] 		  	 = 'Авторизация прошла успешно';
$lang['login_unsuccessful'] 		  	 = 'Логин/пароль не верен';
$lang['logout_successful'] 		 	 = 'Выход успешный';

// Deactivate User
$lang['deactivate_heading']                  = 'Деактивировать пользователя';
$lang['deactivate_subheading']               = 'Вы уверены что хотите деактивировать пользователя \'%s\'';
$lang['deactivate_confirm_y_label']          = 'Да:';
$lang['deactivate_confirm_n_label']          = 'Нет:';
$lang['deactivate_submit_btn']               = 'Подтвердить';
$lang['deactivate_validation_confirm_label'] = 'Подтверждение';
$lang['deactivate_validation_user_id_label'] = 'user ID';

// Create User
$lang['create_user_heading']                           = 'Зарегистрироваться';
$lang['create_user_subheading']                        = 'Пожалуйста введите данные о себе ниже.';
$lang['create_user_fname_label']                       = 'Имя:';
$lang['create_user_lname_label']                       = 'Фамилия:';
$lang['create_user_company_label']                     = 'Пол:';
$lang['create_user_email_label']                       = 'E-mail:';
$lang['create_user_phone_label']                       = 'Телефон:';
$lang['create_user_password_label']                    = 'Пароль:';
$lang['create_user_password_confirm_label']            = 'Подтверждение пароля:';
$lang['create_user_submit_btn']                        = 'Зарегистрироваться';
$lang['create_user_validation_fname_label']            = 'Имя';
$lang['create_user_validation_lname_label']            = 'Фамилия';
$lang['create_user_validation_email_label']            = 'E-mail адрес';
$lang['create_user_validation_phone1_label']           = 'Первая часть номера';
$lang['create_user_validation_phone2_label']           = 'Вторая часть номера';
$lang['create_user_validation_phone3_label']           = 'Третья часть номера';
$lang['create_user_validation_company_label']          = 'Имя группы';
$lang['create_user_validation_password_label']         = 'Пароль';
$lang['create_user_validation_password_confirm_label'] = 'Подтверждение пароля';
$lang['create_user_validation_birthdate_label']        = 'Дата рождения';
$lang['create_user_birthdate_label']        = 'Дата рождения';

// Edit User
$lang['edit_user_heading']                           = 'Изменить пользователя';
$lang['edit_user_subheading']                        = 'Пожалуйста введите данные о пользователе ниже.';
$lang['edit_user_fname_label']                       = 'Имя:';
$lang['edit_user_lname_label']                       = 'Фамилия:';
$lang['edit_user_company_label']                     = 'Имя группы:';
$lang['edit_user_email_label']                       = 'E-mail:';
$lang['edit_user_phone_label']                       = 'Телефон:';
$lang['edit_user_password_label']                    = 'Пароль: (если меняете пароль)';
$lang['edit_user_password_confirm_label']            = 'Подтверждение пароля: (если меняете пароль)';
$lang['edit_user_groups_heading']                    = 'Член группы';
$lang['edit_user_submit_btn']                        = 'Сохранить пользователя';
$lang['edit_user_validation_fname_label']            = 'Имя';
$lang['edit_user_validation_lname_label']            = 'Фамилия';
$lang['edit_user_validation_email_label']            = 'E-mail адрес';
$lang['edit_user_validation_phone1_label']           = 'Первая часть номера';
$lang['edit_user_validation_phone2_label']           = 'Вторая часть номера';
$lang['edit_user_validation_phone3_label']           = 'Третья часть номера';
$lang['edit_user_validation_company_label']          = 'Имя группы';
$lang['edit_user_validation_groups_label']           = 'Группы';
$lang['edit_user_validation_password_label']         = 'Пароль';
$lang['edit_user_validation_password_confirm_label'] = 'Подтверждение пароля';

// Create Group
$lang['create_group_title']                  = 'Создание группы';
$lang['create_group_heading']                = 'Создание группы';
$lang['create_group_subheading']             = 'Пожалуйста введите информацию о группе ниже.';
$lang['create_group_name_label']             = 'Название группы:';
$lang['create_group_desc_label']             = 'Описание:';
$lang['create_group_submit_btn']             = 'Созданить группу';
$lang['create_group_validation_name_label']  = 'Название группы';
$lang['create_group_validation_desc_label']  = 'Описание';

// Edit Group
$lang['edit_group_title']                  = 'Редактирование группы';
$lang['edit_group_saved']                  = 'Сохраненные группы';
$lang['edit_group_heading']                = 'Редактирование группы';
$lang['edit_group_subheading']             = 'Пожалуйста введите информацию о группе ниже.';
$lang['edit_group_name_label']             = 'Название группы:';
$lang['edit_group_desc_label']             = 'Описание:';
$lang['edit_group_submit_btn']             = 'Сохранить группу';
$lang['edit_group_validation_name_label']  = 'Название группы';
$lang['edit_group_validation_desc_label']  = 'Описание';

// Change Password
$lang['change_password_heading']                               = 'Смена пароля';
$lang['change_password_old_password_label']                    = 'Старый пароль:';
$lang['change_password_new_password_label']                    = 'Новый пароль (минимум %s символов):';
$lang['change_password_new_password_confirm_label']            = 'Подтвердите новый пароль:';
$lang['change_password_submit_btn']                            = 'Сменить';
$lang['change_password_validation_old_password_label']         = 'Старый пароль';
$lang['change_password_validation_new_password_label']         = 'Новый пароль';
$lang['change_password_validation_new_password_confirm_label'] = 'Подтвердите новый пароль';

// Forgot Password
$lang['forgot_password_heading']                 = 'Забыли пароль?';
$lang['forgot_password_subheading']              = 'Пожалуйста введите ваш %s чтобы мы могли отправить вам письмо для сброса действующего пароля.';
$lang['forgot_password_email_label']             = '%s:';
$lang['forgot_password_submit_btn']              = 'Подтвердить';
$lang['forgot_password_validation_email_label']  = 'Почтовый адрес';
$lang['forgot_password_username_identity_label'] = 'Логин';
$lang['forgot_password_email_identity_label']    = 'Email';


// Reset Password
$lang['reset_password_heading']                               = 'Смена пароля';
$lang['reset_password_new_password_label']                    = 'Новый пароль (минимум %s символов):';
$lang['reset_password_new_password_confirm_label']            = 'Подтвердите новый пароль:';
$lang['reset_password_submit_btn']                            = 'Сменить';
$lang['reset_password_validation_new_password_label']         = 'Новый пароль';
$lang['reset_password_validation_new_password_confirm_label'] = 'Подтвердите новый пароль';

// Activation Email
$lang['email_activate_heading']    = 'Активация аккаунта для %s';
$lang['email_activate_subheading'] = 'Пожалуйста пройдите по ссылке %s.';
$lang['email_activate_link']       = 'Активация аккаунта';
$lang['activation_heading']       = 'Активация учетной записи';
$lang['activation_subheading']       = 'Ваша учетная запись успешно активировано.';

// Forgot Password Email
$lang['email_forgot_password_heading']    = 'Сброс и смена пароля для %s';
$lang['email_forgot_password_subheading'] = 'Пожалуйста пройдите по ссылке чтобы %s и установить новый.';
$lang['email_forgot_password_link']       = 'Сбросить ваш пароль';

// New Password Email
$lang['email_new_password_heading']    = 'Новый пароль для %s';
$lang['email_new_password_subheading'] = 'Ваш пароль был сменен на: %s';

