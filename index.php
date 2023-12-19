<?php 
    $fName = "Brent";
    $num1 = 1;
    $isFinished = false;

    // isFinished not displaying as it is a bool
    echo $fName . " " . $num1 . " " . $isFinished;

    // Just for readability
    echo "<br/>";

    if($num1 > 10){
        echo $num1 . " is greater than " . 10;
    }else{
        echo $num1 . " is less than " . 10;
    }

?>