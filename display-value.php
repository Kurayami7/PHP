<<<<<<< HEAD
<?php

$firstName = "James";
$lastName = 'Milner';

$age = 40;
$total = 23.40;
$avg = 30.21;

$isValid = false;

$subject1 = "PHP";
$subject2 = "Java";
$subject3 = "Python";

echo ("Hello world");
echo "<br>";
print ("Hello world");

echo "<hr>";
echo "Hello, ".$firstName;
echo "<br>";
print "Hello World";
echo "<br>";

echo "Your full name is: "." ".$firstName." ".$lastName, "\n";


/* Echo vs Print
Print can only display a single value, while echo can display multiple values separated by commas
*/

// Difference between "" and ''

echo "<br> the age is: ".$age;
print "<br> the age is: ".$age;

echo "<br> the age is $age";
echo '<br> the age is $age';

print "<br> the age is $age";
print '<br> the age is $age';
// There is a difference, but none between echo and print


echo "<hr>";
echo gettype($subject1)."<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?php echo $subject1?></li>
        <li><?php echo $subject2?></li>
        <li><?php echo $subject3?></li>
    </ul>   
    
</body>
</html>

=======
<?php

$firstName = "James";
$lastName = 'Milner';

$age = 40;
$total = 23.40;
$avg = 30.21;

$isValid = false;

$subject1 = "PHP";
$subject2 = "Java";
$subject3 = "Python";

echo ("Hello world");
echo "<br>";
print ("Hello world");

echo "<hr>";
echo "Hello, ".$firstName;
echo "<br>";
print "Hello World";
echo "<br>";

echo "Your full name is: "." ".$firstName." ".$lastName, "\n";


/* Echo vs Print
Print can only display a single value, while echo can display multiple values separated by commas
*/

// Difference between "" and ''

echo "<br> the age is: ".$age;
print "<br> the age is: ".$age;

echo "<br> the age is $age";
echo '<br> the age is $age';

print "<br> the age is $age";
print '<br> the age is $age';
// There is a difference, but none between echo and print


echo "<hr>";
echo gettype($subject1)."<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?php echo $subject1?></li>
        <li><?php echo $subject2?></li>
        <li><?php echo $subject3?></li>
    </ul>   
    
</body>
</html>

>>>>>>> 2371d5d (Week 2)
