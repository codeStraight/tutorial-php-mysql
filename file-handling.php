<?php
// file handling
$filePath = "example.txt";

// open a file using php script
$file = fopen($filePath, "r");

// check if the file is successfully opened
if ($file) {
    # code...
    echo "file has been successfully openend";
    echo "<br><br>";

    // read file content
    readfile($filePath);
    echo "<br><br>";

    // read specific number of characters
    $specificBytes = fread($file, 20);
    echo $specificBytes;
    echo "<br><br>";

    // read a single character 
    echo "<h3>read a single character</h3><hr>";


    // to reset the reading
    rewind($file);

    $singleCharacter = fgetc($file);
    echo $singleCharacter;
    echo "<br><br>";

    // read a single-line
    echo "<h3>read a single line</h3><hr>";
    rewind($file);
    $singleLine = fgets($file);
    echo $singleLine;
    echo "<br><br>";

    // read line by line
    echo "<h3>read line by line</h3><hr>";
    rewind($file);
    while (!feof($file)) {
        # code...

        echo "<br><br>";
        $singleLine = fgets($file);
        echo $singleLine;
        echo "<br><br>";
        echo "-----------------";
    }

    echo "<br><br>";

    // check end of line
    if (feof($file)) {
        # code...
        echo "end of file";
    }

    // close the file
    fclose($file);

    // append some data to existing file
    $appendText = "new content appended";
    $file = fopen($filePath, "a");

    // write text to the file
    fwrite($file, $appendText);

    // close the file
    fclose($file);
} else {
    # code...
    echo "error opening the file";
}

?>

<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>
