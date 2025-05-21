<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = "login";

$route['add-design-post'] = 'admin/dashboard';

$route['404_override'] = 'login/four_zero_four';

$route['translate_uri_dashes'] = FALSE;
