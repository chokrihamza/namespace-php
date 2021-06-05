<?php 
spl_autoload_register(function($class){
    require str_replace('\\','/',$class).'.php';
});

$user=new App\Models\User;

var_dump($user);