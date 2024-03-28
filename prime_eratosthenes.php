<?php

function prime_eratosthenes($n) {
    $start_time = microtime(true); // Record the start time
    $prime_list = [];
    $non_prime_list = []; // Create an empty array to store non-prime numbers
    // Iterate through the numbers from 2 to 'n'
    for ($i = 2; $i <= $n; $i++) {
        if (!in_array($i, $non_prime_list)) {
            // If 'i' is not in the 'non_prime_list,' it's a prime number; add it to prime_list
            $prime_list[] = $i;

            // Mark all multiples of 'i' as non-prime by adding them to 'non_prime_list'
            for ($j = $i * $i; $j <= $n; $j += $i) {
                $non_prime_list[] = $j;
            }
        }
    }
    $end_time = microtime(true); // Record the end time
    $time_taken = $end_time - $start_time;
    echo "The highest prime number up to $n inclusive is: " . end($prime_list) . "<br>";
    echo "Time taken to generate prime numbers up to $n inclusive: $time_taken seconds<br>";
    echo "Here is a list of all Prime Numbers up to $n inclusive:<br>";
    print_r($prime_list);
    return $prime_list;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if number is provided
    if (!empty($_POST["number"])) {
        $number = intval($_POST["number"]);
        echo "<h2>Prime Numbers up to $number:</h2>";
        prime_eratosthenes($number);
    } else {
        echo "<p>Please enter a number.</p>";
    }
}

?>