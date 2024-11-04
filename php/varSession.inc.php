<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Define categories and products array if not already set in session
if (!isset($_SESSION['categories'])) {
    $_SESSION['categories'] = [
        'toys' => [
            ['name' => 'Colorful Lamp', 'price' => 20, 'stock' => 10, 'image' => 'img/toy1.png'],
            ['name' => 'Joyful Kitty', 'price' => 25, 'stock' => 8, 'image' => 'img/toy2.png'],
            ['name' => 'Magical Unicorn', 'price' => 15, 'stock' => 12, 'image' => 'img/toy3.png'],
            // Add more toy products here
        ],
        'clothing' => [
            ['name' => 'Magical Hoodie', 'price' => 35, 'stock' => 15, 'image' => 'img/clothing1.png'],
            ['name' => 'Fantasy Pyjama', 'price' => 20, 'stock' => 10, 'image' => 'img/clothing2.png'],
            ['name' => 'Cozy Sweater', 'price' => 45, 'stock' => 8, 'image' => 'img/clothing3.png'],
            // Add more clothing products here
        ],
        'collectibles' => [
            ['name' => 'Magical Figurine', 'price' => 50, 'stock' => 20, 'image' => 'img/collectible1.png'],
            ['name' => 'Fantasy Mug', 'price' => 150, 'stock' => 5, 'image' => 'img/collectible2.png'],
            ['name' => 'Enchanted Keychain', 'price' => 10, 'stock' => 50, 'image' => 'img/collectible3.png'],
            // Add more collectible products here
        ]
    ];
}
?>
