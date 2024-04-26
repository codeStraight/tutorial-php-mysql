<?php
// define a root constant
define("ROOT", realpath("."));

// define directory separator
define("DS", DIRECTORY_SEPARATOR);

// $_FILES
$target_directory = "upload";

// check if the directory exists
if (!is_dir($target_directory) && !mkdir($target_directory, 0777, true)) {
    # code...
    die("Failed to create: " . $target_directory . " directory");
} else {
    # code...

    echo "directory exists";
    echo "<br><br>";
    // check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        # code...
        echo "the form has successfully been submitted";
        echo "<br><br>";
        // print_r($_FILES);
        $file_name = $_FILES["fileToUpload"]["name"];
        $file_type = $_FILES["fileToUpload"]["type"];
        $file_tmp_name = $_FILES["fileToUpload"]["tmp_name"];
        $file_error = $_FILES["fileToUpload"]["error"];
        $file_size = $_FILES["fileToUpload"]["size"];

        echo "name of the file: " . $file_name;
        echo "<br><br>";


        echo "type of the file: " . $file_type;
        echo "<br><br>";

        echo "temporary name of the file: " . $file_tmp_name;
        echo "<br><br>";

        echo "error of the file: " . $file_error;
        echo "<br><br>";

        echo "size of the file: " . $file_size;
        echo "<br><br>";

        // upload the file
        $target_file = ROOT . DS . "upload" . DS . $file_name;
        echo $target_file;
        echo "<br><br>";

        // check if the file already exists
        if (file_exists($target_file)) {
            # code...
            echo "Sorry, the already exists";
        } else {
            # code...
            echo "u can upload the file";
            // upload the file
            if (move_uploaded_file($file_tmp_name, $target_file)) {
                # code...
                echo "the file $file_name has successfully been uploaded.";
            } else {
                # code...
                echo "Sorry there wan an error uploading the file";
            }
        }
    } else {
        # code...
        echo "Error submitting the form";
    }
}



?>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload"> <br><br>
    <input type="submit" name="submit" value="Submit">
</form>



<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>