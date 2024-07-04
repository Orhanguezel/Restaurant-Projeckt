<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antalya Döner Pizzeria</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo" loading="lazy">
            Antalya Döner Pizzeria
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Admin Panel</a>
                    </li>
                <?php endif; ?>
                <?php if (isset($_SESSION['username'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="php/logout.php">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.html">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4">Welcome to Antalya Döner Pizzeria</h1>
            <p class="lead">The best pizza and döner in town.</p>
        </div>
    </div>

    <!-- Menu Section -->
    <div id="menu" class="container mt-5">
        <h2>Our Menu</h2>
        <div id="menu-container" class="row">
            <!-- Menü verileri burada yüklenecek -->
        </div>
    </div>

    <!-- Gallery Section -->
    <div id="gallery" class="container mt-5">
        <h2>Gallery</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="images/gallery1.jpg" class="img-fluid" alt="Gallery Image 1">
            </div>
            <div class="col-md-4">
                <img src="images/gallery2.jpg" class="img-fluid" alt="Gallery Image 2">
            </div>
            <div class="col-md-4">
                <img src="images/gallery3.jpg" class="img-fluid" alt="Gallery Image 3">
            </div>
        </div>
    </div>

    <!-- Order Section -->
    <div id="order" class="container mt-5">
        <h2>Place an Order</h2>
        <form id="order-form">
            <div class="form-group">
                <label for="customer_name">Customer Name</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name" required>
            </div>
            <div class="form-group">
                <label for="order_details">Order Details</label>
                <textarea class="form-control" id="order_details" name="order_details" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Order</button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Antalya Döner Pizzeria</h5>
                    <p>
                        The best place to enjoy delicious pizza and döner.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contact Us</h5>
                    <p>Email: info@antalya-doner-pizzeria.com</p>
                    <p>Phone: +123 456 7890</p>
                </div>
            </div>
        </div>
        <div class="text-center p-3 bg-dark text-white">
            &copy; 2023 Antalya Döner Pizzeria
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script>
        // Sipariş formu gönderme
        $('#order-form').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: 'php/add_order.php',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    alert('Order placed successfully!');
                    $('#order-form')[0].reset();
                },
                error: function(error) {
                    console.error('Error placing order:', error);
                }
            });
        });
    </script>
</body>
</html>
