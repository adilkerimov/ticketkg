<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
| 	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['scaffolding_trigger'] = 'scaffolding';
|
| This route lets you set a "secret" word that will trigger the
| scaffolding feature for added security. Note: Scaffolding must be
| enabled in the controller in which you intend to use it.   The reserved 
| routes must come before any wildcard or regular expression routes.
|
*/

$route['default_controller'] = "main";
$route['item/(:num)'] = 'main/item/$1';
$route['catalog/(:any)'] = 'main/catalog/$1';
$route['view/(:any)'] = 'main/view/$1';
$route['zavedenie/(:any)'] = 'main/zavedenie/$1';
$route['controll/(:any)'] = 'main/controll/$1';


$route['cart'] = 'main/cart';
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';
$route['forgot_password'] = 'auth/forgot_password';
$route['registration'] = 'auth/create_user';
$route['login_ajax'] = 'auth/login_ajax';


$route['about'] = 'pages/about';
$route['agreement'] = 'pages/agreement';
$route['rules'] = 'pages/rules';
$route['squad'] = 'pages/squad';
$route['help'] = 'pages/help';
$route['howitworks'] = 'pages/howitworks';
$route['faq'] = 'pages/faq';
$route['support'] = 'pages/support';
$route['partners'] = 'pages/partners';
$route['addcompany'] = 'pages/addcompany';
$route['donecompany'] = 'pages/donecompany';
$route['contact'] = 'pages/contact';
$route['user_info'] = 'pages/user_info';
$route['user_account'] = 'pages/user_account';
$route['withdrawal'] = 'pages/withdrawal';
$route['howtowin'] = 'pages/howtowin';
$route['journal'] = 'pages/journal';
$route['journal/(:num)']  = 'pages/journal/$1';

$route['company/(:num)'] = 'work/company/$1';



//$route['welcome/company'] = 'company';
//$route['welcome/company/(:num)'] = 'welcome/company/$1';
$route['scaffolding_trigger'] = "";


/* End of file routes.php */
/* Location: ./system/application/config/routes.php */