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
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home/index";
$route['404_override'] = 'home/notfound';

$route['haanhdon'] = "admin/index";
$route['ve-tranh-gao-viet'] = "home/education";
$route['tin-tuc'] = "home/news/all";
$route['tin-tuc/(:num)'] = "home/news/all/(:num)";
$route['tin-tuc/([a-zA-Z0-9-_]+)-(:num)'] = "home/news/index";
$route['huong-dan/([a-zA-Z0-9-_]+)'] = "home/intro";
$route['([a-zA-Z0-9-_]+)-(:num)'] = "home/product/view/(:num)";
$route['([a-zA-Z0-9-_]+)'] = "home/product/index/(:num)";
$route['([a-zA-Z0-9-_]+)/(:num)'] = "home/product/index/(:num)/(:num)";
$route['loai-tranh/([a-zA-Z0-9-_]+)'] = "home/category/index";
$route['loai-tranh/([a-zA-Z0-9-_]+)/(:num)'] = "home/category/index/(:num)";
$route['vi-tri/([a-zA-Z0-9-_]+)'] = "home/category/position";
$route['vi-tri/([a-zA-Z0-9-_]+)/(:num)'] = "home/category/position/(:num)";
$route['tim-kiem'] = "home/search/index";
$route['lien-he'] = "home/contact";
$route['nghe-thuat-tranh-gao'] = "home/content";
$route['nghe-thuat-tranh-gao/([a-zA-Z0-9-_]+)-(:num)'] = "home/content/view";
$route['tranh-co-san'] = "home/product/available";
$route['qua-tang-cho-nguoi-nuoc-ngoai'] = "home/news/gift";

/* End of file routes.php */
/* Location: ./application/config/routes.php */