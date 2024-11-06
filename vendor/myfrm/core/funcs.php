<?php

function dump($data) {
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
}

function print_arr($arr) {
  echo '<pre>';
  print_r($arr);
  echo '</pre>';
}

function dd($data) {
  dump($data);
  die;
}

function abort($code = 404, $title='404 - Not found') {
  require VIEWS . "/errors/{$code}.tpl.php";
  http_response_code($code);
  die;
}

// мб $fillable не надо значение по умолчанию
function load($fillable = []) {
  $data = [];

  foreach($_POST as $k => $v) {
    if(in_array($k, $fillable)) {
      $data[$k] = trim($v);
    }
  }

  return $data;
}

function old($fieldname) {
  return isset($_POST[$fieldname]) ? h($_POST[$fieldname]) : '';
  
}

function h($str) {
  return htmlspecialchars($str, ENT_QUOTES);
}

function redirect($url='') {
  if($url) {
    $redirect = $url;
  } else {
    $redirect = $_SERVER['HTTP_REFERER'] ?? PATH;
    // $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
  }
  
  header("Location: {$redirect}");
  die;
}

function get_alerts() {
  // в видео через !empty
  if (isset($_SESSION['success'])) {
    require_once VIEWS . "/incs/alert_success.php";
    unset($_SESSION['success']);
  }
  if (isset($_SESSION['error'])) {
    require_once VIEWS . "/incs/alert_error.php";
    unset($_SESSION['error']);
  }
}

function db(): \myfrm\Db {
  return \myfrm\App::get(\myfrm\Db::class);
}

function check_auth() {
  return isset($_SESSION['user']);
}