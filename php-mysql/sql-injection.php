<?php
$servername = "localhost";
$username = "codeStraight";
$password = "123456";
$dbname = "e-commerce";

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $dbname
);

// check if u'v successfully connected to the db
if (!$conn) {
    # code...
    die("Connection failed" . mysqli_connect_error());
} else {
    # code...
    echo "Welcome to SQL-INJECTION PREVENTION";

    echo "<br><br>";
    // retrieve form-data

    // print_r($_POST);
    // check if username key is not empty, otherwise 0 result
    if (!empty($_POST["username"])) {
        # code...
        // echo $_POST["username"];
        $userName = $_POST["username"];

        // vulnerable-code that is susceptible to sql-injection
        // $sql = "SELECT * FROM `users` WHERE username = '$userName'";
        // $result =  $conn->query($sql);

        // PREVENTIVE CODE FOR SQL-INJECTION
        // prepare the query

        $stmt = $conn->prepare("SELECT * FROM `users` WHERE username = ?");

        // bind parameters to the query
        $stmt->bind_param("s", $userName);

        // execute the query
        $stmt->execute();

        $result =  $stmt->get_result();

        // check if retrieve any data
        if ($result) {
            # code...
            while ($row = $result->fetch_assoc()) {
                # code...
                echo "ID: " . $row["id"] . " " . "Username: " . $row["username"] . " " . "Email: " . $row["email"];
                echo "<br><br>";
            }
        } else {
            # code...
            echo "zero result";
        }
    } else {
        # code...
        echo "form has not been submitted";
    }


    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sql-injection</title>
</head>

<body>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>



<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>
