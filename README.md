# Disney Magic Website

Welcome to **Disney Magic**, a website dedicated to showcasing a catalog of Disney-inspired products. This project demonstrates a range of web development skills, including HTML, CSS, JavaScript, PHP, and dynamic features for an interactive user experience.

## Project Overview

The Disney Magic website offers an online catalog for different categories of magical products, including:
- **Toys**
- **Clothing**
- **Collectibles**

Users can explore the catalog, view product details, adjust quantities, and interact with a contact form for inquiries.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Project Structure](#project-structure)
- [How to Run Locally](#how-to-run-locally)
- [Contact](#contact)

## Features

- **Homepage** with an introduction, links to all product categories, and a new Disney-inspired background for an immersive feel.
- **Product Catalog Pages**: Each category has a dedicated PHP page (Toys, Clothing, Collectibles) with:
    - **Dynamic Stock Toggle**: Show or hide available stock for each product.
    - **Quantity Controls**: Adjust quantity using `+` and `-` buttons, capped by the available stock. Quantities are dynamically passed to the cart upon addition.
    - **Image Zoom Feature**: Enlarge images in a new window by clicking, with a close option for a better view.
- **Shopping Cart**:
    - **Add to Cart Functionality**: Cart items are stored in the session, with quantities managed through user-selected values.
    - **Session-based Storage**: Keeps cart information for the session duration.
- **Contact Form**: Validates user input on both client and server sides, highlighting any issues directly for the user and ensuring all fields are correctly formatted.
- **Responsive Design**: Optimized for desktop, tablet, and mobile devices.
- **Footer with Sticky Positioning**: Ensures a consistent footer position at the bottom of all pages.

## Technologies Used

- **HTML**: Structured the content for each page.
- **CSS**: Provided styles for layout, spacing, color, and a custom Disney-inspired background.
- **JavaScript**: Enabled dynamic elements (stock toggle, quantity controls, image zoom, form validation).
- **PHP**: Managed backend functionalities:
  - Handled session management for the shopping cart.
  - Enabled file includes for a clean, modular layout (e.g., header and footer).
  - Validated contact form server-side to enhance security.
- **Git**: Version control for managing project updates.

## Project Structure

```
DisneyMagicWebsite/
├── css/                # Stylesheets
│   └── styles.css      # Main CSS file with background and layout styling
├── img/                # Disney-inspired images, including products and background
├── js/                 # JavaScript files for dynamic features
│   ├── formValidation.js  # Validates the contact form
│   └── cartLogic.js       # Manages cart operations
├── php/                # PHP includes for modularity
│   ├── header.inc.php  # Header section include
│   ├── footer.inc.php  # Footer section include
│   └── varSession.inc.php  # Session-based variables
├── index.php           # Homepage
├── toys.php            # Toys catalog page
├── clothing.php        # Clothing catalog page
├── collectibles.php    # Collectibles catalog page
├── contact.php         # Contact form page
└── README.md           # Project documentation
```

## How to Run Locally

1. **Clone the repository**:
   ```bash
   git clone https://github.com/nicolaTab/DisneyMagicWebsite.git
   cd DisneyMagicWebsite
   ```

2. **Run on a Local Server**:
   - Place the project folder in the `htdocs` folder of XAMPP/WAMP.
   - Launch XAMPP, start the Apache and MySQL servers.
   - Visit `http://localhost/DisneyMagicWebsite/index.php` in a browser.

3. **Alternative without PHP functionality**:
   - Open `index.php` directly in a web browser for a static preview, though some PHP features may not work.

## Contact

For questions or suggestions, feel free to reach out. Enjoy exploring the magic of Disney! 😊