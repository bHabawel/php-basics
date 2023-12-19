<?php 
    session_start();

    $greetings = "Hello " . $_REQUEST["name"] . " 🧑‍💻";

    // checks if it was initialized so that it can create an empty array
    if(!isset($_SESSION["greetings"])){
        $_SESSION["greetings"] = [];
    }
    array_push($_SESSION["greetings"], $greetings);

    header("location: index.php");
?>