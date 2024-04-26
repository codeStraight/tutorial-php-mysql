<?php
// globals
$global_var = 10;

// define a function
function access_global_variable()
{
    // access global varible here
    $GLOBALS["global_var"] = 20;
    // echo "accessing global_var inside a function" . $GLOBALS["global_var"];

    echo "modified value of the variable is:" . $GLOBALS["global_var"];
}


echo "initial value of the variable is: " . $global_var;

echo "<br><br>";
access_global_variable()
?>


<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>

