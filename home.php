<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Galleria</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav>
            <ul>
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="addcars.php">Add Cars</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-image">
            <img src="imgs/mainhero.jpg" alt="Car Image">
        </div>
        <div class="hero-content">
            <h1>Welcome to Car Galleria</h1>
            <p>Explore our collection of CARS</p>
        </div>
    </section>

    <!-- Image Section -->
<section class="image-section">
    <div class="image-container">
        <img src="imgs/lpcar1.jpg" alt="Car Image 1" class="image">
        <img src="imgs/ipcar2.jpg" alt="Car Image 2" class="image">
        <img src="imgs/lpcar3.jpg" alt="Car Image 3" class="image">
    </div>
</section>



    <!-- Body Section -->
    <section class="body">
        <h2>AIM"</h2>
        <p>All your cars at one place.</p>
        <div style="display: flex; align-items: center; gap: 20px;">
            <a href="about.html"><button>Learn More</button></a>
            <p style="margin: 0; font-size: 25px; color: #2b495f;">User Visits: <span id="visitCount">0</span></p>
        </div>
    </section>

    <script>
        // Simple visitor counter
        document.addEventListener('DOMContentLoaded', function() {
            let visitCount = localStorage.visitCount ? 
                Number(localStorage.visitCount) + 1 : 1;
            localStorage.visitCount = visitCount;
            document.getElementById('visitCount').textContent = visitCount;
        });
    </script>

    <!-- Footer Section -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2023 Car Galleria. All rights reserved.</p>
            <p>Designed and developed by <a href="#">ZOD</a></p>
        </div>
    </footer>
</body>
</html>