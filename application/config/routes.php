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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// User Authentication Routes
$route["register"]["POST"] = "UserController/register";
$route["login"]["POST"] = "UserController/login";
$route["logout"]["GET"] = "UserController/logout";


// Vehicle Routes
$route["vehicle(/:num)?(/:num)?"]["GET"] = "VehicleController/index";
$route["vehicle/paginate(/:any)(/:num)"]["GET"] = "VehicleController/paginate";
$route["vehicle/create"]["GET"] = "VehicleController/create";
$route["vehicle/store"]["POST"] = "VehicleController/store";
$route["vehicle/show/(:any)"]["GET"] = "VehicleController/show/$1";
$route["vehicle/edit/(:any)"]["GET"] = "VehicleController/edit/$1";
$route["vehicle/update"]["POST"] = "VehicleController/update";
$route["vehicle/delete/(:any)"]["GET"] = "VehicleController/delete/$1";
$route["vehicle/restore/(:any)"]["GET"] = "VehicleController/restore/$1";


// Broker Routes
$route["broker(/:num)?(/:num)?"]["GET"] = "BrokerController/index";
$route["broker/paginate(/:any)(/:num)"]["GET"] = "BrokerController/paginate";
$route["broker/create"]["GET"] = "BrokerController/create";
$route["broker/store"]["POST"] = "BrokerController/store";
$route["broker/show/(:any)"]["GET"] = "BrokerController/show/$1";
$route["broker/edit/(:any)"]["GET"] = "BrokerController/edit/$1";
$route["broker/update"]["POST"] = "BrokerController/update";
$route["broker/delete/(:any)"]["GET"] = "BrokerController/delete/$1";
$route["broker/restore/(:any)"]["GET"] = "BrokerController/restore/$1";

// Client Routes
$route["client(/:num)?(/:num)?"]["GET"] = "ClientController/index";
$route["client/paginate(/:any)(/:num)"]["GET"] = "ClientController/paginate";
$route["client/create"]["GET"] = "ClientController/create";
$route["client/store"]["POST"] = "ClientController/store";
$route["client/show/(:any)"]["GET"] = "ClientController/show/$1";
$route["client/edit/(:any)"]["GET"] = "ClientController/edit/$1";
$route["client/update"]["POST"] = "ClientController/update";
$route["client/delete/(:any)"]["GET"] = "ClientController/delete/$1";
$route["client/restore/(:any)"]["GET"] = "ClientController/restore/$1";

// Material Routes
$route["material(/:num)?(/:num)?"]["GET"] = "MaterialController/index";
$route["material/paginate(/:any)(/:num)"]["GET"] = "MaterialController/paginate";
$route["material/create"]["GET"] = "MaterialController/create";
$route["material/store"]["POST"] = "MaterialController/store";
$route["material/show/(:any)"]["GET"] = "MaterialController/show/$1";
$route["material/edit/(:any)"]["GET"] = "MaterialController/edit/$1";
$route["material/update"]["POST"] = "MaterialController/update";
$route["material/delete/(:any)"]["GET"] = "MaterialController/delete/$1";
$route["material/restore/(:any)"]["GET"] = "MaterialController/restore/$1";

// Place Routes
$route["place(/:num)?(/:num)?"]["GET"] = "PlaceController/index";
$route["place/paginate(/:any)(/:num)"]["GET"] = "PlaceController/paginate";
$route["place/create"]["GET"] = "PlaceController/create";
$route["place/store"]["POST"] = "PlaceController/store";
$route["place/show/(:any)"]["GET"] = "PlaceController/show/$1";
$route["place/edit/(:any)"]["GET"] = "PlaceController/edit/$1";
$route["place/update"]["POST"] = "PlaceController/update";
$route["place/delete/(:any)"]["GET"] = "PlaceController/delete/$1";
$route["place/restore/(:any)"]["GET"] = "PlaceController/restore/$1";

