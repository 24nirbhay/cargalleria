<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_galleria";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $car_name = $_POST['car-name'] ?? '';
    $car_year = (int)($_POST['car-year'] ?? 0);
    $car_model = $_POST['car-model'] ?? '';
    $parent_company = $_POST['parent-company'] ?? '';
    $cc = (int)($_POST['cc'] ?? 0);
    $popular_in_country = $_POST['popular-in-country'] ?? '';

    $stmt = $conn->prepare("INSERT INTO car (car_name, car_year, car_model, parent_company, cc, popular_in_country) VALUES (?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("sissis", $car_name, $car_year, $car_model, $parent_company, $cc, $popular_in_country);

    if ($stmt->execute()) {
        header("Location: gallery.php");
        exit();
    } else {
        echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error . "<br>";
    }

    $stmt->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Add Car</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="addcars.php" class="active">Add Cars</a></li>
            </ul>
        </nav>
    </header>

    <!-- Add Cars Section -->
    <section class="add-cars">
        <div class="add-cars-form">
            <h2>Add a New Car</h2>
            <form method="POST" action="addcars.php">
                <div class="form-group">
                    <label for="car-name">Car Name:</label>
                    <input type="text" id="car-name" name="car-name" required />
                </div>
                <div class="form-group">
                    <label for="car-year">Car Year:</label>
                    <input type="number" id="car-year" name="car-year" required />
                </div>
                <div class="form-group">
                    <label for="car-model">Car Model:</label>
                    <input type="text" id="car-model" name="car-model" required />
                </div>
                <div class="form-group">
                    <label for="parent-company">Parent Company:</label>
                    <input type="text" id="parent-company" name="parent-company" required />
                </div>
                <div class="form-group">
                    <label for="cc">ENGINE CC:</label>
                    <input type="number" id="cc" name="cc" required />
                </div>
                <div class="form-group">
                    <label for="popular-in-country">Popular in Country:</label>
                    <input type="text" id="popular-in-country" name="popular-in-country" required />
                </div>
                <button type="submit">Add Car</button>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2023 Car Galleria. All rights reserved.</p>
            <p>Designed and developed by <a href="#">ZOD</a></p>
        </div>
    </footer>
</body>
</html>
