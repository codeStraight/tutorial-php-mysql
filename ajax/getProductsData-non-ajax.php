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
    echo "welcome to databse";
    echo '<br><br>';
    $sql = "SELECT title, description FROM `products`";
    $result = $conn->query($sql);
    // check if get any rows
    if ($result->num_rows > 0) {
        # code...
        $productsData = "";
        while ($row = $result->fetch_assoc()) {
            # code...
            $productsData .= "Title: " . $row['title'] . "<br>";
            $productsData .= "Description: " . $row['description'] . "<br>";
            $productsData .= "<hr>";
        }

        session_start();

        $_SESSION['products'] = $productsData;
        // echo $_SESSION['products'];
        header("Location: products-non-ajax.php");
    } else {
        # code...
        echo "no products found";
    }
}
$conn->close();