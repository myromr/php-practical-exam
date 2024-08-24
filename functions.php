<?php

function generateGreeting($name) {
    return $name ? "Hello, " . htmlspecialchars($name) . "!" : "Hello, World!";
}

?>