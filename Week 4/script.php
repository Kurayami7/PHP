<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    
</body>
</html>


<?php
    $booleanVar = true;

    if ($booleanVar) {
        echo("<br>The value of the boolean is ".$booleanVar);
    }
    else {
        echo("<br>The value of the boolean is ".$booleanVar);
    }


    $anotherBoolean = 0;

    if ($anotherBoolean) {
        echo("<br>The value of the boolean is ".$anotherBoolean);
    }

    else {
        echo("<br>The value of the boolean is ".$anotherBoolean);
    }

    $currentModule = "Python"; 
    if ($currentModule = "Js") {
        echo("Juice");
    }

    $avg = 30;
    // Ternary Operators. The whole point is simplifying the if-else statements to write them in one line
    // $result2 = (condition) ? True : False
    $result2 = ($avg >= 50) ? "You have passed" : "You have unfortunately failed";



?>