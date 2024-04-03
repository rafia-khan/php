


<?php   
$x = 0;

if(isset($x)){ 
    echo "this is a isset 'x' ";
}

$a = null;

if(isset($a)){ 
    echo "this is null 'a' ";
}

function display(){ 
    $a = 0;
    if(isset($a)){ 
        echo "this is isset 'a' ";
    }
}

display();


?>