
# Disney Magic Website

Welcome to **Disney Magic**, a website dedicated to showcasing a catalog of Disney-inspired products. This project is designed to meet specific educational requirements and demonstrates HTML, CSS, JavaScript, and basic web development concepts.

## Project Overview

The Disney Magic website offers an online catalog for different categories of magical products, including:
- **Toys**
- **Clothing**
- **Collectibles**

Users can explore the catalog, view detailed product listings, and contact the store via a contact form.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Project Structure](#project-structure)
- [How to Run Locally](#how-to-run-locally)
- [Contact](#contact)

## Features

- **Homepage** with a welcoming introduction and links to different product categories.
- **Product Catalog Pages**: Each category has a dedicated page (Toys, Clothing, Collectibles) with a grid layout showcasing products, images, names, and prices.
    - **Stock Toggle**: Show or hide the available stock for each product.
    - **Quantity Controls**: Use `+` and `-` buttons to adjust order quantity, limited by available stock.
    - **Image Zoom**: Click on images to enlarge them in a new window with a close option.
- **Contact Form**: Includes form validation to check required fields, email format, and highlights errors for a better user experience.
- **Responsive Design**: Optimized for different screen sizes, providing a user-friendly experience across devices.

## Technologies Used

- **HTML**: Provides the structure of the pages.
- **CSS**: Adds styling for visual appeal.
- **JavaScript**: Adds dynamic functionality (stock toggle, quantity controls, image zoom, and form validation).
- **PHP** (optional): Handles the backend of the contact form (if server-side email functionality is needed).
- **Git**: Version control for managing project changes.
  
## Project Structure

```
DisneyMagicWebsite/
├── css/               # Stylesheets
│   └── styles.css     # Main CSS file
├── img/               # Images for products and logos
├── js/                # JavaScript files
│   └── formValidation.js # Form validation script
├── index.html         # Homepage
├── toys.html          # Toys catalog page
├── clothing.html      # Clothing catalog page
├── collectibles.html  # Collectibles catalog page
├── contact.html       # Contact form page
└── README.md          # Project documentation
```

## How to Run Locally

1. **Clone the repository**:
   ```bash
   git clone https://github.com/nicolaTab/DisneyMagicWebsite.git
   cd DisneyMagicWebsite
   ```

2. **Run on a local server** (if PHP email functionality is required):
   - Place the project folder inside the `htdocs` folder of XAMPP/WAMP.
   - Start the local server and access the site at `http://localhost/DisneyMagicWebsite/`.

3. **Open directly** (without PHP email functionality):
   - Open `index.html` directly in a web browser to view the static site.

## Contact

If you have questions or suggestions, please feel free to reach out :)
