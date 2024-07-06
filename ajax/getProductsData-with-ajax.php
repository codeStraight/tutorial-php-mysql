<?php 

$servername = "localhost";
$db_username = "codeStraight";
$db_password = "123456";
$dbname = "e-commerce";

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products data (title and description)
$sql = "SELECT title, description FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $productsData = ''; // Initialize variable to store products data
    // Construct the HTML for products data
    while ($row = $result->fetch_assoc()) {
        $productsData .= "Title: " . $row["title"] . "<br>";
        $productsData .= "Description: " . $row["description"] . "<br>";
        $productsData .= "<hr>";
    }

    // Close the database connection
    $conn->close();

    // Return products data
    echo $productsData;
} else {
    echo "No products found";
}

?>