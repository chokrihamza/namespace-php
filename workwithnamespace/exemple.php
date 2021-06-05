<?php 

spl_autoload_register(function($class){
  

  require 'class/'.str_replace('App\Date\\','',$class).'.php';
 

});

$date=new App\Date\DateTime();
$date->showTime();