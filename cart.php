<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Include Header -->
    <?php include('php/header.inc.php'); ?>

    <h1>Your Cart</h1>
    <table>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        <?php
        $totalPrice = 0;
        foreach ($_SESSION['cart'] as $productName => $productDetails) {
            $itemTotal = $productDetails['price'] * $productDetails['quantity'];
            $totalPrice += $itemTotal;
            ?>
            <tr>
                <td><?php echo htmlspecialchars($productName); ?></td>
                <td>$<?php echo number_format($productDetails['price'], 2); ?></td>
                <td><?php echo $productDetails['quantity']; ?></td>
                <td>$<?php echo number_format($itemTotal, 2); ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="3">Total:</td>
            <td>$<?php echo number_format($totalPrice, 2); ?></td>
        </tr>
    </table>

    <!-- Include Footer -->
    <?php include('php/footer.inc.php'); ?>
</body>
</html>
