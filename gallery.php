<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Galleria</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="gallery.js"></script>
    <style>
        /* --- PROFESSIONAL TABLE & FORM STYLES --- */
        .new-cars-section {
            max-width: 950px;
            margin: 40px auto 0 auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(44, 62, 80, 0.15);
            padding: 32px 36px 36px 36px;
        }
        .new-cars-section h2 {
            margin-top: 0;
            color: #1a3d5d;
            letter-spacing: 1px;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .search-bar-row {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 24px;
        }
        .search-bar-row input[type="text"] {
            padding: 8px 12px;
            border: 1px solid #bfc9d1;
            border-radius: 6px;
            font-size: 1rem;
            width: 240px;
            transition: border 0.2s;
        }
        .search-bar-row input[type="text"]:focus {
            border: 1.5px solid #1a3d5d;
            outline: none;
        }
        .search-bar-row button, .search-bar-row .back-btn {
            background: #1a3d5d;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 8px 22px;
            font-size: 1rem;
            cursor: pointer;
            font-weight: 500;
            transition: background 0.2s, transform 0.1s;
        }
        .search-bar-row button:hover, .search-bar-row .back-btn:hover {
            background: #2b495f;
            transform: translateY(-2px) scale(1.03);
        }
        .new-cars-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin-bottom: 20px;
            background: #f8fafb;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 12px rgba(44, 62, 80, 0.06);
        }
        .new-cars-table th, .new-cars-table td {
            padding: 13px 18px;
            text-align: left;
        }
        .new-cars-table th {
            background: #e4eaf1;
            color: #1a3d5d;
            font-weight: 600;
            border-bottom: 2px solid #d6dde5;
        }
        .new-cars-table tr:not(:last-child) td {
            border-bottom: 1px solid #e8e8e8;
        }
        .new-cars-table td {
            color: #2b495f;
            background: #fff;
        }
        .edit-btn {
            background: #3cb371;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 7px 16px;
            font-size: 1rem;
            cursor: pointer;
            font-weight: 500;
            transition: background 0.2s, transform 0.1s;
        }
        .edit-btn:hover {
            background: #2e8b57;
            transform: scale(1.05);
        }
        .delete-form-row {
            margin-top: 26px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .delete-form-row input[type="text"] {
            padding: 7px 10px;
            border: 1px solid #bfc9d1;
            border-radius: 5px;
            font-size: 1rem;
        }
        .delete-form-row button {
            background: #c0392b;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 7px 18px;
            font-size: 1rem;
            cursor: pointer;
            font-weight: 500;
            transition: background 0.2s, transform 0.1s;
        }
        .delete-form-row button:hover {
            background: #922b21;
            transform: scale(1.05);
        }
        .delete-message {
            margin-bottom: 16px;
            color: #16a085;
            font-weight: 500;
        }
        @media (max-width: 700px) {
            .new-cars-section {
                padding: 18px 6px 18px 6px;
            }
            .new-cars-table th, .new-cars-table td {
                padding: 7px 7px;
                font-size: 0.97rem;
            }
            .search-bar-row input[type="text"] {
                width: 100px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav>
            <ul>
                <li><a href="home.php" >Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="gallery.php" class="active">Gallery</a></li>
                <li><a href="addcars.php">Add Cars</a></li>
            </ul>
        </nav>
    </header>

    <!-- Gallery Section -->
    <section class="gallery">
        <div class="gallery-grid">
            <!-- Static gallery items (unchanged) -->
            <div class="gallery-item">
                <img src="imgs/car8.jpg" alt="Car Image 1">
                <h2>Bumblebee</h2>
                <a href="thecar.html">View Details</a>
            </div>
            <div class="gallery-item">
                <img src="imgs/car7.jpg" alt="Car Image 2">
                <h2>Lotus</h2>
                <a href="thecar.html">View Details</a>
            </div>
            <div class="gallery-item">
                <img src="imgs/car6.jpg" alt="Car Image 3">
                <h2>Tata</h2>
                <a href="thecar.html">View Details</a>
            </div>
            <div class="gallery-item">
                <img src="imgs/car5.jpg" alt="Car Image 4">
                <h2>Audi R8</h2>
                <a href="thecar.html">View Details</a>
            </div>
            <div class="gallery-item">
                <img src="imgs/car4.jpg" alt="Car Image 5">
                <h2>Volkswagen GT</h2>
                <a href="thecar.html">View Details</a>
            </div>
            <div class="gallery-item">
                <img src="imgs/car3.jpg" alt="Car Image 6">
                <h2>Mustang</h2>
                <a href="thecar.html">View Details</a>
            </div>
            <div class="gallery-item">
                <img src="imgs/car2.jpg" alt="Car Image 7">
                <h2>Tarzan</h2>
                <a href="thecar.html">View Details</a>
            </div>
            <div class="gallery-item">
                <img src="imgs/car(1).jpg" alt="Car Image 8">
                <h2>G-WagonR</h2>
                <a href="thecar.html">View Details</a>
            </div>
            <div class="gallery-item">
                <img src="imgs/car12.jpg" alt="Car Image 9">
                <h2>Ambassador</h2>
                <a href="thecar.html">View Details</a>
            </div>
            <div class="gallery-item">
                <img src="imgs/car11.jpg" alt="Car Image 10">
                <h2>Hellcat SR</h2>
                <a href="thecar.html">View Details</a>
            </div>
            <div class="gallery-item">
                <img src="imgs/car9.jpg" alt="Car Image 11">
                <h2>Audio Q8</h2>
                <a href="thecar.html">View Details</a>
            </div>
            <div class="gallery-item">
                <img src="imgs/car10.jpg" alt="Car Image 12">
                <h2>Dodge Challenger</h2>
                <a href="thecar.html">View Details</a>
            </div>
        </div>

        <!-- Newly Added Cars Section -->
        <div class="new-cars-section">
        <h2>Newly Added Cars</h2>

<?php
// Handle delete form submission
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['delete-car-name'])) {
    $delete_car_name = $_POST['delete-car-name'];

    $conn_del = new mysqli("localhost", "root", "", "car_galleria");
    if ($conn_del->connect_error) {
        die("Connection failed: " . $conn_del->connect_error);
    }

    $stmt_del = $conn_del->prepare("DELETE FROM car WHERE car_name = ?");
    if ($stmt_del) {
        $stmt_del->bind_param("s", $delete_car_name);
        if ($stmt_del->execute()) {
            $delete_message = "Car '" . htmlspecialchars($delete_car_name) . "' deleted successfully.";
        } else {
            $delete_message = "Error deleting car: " . $stmt_del->error;
        }
        $stmt_del->close();
    } else {
        $delete_message = "Prepare failed: " . $conn_del->error;
    }
    $conn_del->close();
}
?>

        <!-- Search Form -->
        <form method="GET" action="gallery.php" class="search-bar-row">
            <input type="text" name="search" placeholder="Search by Car Name" value="<?php echo htmlspecialchars($_GET['search'] ?? ''); ?>">
            <button type="submit">Search</button>
            <?php if (isset($_GET['search']) && $_GET['search'] !== ''): ?>
                <a href="gallery.php" class="back-btn" style="text-decoration:none;"><button type="button" class="back-btn">Back</button></a>
            <?php endif; ?>
        </form>

        <?php
        // Database configuration
        $servername = "localhost";
        $username = "root";
        $password = ""; // Update with your DB password
        $dbname = "car_galleria";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Show delete message if set
        if (isset($delete_message)) {
            echo '<div class="delete-message">' . $delete_message . '</div>';
        }

        // Fetch newly added cars
        $search = $_GET['search'] ?? '';
        if ($search !== '') {
            // Search by car_name
            $stmt = $conn->prepare("SELECT * FROM car WHERE car_name LIKE ? OR car_model LIKE ? OR car_id = ?");
            $like = "%$search%";
            $car_id = is_numeric($search) ? (int)$search : 0;
            $stmt->bind_param("ssi", $like, $like, $car_id);
            $stmt->execute();
            $result = $stmt->get_result();
        } else {
            $sql = "SELECT * FROM car ORDER BY car_id DESC";
            $result = $conn->query($sql);
        }

        if ($result === false) {
            echo "<p>Error in query: " . htmlspecialchars($conn->error) . "</p>";
        } elseif ($result->num_rows > 0) {
            echo '<table class="new-cars-table">';
            echo '<tr>
                    <th>ID</th>
                    <th>Car Name</th>
                    <th>Year</th>
                    <th>Model</th>
                    <th>Parent Company</th>
                    <th>Engine CC</th>
                    <th>Popular In Country</th>
                    <th>Actions</th>
                  </tr>';
            while($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($row["car_id"]) . '</td>';
                echo '<td>' . htmlspecialchars($row["car_name"]) . '</td>';
                echo '<td>' . htmlspecialchars($row["car_year"]) . '</td>';
                echo '<td>' . htmlspecialchars($row["car_model"]) . '</td>';
                echo '<td>' . htmlspecialchars($row["parent_company"]) . '</td>';
                echo '<td>' . htmlspecialchars($row["cc"]) . '</td>';
                echo '<td>' . htmlspecialchars($row["popular_in_country"]) . '</td>';
                echo '<td>
                        <a href="editcar.php?id=' . $row["car_id"] . '"><button type="button" class="edit-btn">Edit</button></a>
                      </td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo "<p>No newly added cars found.</p>";
        }

        $conn->close();
        ?>

        <!-- Delete Car Form -->
        <form method="POST" action="gallery.php" class="delete-form-row">
            <label for="delete-car-name" style="font-weight:500;">Remove Car:</label>
            <input type="text" id="delete-car-name" name="delete-car-name" required />
            <button type="submit">Delete</button>
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
