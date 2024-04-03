<?php
    session_start ();

    if(isset($_POST["btnlogin"])){
        $username=$_POST["txtusername"];
        $password=$_POST["txtpass"];

       if( $username=="Admin" &&  $password=="123"){
         $_SESSION["sname"]=$username;
        header("location:demo.php");
       }

       else{
        $msg="username and password are not same!!";
       }
    }
?>

<?php
    echo isset($msg)?$msg:"";
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">

    <div>
        Username <br>
        <input type="text" name="txtusername"> <br>
    </div>

    <div>
        password <br>
        <input type="text" name="txtpass">
    </div><br> 

    <input type="submit" name="btnlogin" value="Log in" style="background:pink;">


    </form>
</body>
</html>