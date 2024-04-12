<?php
    // get the current date and time

    echo "<h3>current date n time</h3>";
    $currentDateTime = date("Y-m-d H:i:s");
    echo $currentDateTime;
    echo "<br><br>";

    // get full month name in textual-form
    echo "<h3>get full month name in textual-form</h3>";

    $currentDateTime = date("Y-F-d H:i:s");
    echo $currentDateTime;
    echo "<br><br>";

    // abbreviated month name
    echo "<h3>abbreviated month name</h3>";

    $currentDateTime = date("Y-M-d H:i:s");
    echo $currentDateTime;
    echo "<br><br>";

    // echo specific parts of the date
    echo "<h3>specific parts of the date</h3>";

    $year = date("Y");
    $month  = date("m");
    $day = date("d");

    echo "Year: " . $year . " Month: " . $month . " Day: " . $day;
    echo "<br><br>";

    // Unix-timestamp: since (january 1, 1970, 00:00:00)
    
    // current unix-timestamp
    echo "<h3>current unix-timestamp</h3>";

    $unixTime = time();
    echo $unixTime;
    echo "<br><br>";

    // format specific date-string
    echo "<h3>format specific date-string</h3>";
    $specificDateString = "2023-11-25";
    $timeStamp = strtotime($specificDateString);
    echo $timeStamp;
    echo "<br><br>";

    $formattedDate = date("l, F, jS Y", $timeStamp);
    echo $formattedDate;
    echo "<br><br>";

    // calculate the date after a week from current date
    echo "<h3>calculate the date after a week from current date</h3><hr>";
    $futureDate  = date("Y-M-d", strtotime("+1 week"));
    echo "date after a week from current date: " . $futureDate;
    echo "<br><br>";

    // create a unix-timestamp for a specific date and time
    echo "<h3>unix-timestamp for a specific date and time</h3><hr>";
    $customTimeStamp = mktime(12, 30, 0, 11, 25, 2023);
    echo "Custom unix timestamp: " . $customTimeStamp;
    echo "<br><br>";

    // convert the unix-timestamp to a readable date format
    $convertedDate = date("Y-m-d H:i:s", $customTimeStamp);
    echo "converted date: " . $convertedDate;
    echo "<br><br>";

    // calcualte days between the two dates
    echo "<h3>calcualte days between the two dates</h3><hr>";
    $d1 = strtotime("2023-12-31");

    $daysDifference = ceil((time() - $d1) / (60 * 60 * 24));
    echo "Days untill " . $d1 . ": " . $daysDifference;
    echo "<br><br>";

    // set the default timezone
    echo "<h3>set the default timezone</h3><hr>";
    date_default_timezone_set("America/New_York");
    echo "Default timezone: " . date_default_timezone_get();
    echo "<br><br>";

    $currentDateTime = date("Y-m-d H:i:s");
    echo "Current date and time in New York: " . $currentDateTime;
    echo "<br><br>";

?>

<?php
    echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>
