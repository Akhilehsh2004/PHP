<!DOCTYPE html>
<html>

<head>
    <title>Circle Calculator</title>
</head>

<body>

    <h2>Circle Area & Circumference Calculator</h2>

    <form method="post">
        Enter Radius: <input type="number" name="radius" step="0.01" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radius = $_POST['radius'];

        // Calculate area
        $area = pi() * pow($radius, 2);

        // Calculate circumference
        $circumference = 2 * pi() * $radius;

        // Display results
        echo "<h3>Results:</h3>";
        echo "Radius: $radius <br>";
        echo "Area of Circle: " . round($area, 2) . "<br>";
        echo "Circumference of Circle: " . round($circumference, 2) . "<br>";
    }
    ?>

</body>

</html>