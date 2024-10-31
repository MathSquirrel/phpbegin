<?php

use myfrm\Validator;

$db = \myfrm\App::get(\myfrm\Db::class);

$fillable = ['title', 'content', 'excerpt', 'email'];
$data = load($fillable);


// Validation

$rules = [
  'title' => [
    'required' => true,
    'min' => 5,
    'max' => 100,
  ],
  'excerpt' => [
    'required' => true,
    'min' => 10,
    'max' => 100,
  ],
  'content' => [
    'required' => true,
    'min' => 10,
  ],
  'email' => [
    'email' => true,
  ]
];

$validator = new Validator();  // может, лучше напрямую класс?
$validation = $validator->validate($data, $rules);

if (!$validation->hasErrors()) {
  if($db->query("INSERT INTO posts (`title`, `content`, `excerpt`) VALUES (:title, :content, :excerpt)", $data)) {
    $_SESSION['success'] = 'ok';
  } else  {
    $_SESSION['error'] = 'DB error';
  }
  redirect('/beginphp');
} else {
  require VIEWS . '/posts/create.tpl.php';
}