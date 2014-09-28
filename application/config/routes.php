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



$route['default_controller'] = "en/show";

$route['404_override'] 		 = "en/show/memento404";



$route['(:any)/agents'] = "(:any)/show/agent";

$route['(:any)/advancesearch'] = "(:any)/show/search";

$route['(:any)/results/(:any)'] = "(:any)/show/result/$2";

$route['(:any)/tags/(:any)'] = "(:any)/show/tag/$2";

// http://127.0.0.1/condivisi/test/It/p/admin
$route['(:any)/p/(:any)'] = "(:any)/show/agentproperties/$2";




$route['(:any)/property/(:any)'] = "(:any)/show/detail/$2";

$route['(:any)/embed/(:any)'] = "(:any)/show/embed/$2";



$route['(:any)/meme/(:any)'] = "(:any)/show/detail";

$route['(:any)/video/(:any)'] = "(:any)/tv/v";



/* End of file routes.php */

/* Location: ./application/config/routes.php */