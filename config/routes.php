<?php

/**  @var $router */ // это не работает

const MIDDLEWARE = [
    'auth' => \myfrm\middleware\Auth::class,
    'guest' => \myfrm\middleware\Guest::class,
];

// Posts
$router->get('beginphp', 'posts/index.php');
$router->get('beginphp/posts', 'posts/show.php');
$router->get('beginphp/posts/create', 'posts/create.php')->only('auth');
$router->post('beginphp/posts', 'posts/store.php');
$router->delete('beginphp/posts', 'posts/destroy.php');

// Pages
$router->get('beginphp/about', 'about.php');
$router->get('beginphp/contact', 'contact.php');

// User
$router->get('beginphp/register', 'users/register.php')->only('guest');
$router->get('beginphp/login', 'users/login.php')->only('guest');
$router->get('beginphp/logout', 'users/logout.php')->only('auth');

dump($router->routes);