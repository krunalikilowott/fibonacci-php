<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Generate Fibonacci Series</h1>
        <form method="POST">
            <label for="terms">Enter the number of terms:</label>
            <input type="number" name="terms" id="terms" min="1" required>
            <br><br>
            <input type="submit" value="Generate">
        </form>

        <?php
        function generateFibonacci($n) {
            $fib = array();
            $fib[0] = 0;
            $fib[1] = 1;

            for ($i = 2; $i < $n; $i++) {
                $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
            }

            return $fib;
        }

        if (isset($_POST['terms'])) {
            $n = (int)$_POST['terms'];

            if ($n <= 0) {
                echo "<p>Please enter a positive integer.</p>";
            } else {
                $fibonacciSeries = generateFibonacci($n);

                echo "<p>Fibonacci Series with $n terms:</p>";
                echo "<ul>";
                foreach ($fibonacciSeries as $number) {
                    echo "<li>$number</li>";
                }
                echo "</ul>";
            }
        }
        ?>
    </div>
</body>
</html>