<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'wmeat';
/* Controller Frontend - Pembuka*/
$route['main'] = "Main/index";
$route['homes'] = "Wmeat/index";

/* Controller Frontend - Penutup*/
$route['syarat-ketentuan/(:any)'] = "note/detail/$1";

/* Controller Default - Pembuka*/
$route['404_override'] = 'Notfound';
$route['translate_uri_dashes'] = FALSE;
$route['petacrawl\.xml'] = "petacrawl";
/* Controller Default - Penutup*/
