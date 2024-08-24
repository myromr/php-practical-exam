<?php
include 'functions.php';

// Displays the current date and time
echo "Current date and time: " . date("Y/m/d H:i:s") . "<br>";

// Takes a user's name as input via a URL parameter
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    
    echo generateGreeting($name);
}
?>

<form action="" method="post">
    <label for="name">Enter your name:</label>
    <input type="text" id="name" name="name">
    <input type="submit" value="Submit">
</form>