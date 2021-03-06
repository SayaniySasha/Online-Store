<?php

$router->get('', 'HomeController@index');

$router->get('api/shop', 'HomeController@getProduct');
$router->get('about', 'AboutController@index');
$router->get('contact', 'ContactController@index');

$router->get('guestbook', 'GuestbookController@index');

$router->get('blog', 'BlogController@index');
$router->get('blog/page-{page}', 'BlogController@index');

$router->post('blog/search', 'BlogController@search');
$router->get('blog/{id}', 'BlogController@view');

$router->get('login', 'UsersController@login');
$router->post('login', 'UsersController@login');

$router->get('register', 'UsersController@signup');
$router->post('register', 'UsersController@signup');

$router->get('profile', 'ProfileController@index');
$router->get('profile/edit', 'ProfileController@edit');
$router->get('profile/orders', 'ProfileController@ordersList');

$router->get('profile/orders/view/{id}', 'ProfileController@ordersView');
$router->get('profile/orders/edit/{id}', 'ProfileController@ordersEdit');
$router->get('profile/orders/delete/{id}', 'ProfileController@ordersDelete');

$router->post('profile/edit', 'ProfileController@edit');

$router->post('check', 'UsersController@actionCheck');
$router->post('cart', 'CartController@index');

$router->get('logout', 'UsersController@logout');
$router->post('logout', 'UsersController@logout');


$router->get('admin', 'Admin\DashboardController@index');

$router->get('admin/products', 'Admin\shop\ProductsController@index');
$router->get('admin/products/create', 'Admin\shop\ProductsController@create');
$router->post('admin/products/create', 'Admin\shop\ProductsController@create');
$router->get('admin/products/edit/{id}', 'Admin\shop\ProductsController@edit');
$router->post('admin/products/edit/{id}', 'Admin\shop\ProductsController@edit');

$router->get('admin/products/delete/{id}', 'Admin\shop\ProductsController@delete');
$router->post('admin/products/delete/{id}', 'Admin\shop\ProductsController@delete');

$router->get('admin/categories', 'Admin\shop\CategoriesController@index');
$router->get('admin/categories/create', 'Admin\shop\CategoriesController@create');
$router->post('admin/categories/create', 'Admin\shop\CategoriesController@create');
$router->get('admin/categories/edit/{id}', 'Admin\shop\CategoriesController@edit');
$router->post('admin/categories/edit/{id}', 'Admin\shop\CategoriesController@edit');
$router->get('admin/categories/delete/{id}', 'Admin\shop\CategoriesController@delete');
$router->post('admin/categories/delete/{id}', 'AdminCategoriesController@delete');

$router->get('admin/posts', 'Admin\posts\PostController@index');
$router->get('admin/posts/create', 'Admin\posts\PostController@add');
$router->get('admin/posts/edit/{id}', 'Admin\posts\PostController@edit');
$router->get('admin/posts/delete/{id}', 'Admin\posts\PostController@delete');
$router->post('admin/posts/create', 'Admin\posts\PostController@add');
$router->post('admin/posts/edit/{id}', 'Admin\posts\PostController@edit');
$router->post('admin/posts/delete/{id}', 'Admin\posts\PostController@delete');

$router->get('admin/orders', 'Admin\shop\OrdersController@index');
$router->get('admin/orders/view/{id}', 'Admin\shop\OrdersController@view');
$router->get('admin/orders/edit/{id}', 'Admin\shop\OrdersController@edit');

$router->get('admin/orders/delete/{id}', 'Admin\shop\OrdersController@delete');
$router->post('admin/orders/edit/{id}', 'Admin\shop\OrdersController@edit');
$router->post('admin/orders/delete/{id}', 'Admin\shop\OrdersController@delete');


$router->get('admin/roles', 'Admin\acl\RolesController@index');
$router->get('admin/roles/create', 'Admin\acl\RolesController@add');
$router->get('admin/roles/edit/{id}', 'Admin\acl\RolesController@edit');
$router->get('admin/roles/delete/{id}', 'Admin\acl\RolesController@delete');

$router->post('admin/roles/create', 'Admin\acl\RolesController@add');
$router->post('admin/roles/edit/{id}', 'Admin\acl\RolesController@edit');
$router->post('admin/roles/delete/{id}', 'Admin\acl\RolesController@delete');

//
$router->get('admin/permissions', 'Admin\acl\PermissionsController@index');
$router->get('admin/permissions/create', 'Admin\acl\PermissionsController@add');
$router->get('admin/permissions/edit/{id}', 'Admin\acl\PermissionsController@edit');
$router->get('admin/permissions/delete/{id}', 'Admin\acl\PermissionsController@delete');

$router->post('admin/permissions/create', 'Admin\acl\PermissionsController@create');
$router->post('admin/permissions/edit/{id}', 'Admin\acl\PermissionsController@edit');
$router->post('admin/permissions/delete/{id}', 'Admin\acl\PermissionsController@delete');

$router->get('admin/users', 'Admin\users\UsersController@index');
$router->get('admin/users/create', 'Admin\users\UsersController@create');
$router->post('admin/users/create', 'Admin\users\UsersController@create');

$router->get('admin/users/edit/{id}', 'Admin\users\UsersController@edit');
$router->post('admin/users/edit/{id}', 'Admin\users\UsersController@edit');

$router->get('admin/users/delete/{id}', 'Admin\users\UsersController@delete');
$router->post('admin/users/delete/{id}', 'Admin\users\UsersController@delete');
