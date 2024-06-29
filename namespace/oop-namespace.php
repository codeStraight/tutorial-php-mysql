<?php
require "namespace1.php";
require "namespace2.php";

$order1 = new order1\Order;
$order1->echoText();

echo '<br>';
$order2 = new order2\Order;
$order2->echoText();
?>

<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>

