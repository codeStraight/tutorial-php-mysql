<?php
// Parse Errors
echo "Hello World";
echo "<br><br>";

// Fatal Error
/* function hello(){
        echo"hello2";
    } */
// hello();

// Warnings
// $var = $undefinedVariable;
echo "<br><br>";

// exception handling
// echo (10/0);

function divide($dividend, $divisor)
{
    if ($divisor === 0) {
        # code...
        throw new Exception("Division by zero is not allowed");
    } else {
        # code...
        return ($dividend / $divisor);
    }
}

// handle exception
try {
    //code...
    $result = divide(10, 2);
    echo "result: " . $result;
} catch (Exception $e) {
    //throw $th;
    echo "caught exception: " . $e->getMessage();
}

?>


<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>
