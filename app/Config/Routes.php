<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::loginProcess');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::registerProcess');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/mood/add', 'Mood::add');
$routes->post('/mood/save', 'Mood::save');
$routes->get('/mood/history', 'Mood::history');
$routes->get('/mood/edit/(:num)', 'Mood::edit/$1');
$routes->post('/mood/update/(:num)', 'Mood::update/$1');
$routes->get('/mood/delete/(:num)', 'Mood::delete/$1');
$routes->get('/mood/success', 'Mood::success');
$routes->get('/logout', 'Auth::logout');
