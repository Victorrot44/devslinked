<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->group('admin', function($routes){
	
	$routes->get('/', 'Administracion\DashboardController::index');
	$routes->get('dashboard', 'Administracion\DashboardController::index');

	$routes->group('company', function($routes){
		$routes->get('/', 'Administracion\CompaniaController::index');
		$routes->post('/', 'Administracion\CompaniaController::index');
		$routes->get('(:num)', 'Administracion\CompaniaController::registroPorId/$1');
		$routes->get('table', 'Administracion\CompaniaController::tabla');
		$routes->put('(:num)', 'Administracion\CompaniaController::actualizarRegistro/$1');
		$routes->delete('(:num)', 'Administracion\CompaniaController::eliminarRegistro/$1');
	});

	$routes->group('catalogs', function($routes){
		
		$routes->group('programming-languages', function($routes){
			$routes->get('all', 'Catalogos\ProgrammingLanguageController::getAll');
			$routes->get('/', 'Catalogos\ProgrammingLanguageController::index');
			$routes->post('/', 'Catalogos\ProgrammingLanguageController::index');
			$routes->get('(:num)', 'Catalogos\ProgrammingLanguageController::registroPorId/$1');
			$routes->put('(:num)', 'Catalogos\ProgrammingLanguageController::actualizarRegistro/$1');
			$routes->delete('(:num)', 'Catalogos\ProgrammingLanguageController::eliminarRegistro/$1');
			$routes->get('table', 'Catalogos\ProgrammingLanguageController::tabla');
			$routes->get('all', 'Catalogos\ProgrammingLanguageController::getAll');
		});

		$routes->group('frameworks', function($routes){
			$routes->get('/', 'Catalogos\FrameworkController::index');
			$routes->post('/', 'Catalogos\FrameworkController::index');
			$routes->get('(:num)', 'Catalogos\FrameworkController::registroPorId/$1');
			$routes->put('(:num)', 'Catalogos\FrameworkController::actualizarRegistro/$1');
			$routes->delete('(:num)', 'Catalogos\FrameworkController::eliminarRegistro/$1');
			$routes->get('table', 'Catalogos\FrameworkController::tabla');
		});

		$routes->group('databases', function($routes){
			$routes->get('/', 'Catalogos\DatabasesController::index');
			$routes->post('/', 'Catalogos\DatabasesController::index');
			$routes->get('(:num)', 'Catalogos\DatabasesController::registroPorId/$1');
			$routes->put('(:num)', 'Catalogos\DatabasesController::actualizarRegistro/$1');
			$routes->delete('(:num)', 'Catalogos\DatabasesController::eliminarRegistro/$1');
			$routes->get('table', 'Catalogos\DatabasesController::tabla');
		});

		$routes->group('operating-systems', function($routes){
			$routes->get('/', 'Catalogos\OperatingSystemController::index');
			$routes->post('/', 'Catalogos\OperatingSystemController::index');
			$routes->get('(:num)', 'Catalogos\OperatingSystemController::registroPorId/$1');
			$routes->put('(:num)', 'Catalogos\OperatingSystemController::actualizarRegistro/$1');
			$routes->delete('(:num)', 'Catalogos\OperatingSystemController::eliminarRegistro/$1');
			$routes->get('table', 'Catalogos\OperatingSystemController::tabla');
		});

		$routes->group('softwares', function($routes){});
		$routes->group('tipos-de-softwares', function($routes){});
		$routes->group('meto', function($routes){});
		$routes->group('bases-de-datos', function($routes){});

	});
});

$routes->group('company', function($routes){

	$routes->get('/', 'Compania\DashboardController::index');
	$routes->get('dashboard', 'Compania\DashboardController::index');

	$routes->group('personal', function($routes){
		$routes->get('/', 'Compania\PersonalController::index');
		$routes->post('/', 'Compania\PersonalController::index');
		$routes->post('email-unique', 'Compania\PersonalController::correoUnico');
		$routes->get('table', 'Compania\PersonalController::tabla');
		$routes->get('(:num)', 'Compania\PersonalController::registroPorId/$1');
		$routes->put('(:num)', 'Compania\PersonalController::actualizarRegistro/$1');
		$routes->delete('(:num)', 'Compania\PersonalController::eliminarRegistro/$1');
	});
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
