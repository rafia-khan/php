<?php 

echo"<pre>";
print_r($_FILES);
echo "</pre>";

    if (isset($_FILES["img"])){
        $file_name = $_FILES['img']['name'];
        $tmp_file = $_FILES['img']['tmp_name'];
        $file_size =$_FILES['img']['size'];

        $img = "image/";
        $kb =$file_size/1024;

        if($kb>400){
            echo "fill is to large";
        }
        else{
            move_uploaded_file($tmp_file,$img.$file_name);
            echo "sucessfully";

        }

       
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
    <form action="" method="post" enctype="multipart/form-data">
        <div>Upload:<br>
            <input type="file" name="img"><br>
            <input type="submit" value="submit">

        </div>





    </form>

    <?php
     if(isset($_FILES["img"])){
        echo "<image src='$img/$file_name'>";
     }
    
    
    ?>
</body>
</html>