<?php
// for-loop
for ($i = 0; $i < 5; $i++) {
    # code...
    echo "Iteration number: " . ($i + 1);
    echo "<br><br>";
}


echo "<h3>While Loop</h3>";
// while loop
$num = 1;
while ($num <= 5) {
    # code...
    echo "Current number: " . $num;
    echo "<br><br>";
    $num++;
}

// do-while
echo "<h3>do While loop</h3>";
$num = 1;
do {
    # code...
    echo "Current number from do while loop: " . $num;
    echo "<br><br>";
    $num++;
} while ($num <= 5);

// foreach loop
echo "<h3>foreach loop</h3>";
$colors = array("Red", "Green", "Blue");
foreach ($colors as $key => $value) {
    # code...
    echo "the key of the current element: '" . $key . "' the value of the current element: '" . $value . "'";
    echo "<br><br>";
}

?>

<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>

