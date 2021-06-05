<?php 
namespace App\Date ;
use \DateTime as Time ;
class DateTime{

 public function showTime(){
   $day=(new Time())->format('l');
   echo "To day is $day";
 }

}