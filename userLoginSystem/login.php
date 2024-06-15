<?php
echo "sss";
session_start();
// check if the request is post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # code...

    // retireve login form data from $_post

    $username = $_POST['username'];
    $password = $_POST['password'];

    // connect to the database

    $servername = "localhost";
    $username_db = "codeStraight";
    $password_db = "123456";
    $dbname = "e-commerce";

    $conn = mysqli_connect(
        $servername,
        $username_db,
        $password_db,
        $dbname
    );

    // check if u'v successfully connected to the db
    if (!$conn) {
        # code...
        die("Connection failed" . mysqli_connect_error());
    } else {
        // create a database

        // verify the input-data with database
        // prepare the query
        $stmt = $conn->prepare("SELECT * FROM users WHERE name = ?");

        $stmt->bind_param("s", $username);
        $stmt->execute();

        $result = $stmt->get_result();

        // check i u get any result or print an error message

        if ($result->num_rows === 1) {
            # code...
            echo '<br>';
            $row = $result->fetch_assoc();

            // verify the form-password with the database password

            if (password_verify($password, $row['password'])) {
                # code...
                echo "Welcome, " . $row['name'];
                $user = $row['name'];

                $_SESSION['user'] = $user; 
                $_SESSION['loggedIn'] = true; 

                // redirect ur user to the home-page
                header("Location: home.php");
                exit();
            } else {
                # code...
                echo '<p style = "color: red" >invalid username or password</p>';
            }
        } else {
            # code...
            echo '<p style = "color: red" >invalid username or password</p>';
        }


        $conn->close();
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-page</title>
</head>

<body>

    <form action="" method="post">
        <label for="">Username:</label>
        <input type="text" name="username">
        <br><br>

        <label for="">Password:</label>
        <input type="password" name="password">
        <br>

        <input type="submit" value="Login">


    </form>

</body>

</html>

<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>