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
    }else {
        # code...
        echo "Welcome to the database: e-commerce"; 
        echo "<br><br>";

        // insert data into the users table
        $insertSql = "INSERT INTO `users`(`username`, `email`) VALUES ('user2','user2@example.com')";

        // execute the query
        // check if the query was successfully executed
/*         if (mysqli_query($conn, $insertSql)) {
            # code...
            echo "New record has successfully been created";
        } else {
            # code...
            echo "Error: ";
            echo "<br><br>";
            echo $insertSql;
            echo "<br><br>";
        } */
        
        // fetch data from the users table
        $selectSql = "SELECT * FROM `users`";
        $result = mysqli_query($conn, $selectSql);

        // check if u'v retireved any result
        if (mysqli_num_rows($result)>0) {
            # code...
            echo "Welcome User:";
            echo "<br><br>";
            while ($row = mysqli_fetch_assoc($result)) {
                # code...
                // print_r($row);

                echo "ID: " . $row["id"] . " " . "Username: " . $row["username"] . " " . "Email: " . $row["email"];
                echo "<br><br>";
            }
            
        } else {
            # code...
            echo "0 errors";
        }

        // update or modify data in the user's table
        $updateSql = "UPDATE `users` SET `email`='john.doe@example.com' WHERE id = 4";

        // check if the query has successfully been executed
/*         if (mysqli_query($conn, $updateSql)) {
            # code...
            echo "Record successfully updated";
            echo "<br><br>";
        } else {
            # code...
            echo "Error updating record";
            echo "<br><br>";
        } */

        // delete or remove data from the table / database
        $deleteSql = "DELETE FROM `users` WHERE id = 5";
        // if (mysqli_query($conn, $deleteSql)) {
        //     # code...
        //     echo "Record successfully deleted";
        //     echo "<br><br>";
        // } else {
        //     # code...
        //     echo "Error deleting the record";
        //     echo "<br><br>";
        // }

        // close connection 
        mysqli_close($conn);

    }
?>

<?php
    echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>
