<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['registrasi']            = 'c_registrasi';
$route['verify/(:any)/(:any)']  = 'c_registrasi/verify_register/$1/$2';
$route['default_controller']    = 'c_welcome';
$route['login']                 = 'c_login';
$route['logout']                = 'c_logout/logout';
$route['user']                 = 'c_user';

$route['404_override']          = '';

$route['translate_uri_dashes']  = FALSE;
