
<?php
session_start();
echo "Hello process-form.php";
echo "<br><br>";

// post method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...

    $name = $_POST["name"];
    $email = $_POST["email"];

    $errors = [];
    // check if the fields r empty
    if (empty($name) || empty($email)) {
        # code...
        echo "<br><br>";
        // echo "Please fill in all the fields";
        $errors["required"] = "Please fill in all the fields";
    } else {
        # code...
        // validate inputs using regex
        $namePattern = "/^[a-zA-Z' -]+$/";
        if (!preg_match($namePattern, $name)) {
            # code...
            // echo "Invalid name: " . $name;
            $errors["nameFormat"] =  "Invalid name: " . $name;
        } else {
            # code...

            // validate email-format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                # code...
                echo "<br><br>";
                // echo "Invalid emial format";
                $errors["email"]  = "Invalid emial format";
            } else {

                // sanitize inputs
                $name = htmlspecialchars($name);
                // echo $name;
                $email = htmlspecialchars($email);

                echo "<br><br>";
                echo "response from the form sent by form-data-process.php";
                echo "<br><br>";

                echo "Submitted data:";
                echo "<br><br>";

                echo "Name: " . $name;
                echo "<br><br>";

                echo "Email: " . $email;
            }
        }
    }
    // print_r($errors);
    $_SESSION["errors"] = $errors;
    // print_r($_SESSION);
    // check if there is any error
    if (isset($_SESSION["errors"])) {
        # code...
        // echo "errors";
        print_r($_SESSION["errors"]);
        header("Location: form-data-processing.php");
    }











    // session_destroy();

} else {
    # code...
    echo "THE REQUEST IS OTHERWISE";
}


// get method
// check if the request is get / post
// if ($_SERVER["REQUEST_METHOD"] == "GET") {
//     # code...
//     print_r($_GET);

//     $name = $_GET["name"];
//     $email = $_GET["email"];

//     echo "<br><br>";
//     echo "response from the form sent by form-data-process.php";
//     echo "<br><br>";

//     echo "Submitted data:";
//     echo "<br><br>";

//     echo "Name: " . $name;
//     echo "<br><br>";

//     echo "Email: " . $email;

// }


?>


















<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>

