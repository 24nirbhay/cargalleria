<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_galleria";
$conn = new mysqli($servername, $username, $password, $dbname);

$car_id = $_GET['id'] ?? null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $car_id = $_POST['car_id'];
    $car_name = $_POST['car-name'];
    $car_year = (int)$_POST['car-year'];
    $car_model = $_POST['car-model'];
    $parent_company = $_POST['parent-company'];
    $cc = (int)$_POST['cc'];
    $popular_in_country = $_POST['popular-in-country'];

    $stmt = $conn->prepare("UPDATE car SET car_name=?, car_year=?, car_model=?, parent_company=?, cc=?, popular_in_country=? WHERE car_id=?");
    $stmt->bind_param("sissisi", $car_name, $car_year, $car_model, $parent_company, $cc, $popular_in_country, $car_id);
    $stmt->execute();
    header("Location: gallery.php");
    exit();
}

if ($car_id) {
    $stmt = $conn->prepare("SELECT * FROM car WHERE car_id=?");
    $stmt->bind_param("i", $car_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $car = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Car | Car Galleria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f7fa;
            margin: 0;
            padding: 0;
        }
        .editcar-section {
            max-width: 500px;
            margin: 48px auto 0 auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(44, 62, 80, 0.15);
            padding: 38px 36px 32px 36px;
        }
        .editcar-section h2 {
            margin-top: 0;
            color: #1a3d5d;
            letter-spacing: 1px;
            font-size: 2rem;
            margin-bottom: 26px;
            text-align: center;
        }
        .editcar-form label {
            display: block;
            margin-bottom: 8px;
            color: #2b495f;
            font-weight: 500;
        }
        .editcar-form input[type="text"],
        .editcar-form input[type="number"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 18px;
            border: 1px solid #bfc9d1;
            border-radius: 6px;
            font-size: 1rem;
            background: #f8fafb;
            transition: border 0.2s;
        }
        .editcar-form input[type="text"]:focus,
        .editcar-form input[type="number"]:focus {
            border: 1.5px solid #1a3d5d;
            outline: none;
        }
        .editcar-form .form-btn-row {
            display: flex;
            justify-content: space-between;
            gap: 18px;
            margin-top: 10px;
        }
        .editcar-form button {
            background: #1a3d5d;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 10px 30px;
            font-size: 1rem;
            cursor: pointer;
            font-weight: 500;
            transition: background 0.2s, transform 0.1s;
        }
        .editcar-form button[type="submit"]:hover {
            background: #3cb371;
            transform: scale(1.04);
        }
        .editcar-form .cancel-btn {
            background: #c0392b;
        }
        .editcar-form .cancel-btn:hover {
            background: #922b21;
            transform: scale(1.04);
        }
        @media (max-width: 600px) {
            .editcar-section {
                padding: 18px 6px 18px 6px;
            }
            .editcar-form button {
                padding: 10px 10px;
                font-size: 0.97rem;
            }
        }
    </style>
</head>
<body>
    <div class="editcar-section">
        <h2>Edit Car</h2>
        <form method="POST" action="editcar.php" class="editcar-form">
            <input type="hidden" name="car_id" value="<?= htmlspecialchars($car['car_id']) ?>">
            <label for="car-name">Car Name:</label>
            <input type="text" id="car-name" name="car-name" value="<?= htmlspecialchars($car['car_name']) ?>" required />

            <label for="car-year">Car Year:</label>
            <input type="number" id="car-year" name="car-year" value="<?= htmlspecialchars($car['car_year']) ?>" required />

            <label for="car-model">Car Model:</label>
            <input type="text" id="car-model" name="car-model" value="<?= htmlspecialchars($car['car_model']) ?>" required />

            <label for="parent-company">Parent Company:</label>
            <input type="text" id="parent-company" name="parent-company" value="<?= htmlspecialchars($car['parent_company']) ?>" required />

            <label for="cc">Engine CC:</label>
            <input type="number" id="cc" name="cc" value="<?= htmlspecialchars($car['cc']) ?>" required />

            <label for="popular-in-country">Popular In Country:</label>
            <input type="text" id="popular-in-country" name="popular-in-country" value="<?= htmlspecialchars($car['popular_in_country']) ?>" required />

            <div class="form-btn-row">
                <button type="submit">Save Changes</button>
                <a href="gallery.php"><button type="button" class="cancel-btn">Cancel</button></a>
            </div>
        </form>
    </div>
</body>
</html>
