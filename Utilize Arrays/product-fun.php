<!-- This is an assignment based on two members - Yuka and Areaf -->

<?php
    $intArray = [16, 42, 50, 0, 7, 803, 1320, 319, 201];

    // Function time
    function multiplier ($multiples) {
        $product = 1; // Must be atleast one because anything multiplied by 0 is 0
        for ($i = 0; $i < count($multiples); $i++) {
            if (is_int($multiples[$i]) && $multiples[$i] != 0) {
                $product *= $multiples[$i];
            }
            
            elseif ($multiples[$i] == 0) {
                ++$i; // Nothing too complex. This additional else if simply checks to make sure all 0s are ignored since the $i controls the current index of the array being iterated through, and skipping/increasing it means skipping through all 0s in this case.
            }
            else {
                return 0; // Returning 0s in case the array value is not an integer
            }
        }
        return $product;
    }


    // Utilizing the function
    echo "<strong>The product is: </strong>" . multiplier($intArray);
?>

