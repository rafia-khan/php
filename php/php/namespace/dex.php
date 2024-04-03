<?php
require "user.php";
require "student.php";
use Rafia\User;
use Farzana\User as Student ;

$object = new User();
$object->show();
echo"<br>";
$object = new Student();
$object->display();

?>