<?php
// Set a cookie
$cookie_name = "user";
$cookie_value = "John";
$cookie_expire = time() + 86400; // 86400 seconds = 1 day
setcookie($cookie_name, $cookie_value, $cookie_expire); // Parameters: name, value, expiration time

// Check if the cookie is set and retrieve its value
if (isset($_COOKIE[$cookie_name])) {
    $user = $_COOKIE[$cookie_name];
    echo "Welcome, $user!";
} else {
    echo "Cookie named '$cookie_name' is not set.";
}
?>
