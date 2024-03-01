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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'RSUIYAKSSI::index');
$routes->get('/index', 'RSUIYAKSSI::index');
$routes->get('/rsuiyakssi', 'RSUIYAKSSI::index');
$routes->add('/rsuiyakssi/doctors', 'RSUIYAKSSI::doctors');
$routes->get('/rsuiyakssi/contact', 'Contact::contact');

$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/edit/(:segment)', 'Admin::edit/$1');
$routes->delete('/admin/(:num)', 'Admin::delete/$1', ['filter' => 'role:admin']);

// Beranda
$routes->add('/control/beranda', 'Beranda::index');
$routes->add('/control/beranda/insert', 'Beranda::insert');
$routes->get('/control/beranda/form', 'Beranda::form');
$routes->get('/control/beranda/edit/(:segment)', 'Beranda::edit/$1');
$routes->get('/control/beranda/details/(:segment)', 'Beranda::details/$1');
$routes->delete('/control/beranda/index/(:num)', 'Beranda::delete/$1');

// Widget
$routes->add('/control/widget', 'Widget::index');
$routes->add('/widget/save', 'Widget::save');
$routes->get('/control/widget/form', 'Widget::form');
$routes->get('/control/widget/edit/(:segment)', 'Widget::edit/$1');
$routes->get('/control/widget/details/(:segment)', 'Widget::details/$1');
$routes->delete('/control/widget/index/(:num)', 'Widget::delete/$1');

// Pages
$routes->add('/control/pages', 'Pages::index');
$routes->get('/control/pages/form', 'Pages::form');
$routes->get('/control/pages/edit/(:segment)', 'Pages::edit/$1');
$routes->get('/control/pages/details/(:segment)', 'Pages::details/$1');
$routes->delete('/control/pages/index/(:num)', 'Pages::delete/$1');

// Posts
$routes->add('/control/posts', 'Posts::index');
$routes->get('/control/posts/form', 'Posts::form');
$routes->get('/control/posts/edit/(:segment)', 'Posts::edit/$1');
$routes->get('/control/posts/details/(:segment)', 'Posts::details/$1');
$routes->delete('/control/posts/index/(:num)', 'Posts::delete/$1');

// Category
$routes->add('/control/category', 'Category::index');
$routes->get('/control/category/form', 'Category::form');
$routes->get('/control/category/edit/(:segment)', 'Category::edit/$1');
$routes->get('/control/category/details/(:segment)', 'Category::details/$1');
$routes->delete('/control/category/index/(:num)', 'Category::delete/$1');

// Menu
$routes->add('/control/menu', 'Menu::index');
$routes->get('/control/menu/form', 'Menu::form');
$routes->get('/control/menu/edit/(:segment)', 'Menu::edit/$1');
$routes->get('/control/menu/details/(:segment)', 'Menu::details/$1');
$routes->delete('/control/menu/index/(:num)', 'Menu::delete/$1');

// Settings
$routes->get('/control/settings', 'Settings::index');
$routes->get('/password/index', 'ChangePassword::index');

// Dokter
$routes->add('/control/dokter', 'Dokter::index');
$routes->get('/control/dokter/form', 'Dokter::form');
$routes->get('/control/dokter/edit/(:segment)', 'Dokter::edit/$1');
$routes->get('/control/dokter/details/(:segment)', 'Dokter::details/$1');
$routes->delete('/control/dokter/index/(:num)', 'Dokter::delete/$1');
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
