<?php
session_start();
// print_r($_SESSION["errors"]);
// form-data-processing
?>

<form action="process-form.php" method="POST" novalidate>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"> <br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"> <br><br>

    <p style="color: red;"><?php echo (isset($_SESSION["errors"]["required"])) ? $_SESSION["errors"]["required"] : ""; ?></p>

    <input type="submit" value="Submit">

</form>

<?php
session_destroy();
?>


<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>
