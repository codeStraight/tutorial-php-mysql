<?php

// function definition
function greetUser($name)
{
    echo "Hello, $name! Welcome to our web application";
    echo "<br><br>";
}

// function-invocation
greetUser("John");

// callback function greet
function greet($name)
{
    echo "Hello, " . $name;
    echo "<br><br>";
}

// function accepting the callback
function performCallback($callback, $name)
{
    if (is_callable($callback)) {
        # code...
        // call the callback
        call_user_func($callback, $name);
        echo "How are you?";
    } else {
        # code...
        echo "Invalid callback";
    }
}

// invoke the performCallback
// performCallback("greet", "Alice");

// invoke callback as an anonymous-function
performCallback(function ($name) {
    echo "Hey there, " . $name . ",";
}, "Alice");

?>

<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>

