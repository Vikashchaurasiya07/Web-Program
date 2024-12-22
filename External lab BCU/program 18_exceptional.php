<?php
// Division by zero handling
$A = $_GET['dividend'];
$B = $_GET['divisor'];

try {
    if ($B == 0) throw new Exception("Cannot divide by zero.");
    echo "Result: " . ($A / $B) . "<br>";
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
}

// Date format validation
function validateDateFormat($date) {
    return DateTime::createFromFormat('Y-m-d', $date) !== false && DateTime::createFromFormat('Y-m-d', $date)->format('Y-m-d') === $date;
}

try {
    $inputDate = "2023-10-12";
    if (validateDateFormat($inputDate)) echo "Valid date format: $inputDate";
    else throw new Exception("Invalid date format: $inputDate");
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
