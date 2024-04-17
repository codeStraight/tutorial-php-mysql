<?php
echo "this text is echoed from include-1.php";
echo "<br><br>";

// echo realpath(".");
// define a root constant
define("ROOT", realpath("."));

// define directory separator
define("DS", DIRECTORY_SEPARATOR);

include "include-2.php";
echo "<br><br>";

require ROOT . DS . "foo" . DS . "require-1.php";
echo "<br><br>";

echo "end of code";
exit();
?>

<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>
