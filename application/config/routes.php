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

// Loading Routes
$route["loading(/:num)?(/:num)?"]["GET"] = "LoadingController/index";
$route["loading/paginate(/:any)(/:num)"]["GET"] = "LoadingController/paginate";
$route["loading/create"]["GET"] = "LoadingController/create";
$route["loading/store"]["POST"] = "LoadingController/store";
$route["loading/show/(:any)"]["GET"] = "LoadingController/show/$1";
$route["loading/edit/(:any)"]["GET"] = "LoadingController/edit/$1";
$route["loading/update"]["POST"] = "LoadingController/update";
$route["loading/delete/(:any)"]["GET"] = "LoadingController/delete/$1";
$route["loading/restore/(:any)"]["GET"] = "LoadingController/restore/$1";

// Unloading Routes
$route["unloading(/:num)?(/:num)?"]["GET"] = "UnloadingController/index";
$route["unloading/paginate(/:any)(/:num)"]["GET"] = "UnloadingController/paginate";
$route["unloading/create"]["GET"] = "UnloadingController/create";
$route["unloading/store"]["POST"] = "UnloadingController/store";
$route["unloading/show/(:any)"]["GET"] = "UnloadingController/show/$1";
$route["unloading/edit/(:any)"]["GET"] = "UnloadingController/edit/$1";
$route["unloading/update"]["POST"] = "UnloadingController/update";
$route["unloading/delete/(:any)"]["GET"] = "UnloadingController/delete/$1";
$route["unloading/restore/(:any)"]["GET"] = "UnloadingController/restore/$1";

// Casher Routes
$route["casher(/:num)?(/:num)?"]["GET"] = "CasherController/index";
$route["casher/paginate(/:any)(/:num)"]["GET"] = "CasherController/paginate";
$route["casher/create"]["GET"] = "CasherController/create";
$route["casher/store"]["POST"] = "CasherController/store";
$route["casher/show/(:any)"]["GET"] = "CasherController/show/$1";
$route["casher/edit/(:any)"]["GET"] = "CasherController/edit/$1";
$route["casher/update"]["POST"] = "CasherController/update";
$route["casher/delete/(:any)"]["GET"] = "CasherController/delete/$1";
$route["casher/restore/(:any)"]["GET"] = "CasherController/restore/$1";

// Cash Routes
$route["cash(/:num)?(/:num)?"]["GET"] = "CashController/index";
$route["cash/paginate(/:any)(/:num)"]["GET"] = "CashController/paginate";
$route["cash/create"]["GET"] = "CashController/create";
$route["cash/store"]["POST"] = "CashController/store";
$route["cash/show/(:any)"]["GET"] = "CashController/show/$1";
$route["cash/edit/(:any)"]["GET"] = "CashController/edit/$1";
$route["cash/update"]["POST"] = "CashController/update";
$route["cash/delete/(:any)"]["GET"] = "CashController/delete/$1";
$route["cash/restore/(:any)"]["GET"] = "CashController/restore/$1";

// Pump Routes
$route["pump(/:num)?(/:num)?"]["GET"] = "PumpController/index";
$route["pump/paginate(/:any)(/:num)"]["GET"] = "PumpController/paginate";
$route["pump/create"]["GET"] = "PumpController/create";
$route["pump/store"]["POST"] = "PumpController/store";
$route["pump/show/(:any)"]["GET"] = "PumpController/show/$1";
$route["pump/edit/(:any)"]["GET"] = "PumpController/edit/$1";
$route["pump/update"]["POST"] = "PumpController/update";
$route["pump/delete/(:any)"]["GET"] = "PumpController/delete/$1";
$route["pump/restore/(:any)"]["GET"] = "PumpController/restore/$1";

// Pump Payment Routes
$route["pump-payment(/:num)?(/:num)?"]["GET"] = "PumpPaymentController/index";
$route["pump-payment/paginate(/:any)(/:num)"]["GET"] = "PumpPaymentController/paginate";
$route["pump-payment/create"]["GET"] = "PumpPaymentController/create";
$route["pump-payment/store"]["POST"] = "PumpPaymentController/store";
$route["pump-payment/show/(:any)"]["GET"] = "PumpPaymentController/show/$1";
$route["pump-payment/edit/(:any)"]["GET"] = "PumpPaymentController/edit/$1";
$route["pump-payment/update"]["POST"] = "PumpPaymentController/update";
$route["pump-payment/delete/(:any)"]["GET"] = "PumpPaymentController/delete/$1";
$route["pump-payment/restore/(:any)"]["GET"] = "PumpPaymentController/restore/$1";

// Order Routes
$route["order(/:num)?(/:num)?"]["GET"] = "OrderController/index";
$route["order/paginate(/:any)(/:num)"]["GET"] = "OrderController/paginate";
$route["order/create"]["GET"] = "OrderController/create";
$route["order/store"]["POST"] = "OrderController/store";
$route["order/show/(:any)"]["GET"] = "OrderController/show/$1";
$route["order/edit/(:any)"]["GET"] = "OrderController/edit/$1";
$route["order/update"]["POST"] = "OrderController/update";
$route["order/delete/(:any)"]["GET"] = "OrderController/delete/$1";
$route["order/restore/(:any)"]["GET"] = "OrderController/restore/$1";

// Loading Point Routes
$route["loading-point(/:num)?(/:num)?"]["GET"] = "LoadingPointController/index";
$route["loading-point/paginate(/:any)(/:num)"]["GET"] = "LoadingPointController/paginate";
$route["loading-point/create"]["GET"] = "LoadingPointController/create";
$route["loading-point/store"]["POST"] = "LoadingPointController/store";
$route["loading-point/show/(:any)"]["GET"] = "LoadingPointController/show/$1";
$route["loading-point/edit/(:any)"]["GET"] = "LoadingPointController/edit/$1";
$route["loading-point/update"]["POST"] = "LoadingPointController/update";
$route["loading-point/delete/(:any)"]["GET"] = "LoadingPointController/delete/$1";
$route["loading-point/restore/(:any)"]["GET"] = "LoadingPointController/restore/$1";

// Unloading Point Routes
$route["unloading-point(/:num)?(/:num)?"]["GET"] = "UnloadingPointController/index";
$route["unloading-point/paginate(/:any)(/:num)"]["GET"] = "UnloadingPointController/paginate";
$route["unloading-point/create"]["GET"] = "UnloadingPointController/create";
$route["unloading-point/store"]["POST"] = "UnloadingPointController/store";
$route["unloading-point/show/(:any)"]["GET"] = "UnloadingPointController/show/$1";
$route["unloading-point/edit/(:any)"]["GET"] = "UnloadingPointController/edit/$1";
$route["unloading-point/update"]["POST"] = "UnloadingPointController/update";
$route["unloading-point/delete/(:any)"]["GET"] = "UnloadingPointController/delete/$1";
$route["unloading-point/restore/(:any)"]["GET"] = "UnloadingPointController/restore/$1";

