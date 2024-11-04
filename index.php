<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disney Magic - Home</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            background-image: url('img/disney_background.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
    </style>
</head>
<body>
    <!-- Include Header -->
    <?php include('php/header.inc.php'); ?>

    <!-- Main Content Section -->
    <main>
        <section class="welcome">
            <h1>Welcome to Disney Magic!</h1>
            <p>Your enchanted source for all things Disney! Discover toys, clothing, and magical collectibles.</p>
        </section>
        
        <!-- Placeholder for Featured Products -->
        <section class="featured-products">
            <h2>Featured Products</h2>
            <div class="product-slider">
                <p>Stay tuned for featured Disney magic products!</p>
            </div>
        </section>
    </main>

    <!-- Include Footer -->
    <?php include('php/footer.inc.php'); ?>
</body>
</html>
