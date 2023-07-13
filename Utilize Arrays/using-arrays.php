<!-- This is an assignment based on two members - Yuka and Areaf -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Arrays</title>
</head>
<body>
    <?php
    $mixedNumbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
    $oddNumbers = [];
    $evenNumbers = [];


    // Adding the values using a regular for loop:
        for ($i=0; $i < count($mixedNumbers); $i++) { 
            if ($mixedNumbers[$i] % 2 == 0) {
                $evenNumbers[] += $mixedNumbers[$i];
            }

            else {
                $oddNumbers[] += $mixedNumbers[$i];
            }
        }

    // Time to print the three arrays:
    echo "<strong>Mixed numbers:</strong><br>";
    print_r($mixedNumbers);
    
    echo "<br><br><strong>Even numbers:</strong><br>";
    print_r($evenNumbers);
    
    echo "<br><br><strong>Odd numbers:</strong><br>";
    print_r($oddNumbers);

    echo "<hr>"
    ?>

    <h2>Odd numbers:</h2>
    <ul>
        <?php foreach ($oddNumbers as $item) { ?>
            <li> <?php echo $item; ?></li>
        <?php } ?>
    </ul>

    <h2>Even numbers:</h2>
    <ul>
        <?php foreach ($evenNumbers as $item) { ?>
            <li> <?php echo $item; ?></li>
        <?php } ?>
    </ul>


</body>
</html>