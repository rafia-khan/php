<form method="post">
    enter a number <input type="number" name="fname">
    <input type="submit" name="submit">
    </form>

<?php
$marks =$_POST['fname'];


if ($marks >=100 || $marks <=0) {
    echo "invalid number";
}

elseif ($marks >=80 && $marks <=100) {
    echo "A+";
}

elseif ($marks >=70 && $marks <=79){
    echo "A";
}

elseif ($marks >=60 && $marks <=69 ){
        echo "B";
}

else{
    echo"Fail";
}




?>

