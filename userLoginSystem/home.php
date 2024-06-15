<?php
session_start();

if (!isset($_SESSION['loggedIn'])) {
    # code...
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>

<body>
    <h2>Welcome, <?php echo $_SESSION['user']; ?></h2>

    <h3>Products: </h3>
    <?php

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
        $sql = "SELECT `title`, `description` FROM `products`";

        $result = $conn->query($sql);

        // check if the query has successfully been executed or echo zero result

        if ($result->num_rows > 0) {
            # code...
            while ($row = $result->fetch_assoc()) {
                # code...
                echo "<p><strong>Title: </strong> " . $row['title'] . " <br> <strong>Description: </strong> " . $row['description'] . "</p>";
            }
        } else {
            # code...
            echo "Zero results";
        }

        $conn->close();
    }

    ?>
    <br>
    <a href="logout.php">Logout</a>
</body>

</html>



<?php
echo '<p style="margin-top: 5rem; text-align:center">&copy; codeStraight</p>'
?>