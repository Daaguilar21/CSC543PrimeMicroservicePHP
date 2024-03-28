<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Generator</title>
</head>
<body>
    <h2>Enter a Number to Generate Prime Numbers</h2>
    <form action="index.php" method="get">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Generate Primes</button>
    </form>

    <?php
    include 'prime_eratosthenes.php';

    if (isset($_GET['number'])) {
        $number = (int)$_GET['number'];
        echo "<h3>Prime Numbers up to $number:</h3>";
        prime_eratosthenes($number);
    }
    ?>
</body>
</html>
