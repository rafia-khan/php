<?php
    session_start ();

    if(!isset($_SESSION["sname"])){
        header("location:log_in.php");
    }


    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <
    <form action="" method=""POST>

    <div>
        ID <br>
        <input type="text" name="txtid">
    </div>

    <div>
        name <br>
        <input type="text" name="txtname">
    </div>

    <div>
        E_mail <br>
        <input type="text" name="txtmail">
    </div>

    <div>
        Phone <br>
        <input type="text" name="txtphone"> <br>
    </div>

    <input type="submit" name="btnsubmit" value="Submit"> <br>
    <a href="log_out.php"><input type="button" name="btnsubmit" value="Log out"></a> <br>
    

    </form>
</body>
</html>