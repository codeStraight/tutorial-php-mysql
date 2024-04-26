<?php
// cookies
$cookie_name = "user";
$cookie_value = "JohnDoe";
$expiration_time = time() + 3600;
$path = "/";
setcookie($cookie_name, $cookie_value, $expiration_time, $path);

// print_r($_COOKIE);
// check if the cookie is set
if (isset($_COOKIE[$cookie_name])) {
    # code...
    echo "Hello, " . $_COOKIE[$cookie_name] . "! Welcome Back";
} else {
    # code...
    echo "Welcome, Visitor";
}

// delete a cookie
$expiration_time = time() - 3600;
setcookie($cookie_name, "", $expiration_time, $path);
echo "<br><br>";

// check if the cookie is deleted
if (!isset($_COOKIE[$cookie_name])) {
    # code...
    echo "come back soon...";
}
?>

<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>
