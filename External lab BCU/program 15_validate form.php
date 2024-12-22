<?php
function validate($data) {
    return htmlspecialchars(trim($data));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = validate($_POST["name"]);
    $email = validate($_POST["email"]);
    $age = validate($_POST["age"]);
    $errors = [];

    if (empty($name)) $errors[] = "Name is required.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required.";
    if (!is_numeric($age)) $errors[] = "Valid age is required.";

    echo empty($errors) 
        ? "Validation successful!<br>Name: $name<br>Email: $email<br>Age: $age" 
        : implode("<br>", $errors);
}
?>