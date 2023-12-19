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

    for($counter1 = 1; $counter1 <= 5; $counter1++){
        echo "<br/>";
        echo $counter1;
    }

    $counter2 = 5;
    while($counter2 > 0 ){
        echo "<br/>";
        echo $counter2;
        $counter2--;
    }

    $fruitsArr = array("Apple", "Orange", "Grapes");
    $personInfo = array(
        "name" => "Brent",
        "age" => 21,
        "city" => "Baguio City"
    );
?>