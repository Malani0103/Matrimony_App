<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->resource('api/user');
$routes->get('app/sample', 'Sample::index');
$routes->get('app/demo', 'Demo::my_function');
$routes->get('app/RegisterFile','RegisterFile::index');
$routes->post('api/adduser', 'UserApi::addUser');
    $routes->resource('api/apiexecutefile');
 $routes->resource('api/test');
 
 $routes->resource('api/register');
    $routes->post('api/userregister', 'Api\UserRegister::create');
    $routes->get('insert-user', 'UserController::create');


$routes->group('', ['filter' => 'cors'], static function (RouteCollection $routes): void {
    $routes->options('api/(:any)', static function () {});
});


// ... (rest of your routes)




