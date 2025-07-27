# E-Commerce System 🛒

[![PHP](https://img.shields.io/badge/PHP-7.4%2B-blue)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0%2B-orange)](https://www.mysql.com/)
[![Composer](https://img.shields.io/badge/Composer-2.0%2B-lightgrey)](https://getcomposer.org/)
[![License](https://img.shields.io/badge/License-MIT-green)](https://opensource.org/licenses/MIT)

A modern e-commerce platform built with PHP and MySQL, featuring a responsive design, secure payment processing, and a comprehensive admin dashboard.

---

## Features ✨
- **User Authentication** – Secure registration/login system
- **Product Management** – Full CRUD operations for products
- **Shopping Cart** – Persistent cart with session management
- **Order Processing** – Complete order lifecycle management
- **Payment Integration** – Stripe/PayPal payment gateway
- **Admin Dashboard** – Sales analytics and inventory management
- **Responsive Design** – Mobile-friendly interface
- **Search & Filtering** – Advanced product search capabilities
- **User Reviews** – Product rating and review system

---

## Technology Stack 💻

**Backend:**
- PHP 7.4+
- MySQL 8.0+
- Composer (Dependency Management)

**Frontend:**
- HTML5
- CSS3 (Flexbox/Grid)
- JavaScript (ES6)
- Bootstrap 5

**Tools:**
- phpMyAdmin (Database Management)
- Stripe/PayPal API (Payment Processing)
- Git (Version Control)
- Markdown (Documentation)

---

## Installation Guide 🛠️

### Prerequisites
- PHP 7.4 or higher
- MySQL 8.0 or higher
- Composer
- Web server (Apache/Nginx)

### Step-by-Step Setup
1. Clone the repository:
   ```bash
   git clone https://github.com/danial-blackhat/e-commerce-system.git
   cd e-commerce-system
   ```
2. Install PHP dependencies:
   ```bash
   composer install
   ```
3. Configure environment variables:
   ```bash
   cp .env.example .env
   ```
   Edit the `.env` file with your database credentials:
   ```env
   DB_HOST=localhost
   DB_NAME=ecommerce_db
   DB_USER=root
   DB_PASS=your_password
   APP_KEY=your_secret_key
   ```
4. Import database schema:
   ```bash
   mysql -u root -p ecommerce_db < database/schema.sql
   ```
5. Set up virtual host (Apache example):
   ```apacheconf
   <VirtualHost *:80>
       ServerName ecommerce.local
       DocumentRoot "/path/to/e-commerce-system/public"
       <Directory "/path/to/e-commerce-system/public">
           Options Indexes FollowSymLinks
           AllowOverride All
           Require all granted
       </Directory>
   </VirtualHost>
   ```
6. Run the application:
   ```bash
   php -S localhost:8000 -t public
   ```
7. Access the site:
   - http://localhost:8000

---

## Admin Access 🔒
Default admin credentials:
- Email: `admin@example.com`
- Password: `Admin@123`

> **Note:** Change these credentials immediately after first login.

---

## Project Structure 📂
```
e-commerce-system/
├── app/                 # Application core
│   ├── Controllers/     # MVC controllers
│   ├── Models/          # Database models
│   ├── Views/           # Presentation layer
│   └── Core/            # Framework components
│
├── config/              # Configuration files
├── database/            # Database scripts
│   ├── schema.sql       # Database schema
│   └── seeds.sql        # Sample data
│
├── public/              # Web root
│   ├── assets/          # CSS, JS, images
│   └── index.php        # Entry point
│
├── vendor/              # Composer dependencies
├── .env.example         # Environment template
├── composer.json        # PHP dependencies
└── README.md            # Project documentation
```

---

## Configuration ⚙️

### Payment Gateway Setup
- Create accounts at Stripe or PayPal
- Add API credentials to `.env`:
  ```env
  STRIPE_KEY=pk_test_your_stripe_key
  STRIPE_SECRET=sk_test_your_stripe_secret
  PAYPAL_CLIENT_ID=your_paypal_client_id
  PAYPAL_SECRET=your_paypal_secret
  ```

### Email Configuration
  ```env
  MAIL_DRIVER=smtp
  MAIL_HOST=smtp.mailtrap.io
  MAIL_PORT=2525
  MAIL_USERNAME=your_mail_username
  MAIL_PASSWORD=your_mail_password
  MAIL_FROM=no-reply@ecommerce.test
  ```

---

## Screenshots 📸
| Customer View | Admin Dashboard |
|---------------|----------------|
| ![Product Page](https://via.placeholder.com/600x400/4A5568/FFFFFF?text=Product+Page) | ![Admin Dashboard](https://via.placeholder.com/600x400/2D3748/FFFFFF?text=Admin+Dashboard) |
| Shopping Cart | Order Management |
| ![Shopping Cart](https://via.placeholder.com/600x400/4A5568/FFFFFF?text=Shopping+Cart) | ![Order Management](https://via.placeholder.com/600x400/2D3748/FFFFFF?text=Order+Management) |

---

## Contributing 🤝
We welcome contributions! Please follow these guidelines:
- Fork the repository
- Create a new branch:
  ```bash
  git checkout -b feature/your-feature
  ```
- Commit your changes:
  ```bash
  git commit -m 'feat: add new feature'
  ```
- Push to the branch:
  ```bash
  git push origin feature/your-feature
  ```
- Open a pull request

### Code Style Guidelines
- Follow PSR-12 coding standards
- Use meaningful variable and function names
- Comment complex logic sections
- Keep methods under 25 lines when possible
- Write unit tests for new features

---

## Security Best Practices 🔒
- Always use prepared statements for database queries
- Validate and sanitize all user inputs
- Implement CSRF protection for forms
- Use password hashing with bcrypt
- Set proper file permissions (755 for directories, 644 for files)
- Regularly update dependencies
- Implement HTTPS in production

---

## License 📄
This project is licensed under the MIT License - see the LICENSE file for details.

---

## Developed by Danial
- 📧 Email: mrdanial2791@outlook.my
- 💼 Portfolio: https://yourportfolio.com
- 🐱 GitHub: [danial-blackhat](https://github.com/danial-blackhat)

---

## Roadmap 🗺️
- Implement multi-language support
- Add recommendation engine
- Develop mobile application
- Integrate with shipping APIs
- Create affiliate program system
- Implement AR product preview
