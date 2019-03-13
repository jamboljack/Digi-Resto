<?php
defined('BASEPATH') or exit('No direct script access allowed');
$route['default_controller']   = 'home';
$route['login-user']           = 'front/login';
$route['kategori/(:any)']      = 'front/kategori/tipe/$1';
$route['menuorder/(:any)']     = 'front/menuorder/detail/$1';
$route['404_override']         = 'my_error';
$route['translate_uri_dashes'] = false;
