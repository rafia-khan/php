<form method="post">
    enter a number <input type="text" name="fname">
    <input type="submit" name="submit">
    </form>
    <?php
    $b=$_POST["fname"];
    $b=$_POST["submit"];
    $c=0;
    // if(isset("submit"))
    // {
        if($b==0 || $b==1)
        {
            echo "Not Prime or Composite";
            exit();
        }
        for($i=2; $i<$b; $i++)
        {
            if($b%$i==0)
            $c++;
        }
        if($c==0)
        echo "$b prime number";
    else
    echo "$b not a prime number";
    }
    
    ?>



