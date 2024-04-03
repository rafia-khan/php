<?php
// $hostname="localhost";
// $user="root";
// $password="";
// $dbname="my_portal";
// $conn = new mysqli($hostname,$user,$password,$dbname);
// if($conn->connect_error){
//     die("connection Failed.".$conn->connect_error);
// }
// echo "connection successful";



$hostname="localhost";
$user="root";
$password="";
$dbname="my_class";

$conn=mysqli_connect($hostname,$user,$password,$dbname);
if(!$conn){
    die("connection Failed.".$conn);
}
echo "connection successful";


?>