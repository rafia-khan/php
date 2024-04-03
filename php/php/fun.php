<?php
// function info (){
//     echo "Rafia"."<br>";
// }

// info ();


// function name ($num1,$num2){
//     echo $num1 + $num2 ."<br>";
// }
// name (3,4) ;


// function country ($name){
//     echo "$name is our country" . "<br>";
// }
// country ("bangladesh");

// function country1 ($name,$year){
//     echo "$name is our country. $year independence day";
// }

// country1 ("Bangladesh",1971);




echo $_REQUEST['fname'];

?>

<form action="<php $_SERVER['PHP_SELF']?>" method="POST" >

<input type="text" name="fname">
<input type="submit" value="submit">
</form>
