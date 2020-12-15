<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// --- Panel Dashboard---
$route['dashboard'] = 'dashboard/main';

// $route['register'] = 'dashboard/login_dashboard/register';
$route['login'] = 'dashboard/login_dashboard';
$route['forgotpassword'] = 'dashboard/login_dashboard/forgotpassword';
// $route['sendregister'] = 'dashboard/login_dashboard/send_register';
$route['auth'] = 'dashboard/login_dashboard/auth';
$route['formforgotpass'] = 'dashboard/login_dashboard/formforgotpass';
$route['logout'] = 'dashboard/login_dashboard/logout';

// data
$route['datagrafik'] = 'dashboard/main/viewgrafik';
$route['databukutamu'] = 'dashboard/main/viewbukutamu';
$route['addbukutamu'] = 'dashboard/main/addbukutamu';
$route['savebukutamu'] = 'dashboard/main/savebukutamu';
$route['editbukutamu/(:num)'] = 'dashboard/main/editbukutamu/$1';
$route['editjamkeluar/(:num)'] = 'dashboard/main/editjamkeluar/$1';
$route['updatebukutamu'] = 'dashboard/main/updatebukutamu';
$route['deletebukutamu/(:num)'] = 'dashboard/main/deletebukutamu/$1';
$route['lihatbukutamu'] = 'dashboard/main/lihatbukutamu';
$route['cetakbukutamu/(:any)'] = 'dashboard/main/cetakbukutamu/$1';
$route['cetak/(:any)'] = 'dashboard/main/cetak/$1';
$route['printPDF/(:any)'] = 'dashboard/main/printPDF/$1';
$route['exportbukutamu/(:any)'] = 'dashboard/main/exportbukutamu/$1';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
