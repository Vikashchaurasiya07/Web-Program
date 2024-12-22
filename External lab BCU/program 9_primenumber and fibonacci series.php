<?php
// Prime Numbers
echo "Prime Numbers: ";
for ($num = 2, $count = 0; $count < 15; $num++) {
    $isPrime = true;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        echo $num . " ";
        $count++;
    }
}

// Fibonacci Series
echo "<br>Fibonacci Series: ";
$num1 = 0; $num2 = 1;
for ($i = 0; $i < 10; $i++) {
    echo $num1 . " ";
    $nextNum = $num1 + $num2;
    $num1 = $num2;
    $num2 = $nextNum;
}
?>
