<?php
session_start();

// Initialize the cart if it doesn't already exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
include('php/varSession.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disney Magic - Collectibles</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Include Header -->
    <?php include('php/header.inc.php'); ?>

    <!-- Main Content Section -->
    <main>
        <section class="product-list">
            <h1>Collectibles</h1>
            <p>Browse our unique collection of Disney-inspired collectibles!</p>

            <!-- Collectibles Table -->
            <table id="productTable">
                <tr>
                    <th>Product</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th class="stock-col" style="display: none;">Stock</th>
                    <th>Quantity Ordered</th>
                    <th>Add to Cart</th>
                </tr>
                
                <?php foreach ($_SESSION['categories']['collectibles'] as $product): ?>
                <tr>
                    <td><?php echo htmlspecialchars($product['name']); ?></td>
                    <td><img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="product-image" onclick="zoomImage(this)"></td>
                    <td>$<?php echo number_format($product['price'], 2); ?></td>
                    <td class="stock-col" style="display: none;"><?php echo $product['stock']; ?></td>
                    <td>
                        <button class="quantity-btn" onclick="decrementQuantity(this)">-</button>
                        <span class="quantity-ordered">0</span>
                        <button class="quantity-btn" onclick="incrementQuantity(this, <?php echo $product['stock']; ?>)">+</button>
                    </td>
                    <form method="post" action="add_to_cart.php" class="add-to-cart-form">
    <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($product['name']); ?>">
    <input type="hidden" name="product_price" value="<?php echo htmlspecialchars($product['price']); ?>">
    <input type="hidden" name="product_stock" value="<?php echo htmlspecialchars($product['stock']); ?>">
    <input type="hidden" name="quantity" class="quantity-input" value="0"> <!-- Dynamic quantity value -->
    <button type="submit">Add to Cart</button>
</form>



                </tr>
                <?php endforeach; ?>
            </table>

            <!-- Toggle Stock Button -->
            <button onclick="toggleStock()">Show/Hide Stock</button>
        </section>
    </main>

    <!-- Include Footer -->
    <?php include('php/footer.inc.php'); ?>

    <!-- JavaScript for Page Functionality -->
    <script>
        // Toggle Stock Column
        function toggleStock() {
            const stockColumns = document.querySelectorAll('.stock-col');
            stockColumns.forEach(col => {
                col.style.display = (col.style.display === 'none') ? '' : 'none';
            });
        }
// Update the quantity input field with the displayed quantity
document.querySelectorAll('.add-to-cart-form').forEach(form => {
    const quantityDisplay = form.querySelector('.quantity-ordered'); // Displayed quantity
    const quantityInput = form.querySelector('.quantity-input');     // Hidden input for quantity

    form.querySelectorAll('.quantity-btn').forEach(button => {
        button.addEventListener('click', function() {
            // Update hidden quantity input with the displayed quantity
            quantityInput.value = quantityDisplay.textContent;
        });
    });
});


        // Increment Quantity
        function incrementQuantity(button, maxStock) {
            const quantityDisplay = button.previousElementSibling;
            let quantity = parseInt(quantityDisplay.textContent);

            if (quantity < maxStock) {
                quantity += 1;
                quantityDisplay.textContent = quantity;
            }
        }

        // Decrement Quantity
        function decrementQuantity(button) {
            const quantityDisplay = button.nextElementSibling;
            let quantity = parseInt(quantityDisplay.textContent);

            if (quantity > 0) {
                quantity -= 1;
                quantityDisplay.textContent = quantity;
            }
        }

        // Zoom Image
        function zoomImage(image) {
            const zoomWindow = window.open("", "ImageZoom", "width=600,height=600");
            zoomWindow.document.write(`
                <html>
                    <head><title>Image Zoom</title></head>
                    <body style="text-align: center;">
                        <img src="${image.src}" alt="${image.alt}" style="width: 100%; height: auto;">
                        <br><button onclick="window.close()">Close</button>
                    </body>
                </html>
            `);
        }
    </script>
</body>
</html>
