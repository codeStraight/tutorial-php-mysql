<?php 
    session_start();

    $_SESSION = array();

    session_destroy();

    header("Location: login.php");
    exit();

?>
<?php
    echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>

