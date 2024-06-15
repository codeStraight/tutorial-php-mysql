<?php
$servername = "localhost";
$username = "codeStraight";
$password = "123456";
$dbname = "e-commerce";

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
);

// check if u'v successfully connected to the db
if (!$conn) {
    # code...
    die("Connection failed" . mysqli_connect_error());
} else {
    // create a database
    $sql_create_db = "CREATE DATABASE IF NOT EXISTS `$dbname`";

    if ($conn->query($sql_create_db) == true) {
        # code...
        echo "Database '$dbname' has successfully been created";
        echo '<br>';
    } else {
        # code...
        echo "Error creating database: " . $conn->error;
        echo '<br>';
    }

    // select the database
    $conn->select_db($dbname);

    // create a table (users)
    $sql_create_users_table = "CREATE TABLE IF NOT EXISTS users(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        password VARCHAR(255) NOT NULL  
    )";

    // check if the query has successflly been executed
    if ($conn->query($sql_create_users_table) == true) {
        # code...
        echo "Table 'users' has successfully been created";
        echo '<br>';
    } else {
        # code...
        echo "Error creating table" . $conn->error;
        echo '<br>';
    }

    // create tabble (products)
    $sql_create_products_table = "CREATE TABLE IF NOT EXISTS products(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(100) NOT NULL,
        description TEXT NOT NULL  
    )";

    // check if the query has successflly been executed
    if ($conn->query($sql_create_products_table) == true) {
        # code...
        echo "Table 'products' has successfully been created";
        echo '<br>';
    } else {
        # code...
        echo "Error creating table" . $conn->error;
        echo '<br>';
    }

    // hash_password
    $password_hash = password_hash('password123', PASSWORD_DEFAULT);

    // insert some sample data into users table
    $sql_insert_users_data = "INSERT INTO `users`(`name`, `password`) VALUES 
    ('John Doe', '$password_hash'),
    ('Jane Smith', '$password_hash')
    ";

    // check if the query has successflly been executed
    if ($conn->query($sql_insert_users_data) == true) {
        # code...
        echo "Sample data has successfully been inserted into 'users' table";
        echo '<br>';
    } else {
        # code...
        echo "Error inserting data: " . $conn->error;
        echo '<br>';
    }

    // insert some sample-data into products-table
    $sql_insert_products_data = "INSERT INTO `products`(`title`, `description`) VALUES 
    ('Product-1', 'Description for Product-1'),
    ('Product-2', 'Description for Product-2'),
    ('Product-3', 'Description for Product-3'),
    ('Product-4', 'Description for Product-4')
    ";

    // check if the query has successflly been executed
    if ($conn->query($sql_insert_products_data) == true) {
        # code...
        echo "Sample data has successfully been inserted into 'products' table";
        echo '<br>';
    } else {
        # code...
        echo "Error inserting data: " . $conn->error;
        echo '<br>';
    }

    // close the connection
    $conn->close();
}
?>

<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>
