<?php

/**  @var $router */ // это не работает


// а вот будет ли работать вообще с localhost

// Posts
$router->get('beginphp', 'posts/index.php');
$router->get('beginphp/posts', 'posts/show.php');
$router->get('beginphp/posts/create', 'posts/create.php');
$router->post('beginphp/posts', 'posts/store.php');
$router->delete('beginphp/posts', 'posts/destroy.php');

// Pages
$router->get('beginphp/about', 'about.php');
$router->get('beginphp/contact', 'contact.php');

// $routes = [
//     'beginphp' => '/index.php',
//     'beginphp/about' => '/about.php',
//     'beginphp/post' => '/post.php',
//     'beginphp/posts/create' => '/post-create.php',
// ];