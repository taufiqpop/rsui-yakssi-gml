<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Home
$routes->get('/', 'Home::index');
$routes->get('/index', 'Home::index');
$routes->add('/contact/save', 'Home::contact');
$routes->get('/doctors', 'Home::doctors');

// Admin
$routes->add('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/detail/(:segment)', 'Admin::detail/$1', ['filter' => 'role:admin']);
$routes->delete('/user/admin/(:num)', 'Admin::delete/$1', ['filter' => 'role:admin']);

// User
$routes->get('/user', 'User::index', ['filter' => 'role:admin, user']);
$routes->get('/profile', 'User::profile', ['filter' => 'role:admin, user']);
$routes->get('/user/edit/(:segment)', 'User::edit/$1', ['filter' => 'role:admin, user']);
$routes->add('/user/update/(:segment)', 'User::update/$1', ['filter' => 'role:admin, user']);

// Password
$routes->get('/password/(:num)', 'ChangePassword::index/$1', ['filter' => 'role:admin, user']);
$routes->add('/password/setPassword/(:num)', 'ChangePassword::setPassword/$1', ['filter' => 'role:admin, user']);

// Pesan
$routes->add('/pesan', 'Pesan::index', ['filter' => 'role:admin, user']);

// Settings
$routes->get('/control/settings', 'Settings::index', ['filter' => 'role:admin, user']);
$routes->add('/settings/update/(:segment)', 'Settings::update/$1', ['filter' => 'role:admin']);

// Pasien
$routes->add('/control/pasien', 'Pasien::index', ['filter' => 'role:admin, user']);
$routes->get('/control/pasien/form', 'Pasien::form', ['filter' => 'role:admin, user']);
$routes->add('/pasien/insert', 'Pasien::insert', ['filter' => 'role:admin, user']);
$routes->get('/control/pasien/edit/(:segment)', 'Pasien::edit/$1', ['filter' => 'role:admin, user']);
$routes->add('/pasien/update/(:segment)', 'Pasien::update/$1', ['filter' => 'role:admin, user']);
$routes->get('/control/pasien/detail/(:segment)', 'Pasien::detail/$1', ['filter' => 'role:admin, user']);
$routes->delete('/control/pasien/(:num)', 'Pasien::delete/$1', ['filter' => 'role:admin, user']);

// About
$routes->add('/control/about', 'About::index', ['filter' => 'role:admin, user']);
$routes->add('/about/update/(:segment)', 'About::update/$1', ['filter' => 'role:admin, user']);

// Beranda
$routes->add('/control/beranda', 'Beranda::index', ['filter' => 'role:admin, user']);
$routes->get('/control/beranda/form', 'Beranda::form', ['filter' => 'role:admin, user']);
$routes->add('/beranda/insert', 'Beranda::insert', ['filter' => 'role:admin, user']);
$routes->get('/control/beranda/edit/(:segment)', 'Beranda::edit/$1', ['filter' => 'role:admin, user']);
$routes->add('/beranda/update/(:segment)', 'Beranda::update/$1', ['filter' => 'role:admin, user']);
$routes->get('/control/beranda/detail/(:segment)', 'Beranda::detail/$1', ['filter' => 'role:admin, user']);
$routes->delete('/control/beranda/(:num)', 'Beranda::delete/$1', ['filter' => 'role:admin, user']);

// Dokter
$routes->add('/control/dokter', 'Dokter::index', ['filter' => 'role:admin, user']);
$routes->get('/control/dokter/form', 'Dokter::form', ['filter' => 'role:admin, user']);
$routes->add('/dokter/insert', 'Dokter::insert', ['filter' => 'role:admin, user']);
$routes->get('/control/dokter/edit/(:segment)', 'Dokter::edit/$1', ['filter' => 'role:admin, user']);
$routes->add('/dokter/update/(:segment)', 'Dokter::update/$1', ['filter' => 'role:admin, user']);
$routes->delete('/control/dokter/(:num)', 'Dokter::delete/$1', ['filter' => 'role:admin, user']);

// Pelayanan
$routes->add('/control/pelayanan', 'Pelayanan::index', ['filter' => 'role:admin, user']);
$routes->get('/control/pelayanan/form', 'Pelayanan::form', ['filter' => 'role:admin, user']);
$routes->add('/pelayanan/insert', 'Pelayanan::insert', ['filter' => 'role:admin, user']);
$routes->get('/control/pelayanan/edit/(:segment)', 'Pelayanan::edit/$1', ['filter' => 'role:admin, user']);
$routes->add('/pelayanan/update/(:segment)', 'Pelayanan::update/$1', ['filter' => 'role:admin, user']);
$routes->get('/control/pelayanan/detail/(:segment)', 'Pelayanan::detail/$1', ['filter' => 'role:admin, user']);
$routes->delete('/control/pelayanan/(:num)', 'Pelayanan::delete/$1', ['filter' => 'role:admin, user']);

// LogoFA
$routes->add('/control/logofa', 'LogoFA::index', ['filter' => 'role:admin, user']);
$routes->add('/logofa/insert', 'LogoFA::insert', ['filter' => 'role:admin, user']);
$routes->get('/control/logofa/edit/(:segment)', 'LogoFA::edit/$1', ['filter' => 'role:admin, user']);
$routes->add('/logofa/update/(:segment)', 'LogoFA::update/$1', ['filter' => 'role:admin, user']);
$routes->delete('/control/logofa/(:num)', 'LogoFA::delete/$1', ['filter' => 'role:admin, user']);

// Poliklinik
$routes->add('/control/poliklinik', 'Poliklinik::index', ['filter' => 'role:admin, user']);
$routes->get('/control/poliklinik/form', 'Poliklinik::form', ['filter' => 'role:admin, user']);
$routes->add('/poliklinik/insert', 'Poliklinik::insert', ['filter' => 'role:admin, user']);
$routes->get('/control/poliklinik/edit/(:segment)', 'Poliklinik::edit/$1', ['filter' => 'role:admin, user']);
$routes->add('/poliklinik/update/(:segment)', 'Poliklinik::update/$1', ['filter' => 'role:admin, user']);
$routes->get('/control/poliklinik/detail/(:segment)', 'Poliklinik::detail/$1', ['filter' => 'role:admin, user']);
$routes->delete('/control/poliklinik/(:num)', 'Poliklinik::delete/$1', ['filter' => 'role:admin, user']);

// FAQ
$routes->add('/control/faq', 'FAQ::index', ['filter' => 'role:admin, user']);
$routes->get('/control/faq/form', 'FAQ::form', ['filter' => 'role:admin, user']);
$routes->add('/faq/insert', 'FAQ::insert', ['filter' => 'role:admin, user']);
$routes->get('/control/faq/edit/(:segment)', 'FAQ::edit/$1', ['filter' => 'role:admin, user']);
$routes->add('/faq/update/(:segment)', 'FAQ::update/$1', ['filter' => 'role:admin, user']);
$routes->delete('/control/faq/(:num)', 'FAQ::delete/$1', ['filter' => 'role:admin, user']);

// Gallery
$routes->add('/control/gallery', 'Gallery::index', ['filter' => 'role:admin, user']);
$routes->get('/control/gallery/form', 'Gallery::form', ['filter' => 'role:admin, user']);
$routes->add('/gallery/insert', 'Gallery::insert', ['filter' => 'role:admin, user']);
$routes->get('/control/gallery/edit/(:segment)', 'Gallery::edit/$1', ['filter' => 'role:admin, user']);
$routes->add('/gallery/update/(:segment)', 'Gallery::update/$1', ['filter' => 'role:admin, user']);
$routes->get('/control/gallery/detail/(:segment)', 'Gallery::detail/$1', ['filter' => 'role:admin, user']);
$routes->delete('/control/gallery/(:num)', 'Gallery::delete/$1', ['filter' => 'role:admin, user']);

// Flmngr
$routes->add('/flmngr', 'Flmngr:flmngr');;

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
