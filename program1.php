<?php
// This is a single-line comment

/* 
This is a multi-line comment
*/

// Display a message
echo "Hello, World!";

// Variables
$name = "John"; // String
$age = 25;      // Integer

// Display variables
echo "<br>My name is $name and I am $age years old.";

// Conditional statement
if ($age >= 18) {
    echo "<br>You are an adult.";
} else {
    echo "<br>You are a minor.";
}

// Loop example
echo "<br>Numbers from 1 to 5:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}

// Function example
function greet($name) {
    return "Hello, $name!";
}
echo greet("Alice");
?>
