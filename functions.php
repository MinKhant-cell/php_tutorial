<?php
function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function dd ($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function abort($status = 404){
    http_response_code($status);
    require 'view/'.$status.'.php';
    die();
}

function authorize($condition){
    if (! $condition){
        abort(Response::FORBIDDEN);
    }
}

function base_path($path){
  return BASE_PATH . $path;
}

function view($path,$attributes=[]){
    extract($attributes);
    require base_path('view/'.$path);
}