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
|	http://codeigniter.com/user_guide/general/routing.html
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
| When you set this option to TRUE, it will replace ALL dashes with
| underscores in the controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
/*
|   If you want remove language prefix from the URL use this routes instead of the routes.php file
|   For use this routs you should insert the below functions to controllers/Gbdev_general.php
|
    function _remap($method,$params){
        $params = array_merge(array('en'),$params);
        return call_user_func_array(array($this, $method), $params);
    }
    function _output($output){
        echo str_replace(array(base_url().'en/',base_url().'en'),base_url(),$output);
    }
|
*/
$route['default_controller'] = "Gbdev_general/index";
$route['404_override'] = '';

$route['page/([0-9]+)'] = 'Gbdev_general/page/$1';
$route['extension/([0-9]+)'] = 'Gbdev_general/extension_detail/$1';
$route['register'] = 'Gbdev_general/register';
$route['login'] = 'Gbdev_general/login';
$route['forget-password'] = 'Gbdev_general/forget_password';
$route['login/([a-zA-Z0-9-]+)'] = 'Gbdev_general/login/$1';
$route['active_account/([a-zA-Z0-9-]+)/([a-zA-Z0-9-]+)'] = 'Gbdev_general/reset_password/$1/$2';
$route['reset-password/([a-zA-Z0-9-]+)/([a-zA-Z0-9-]+)'] = 'Gbdev_general/reset_password/$1/$2';
$route['profile-password'] = 'Gbdev_general/profile_password';
$route['contact'] = 'Gbdev_general/contact';
$route['reservation'] = 'Gbdev_general/reservation';

$route['ajax/addcomment'] = 'Gbdev_general/extension_addcomment';
$route['search'] = 'Gbdev_general/search';
$route['new-feeds'] = 'Gbdev_general/rss';
$route['sitemap.xml'] = 'Gbdev_general/sitemap_xml';

$route['admin-sign']= "Gbdev_admin_sign/index";
$route['admin-sign/login']= "Gbdev_admin_sign/login";
$route['admin-sign/logout']= "Gbdev_admin_sign/logout";
$route['admin']= "Gbdev_general_admin/index";
$route['admin/(.*)']= "Gbdev_general_admin/$1";
$route['translate_uri_dashes'] = FALSE;
