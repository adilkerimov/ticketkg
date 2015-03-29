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
$lang['login_heading']         = '�����������';
$lang['login_subheading']      = '��������� ����������, ��� ���� ����� ����� �� ���� ���������� �������������, �������� ��� e-mail/����� � ������ ����.';
$lang['login_identity_label']  = 'E-mail/�����:';
$lang['login_password_label']  = '������:';
$lang['login_remember_label']  = '��������� ����:';
$lang['login_submit_btn']      = '�����';
$lang['login_forgot_password'] = '������ ������?';

// Index
$lang['index_heading']           = '������������';
$lang['index_subheading']        = '���� �������� ������ ���������.';
$lang['index_fname_th']          = '���';
$lang['index_lname_th']          = '�������';
$lang['index_email_th']          = 'E-mail';
$lang['index_groups_th']         = '������';
$lang['index_status_th']         = '������';
$lang['index_action_th']         = '��������';
$lang['index_active_link']       = '��������';
$lang['index_inactive_link']     = '����������';
$lang['index_create_user_link']  = '������� ������ ������������';
$lang['index_create_group_link'] = '������� ����� ������';

// Login / Logout
$lang['login_successful'] 		  	 = '����������� ������ �������';
$lang['login_unsuccessful'] 		  	 = '�����/������ �� �����';
$lang['logout_successful'] 		 	 = '����� ��������';

// Deactivate User
$lang['deactivate_heading']                  = '�������������� ������������';
$lang['deactivate_subheading']               = '�� ������� ��� ������ �������������� ������������ \'%s\'';
$lang['deactivate_confirm_y_label']          = '��:';
$lang['deactivate_confirm_n_label']          = '���:';
$lang['deactivate_submit_btn']               = '�����������';
$lang['deactivate_validation_confirm_label'] = '�������������';
$lang['deactivate_validation_user_id_label'] = 'user ID';

// Create User
$lang['create_user_heading']                           = '������� ������������';
$lang['create_user_subheading']                        = '���������� ������� ������ � ������������ ����.';
$lang['create_user_fname_label']                       = '���:';
$lang['create_user_lname_label']                       = '�������:';
$lang['create_user_company_label']                     = '���������:';
$lang['create_user_email_label']                       = 'E-mail:';
$lang['create_user_phone_label']                       = '�������:';
$lang['create_user_password_label']                    = '������:';
$lang['create_user_password_confirm_label']            = '������������� ������:';
$lang['create_user_submit_btn']                        = '������� ������������';
$lang['create_user_validation_fname_label']            = '���';
$lang['create_user_validation_lname_label']            = '�������';
$lang['create_user_validation_email_label']            = 'E-mail �����';
$lang['create_user_validation_phone1_label']           = '������ ����� ������';
$lang['create_user_validation_phone2_label']           = '������ ����� ������';
$lang['create_user_validation_phone3_label']           = '������ ����� ������';
$lang['create_user_validation_company_label']          = '��� ����������';
$lang['create_user_validation_password_label']         = '������';
$lang['create_user_validation_password_confirm_label'] = '������������� ������';

// Edit User
$lang['edit_user_heading']                           = '�������� ������������';
$lang['edit_user_subheading']                        = '���������� ������� ������ � ������������ ����.';
$lang['edit_user_fname_label']                       = '���:';
$lang['edit_user_lname_label']                       = '�������:';
$lang['edit_user_company_label']                     = '��� ����������:';
$lang['edit_user_email_label']                       = 'E-mail:';
$lang['edit_user_phone_label']                       = '�������:';
$lang['edit_user_password_label']                    = '������: (���� ������� ������)';
$lang['edit_user_password_confirm_label']            = '������������� ������: (���� ������� ������)';
$lang['edit_user_groups_heading']                    = '���� ������';
$lang['edit_user_submit_btn']                        = '��������� ������������';
$lang['edit_user_validation_fname_label']            = '���';
$lang['edit_user_validation_lname_label']            = '�������';
$lang['edit_user_validation_email_label']            = 'E-mail �����';
$lang['edit_user_validation_phone1_label']           = '������ ����� ������';
$lang['edit_user_validation_phone2_label']           = '������ ����� ������';
$lang['edit_user_validation_phone3_label']           = '������ ����� ������';
$lang['edit_user_validation_company_label']          = '��� ����������';
$lang['edit_user_validation_groups_label']           = '������';
$lang['edit_user_validation_password_label']         = '������';
$lang['edit_user_validation_password_confirm_label'] = '������������� ������';

// Create Group
$lang['create_group_title']                  = '�������� ������';
$lang['create_group_heading']                = '�������� ������';
$lang['create_group_subheading']             = '���������� ������� ���������� � ������ ����.';
$lang['create_group_name_label']             = '�������� ������:';
$lang['create_group_desc_label']             = '��������:';
$lang['create_group_submit_btn']             = '��������� ������';
$lang['create_group_validation_name_label']  = '�������� ������';
$lang['create_group_validation_desc_label']  = '��������';

// Edit Group
$lang['edit_group_title']                  = '�������������� ������';
$lang['edit_group_saved']                  = '����������� ������';
$lang['edit_group_heading']                = '�������������� ������';
$lang['edit_group_subheading']             = '���������� ������� ���������� � ������ ����.';
$lang['edit_group_name_label']             = '�������� ������:';
$lang['edit_group_desc_label']             = '��������:';
$lang['edit_group_submit_btn']             = '��������� ������';
$lang['edit_group_validation_name_label']  = '�������� ������';
$lang['edit_group_validation_desc_label']  = '��������';

// Change Password
$lang['change_password_heading']                               = 'Change Password';
$lang['change_password_old_password_label']                    = 'Old Password:';
$lang['change_password_new_password_label']                    = 'New Password (at least %s characters long):';
$lang['change_password_new_password_confirm_label']            = 'Confirm New Password:';
$lang['change_password_submit_btn']                            = 'Change';
$lang['change_password_validation_old_password_label']         = 'Old Password';
$lang['change_password_validation_new_password_label']         = 'New Password';
$lang['change_password_validation_new_password_confirm_label'] = 'Confirm New Password';

// Forgot Password
$lang['forgot_password_heading']                 = 'Forgot Password';
$lang['forgot_password_subheading']              = 'Please enter your %s so we can send you an email to reset your password.';
$lang['forgot_password_email_label']             = '%s:';
$lang['forgot_password_submit_btn']              = 'Submit';
$lang['forgot_password_validation_email_label']  = 'Email Address';
$lang['forgot_password_username_identity_label'] = 'Username';
$lang['forgot_password_email_identity_label']    = 'Email';


// Reset Password
$lang['reset_password_heading']                               = 'Change Password';
$lang['reset_password_new_password_label']                    = 'New Password (at least %s characters long):';
$lang['reset_password_new_password_confirm_label']            = 'Confirm New Password:';
$lang['reset_password_submit_btn']                            = 'Change';
$lang['reset_password_validation_new_password_label']         = 'New Password';
$lang['reset_password_validation_new_password_confirm_label'] = 'Confirm New Password';

// Activation Email
$lang['email_activate_heading']    = 'Activate account for %s';
$lang['email_activate_subheading'] = 'Please click this link to %s.';
$lang['email_activate_link']       = 'Activate Your Account';

// Forgot Password Email
$lang['email_forgot_password_heading']    = 'Reset Password for %s';
$lang['email_forgot_password_subheading'] = 'Please click this link to %s.';
$lang['email_forgot_password_link']       = 'Reset Your Password';

// New Password Email
$lang['email_new_password_heading']    = 'New Password for %s';
$lang['email_new_password_subheading'] = 'Your password has been reset to: %s';

