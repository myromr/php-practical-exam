<?php
include 'functions.php';

// Displays the current date and time
echo "Current date and time: " . date("Y/m/d H:i:s") . "<br>";

// Takes a user's name as input via a URL parameter
$name = isset($_GET['name']) ? $_GET['name'] : null;

echo generateGreeting($name);

?>