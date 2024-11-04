<?php
session_start();

// Initialize the cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Retrieve product details from the form submission
$productName = $_POST['product_name'];
$productPrice = $_POST['product_price'];
$productStock = $_POST['product_stock'];
$quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1; // Default to 1 if empty

// Ensure quantity does not exceed stock
if ($quantity > $productStock) {
    $quantity = $productStock;
}

// Update or add item to cart
if (isset($_SESSION['cart'][$productName])) {
    $_SESSION['cart'][$productName]['quantity'] += $quantity;
    if ($_SESSION['cart'][$productName]['quantity'] > $productStock) {
        $_SESSION['cart'][$productName]['quantity'] = $productStock;
    }
} else {
    $_SESSION['cart'][$productName] = [
        'price' => $productPrice,
        'quantity' => $quantity,
        'stock' => $productStock
    ];
}

// Redirect back to the previous page
header("Location: {$_SERVER['HTTP_REFERER']}");
exit();
