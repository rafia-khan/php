<?php
class A{
    public $name;
    public $age;
    function Show(){
        echo "this is my first class";
    }

    
}

class B{
    public $address;
    public $phone;
    function info(){
        echo "this my child class";
    }
}

$a =new B();
$a->info();
$





?>