<?php
// $_SERVER
// print_r($_SERVER);
// echo '<pre>' , var_dump($_SERVER) , '</pre>';

// get the server's hostname
echo "Server Hostname: " . $_SERVER["SERVER_NAME"];

echo "<br><br>";

// server's software name & version

echo "Server  Software: " . $_SERVER["SERVER_SOFTWARE"];
echo "<br><br>";

// current script / file name
echo "CURRENT SCRIPT / FILE NAME: " . $_SERVER["SCRIPT_FILENAME"];

echo "<br><br>";
// SERVER'S PROTOCOL
echo "SERVER PROTOCL: " . $_SERVER["SERVER_PROTOCOL"];

echo "<br><br>";
// REQUEST METHOD
echo "REQUEST METHOD: " . $_SERVER["REQUEST_METHOD"];



?>

<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>

