<?php 
    session_start();
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

    function addNumbers($x, $y){
        $sum = $x + $y;
        return "The sum of " . $x . " and " . $y . " is " . $sum;
    }

    echo "<br/>" . addNumbers(4, 3);
    echo "<br/>" . addNumbers(7, 8);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Form Handling</title>
</head>
<body>
    <h1 class="fw-bold text-center">Simple Form Handling</h1>
    <form class="container-fluid my-3 border shadow" method="POST" action="newNames.php">
        <label class="form-label">Add a new name:</label>
        <input class="form-control" id="name" type="text" name="name" placeholder="Enter a name..." required/>
        <button class="btn btn-dark my-3" type="submit">Add</button>
        <ul>
            <?php 
            // checks if there is a value. for handling errors as well
                if(isset($_SESSION["greetings"])){
                    foreach($_SESSION["greetings"] as $greeting){
                        echo "<li>" . $greeting . "</li>";
                    }
                }
            ?>
        </ul>
    </form>
</body>
</html>