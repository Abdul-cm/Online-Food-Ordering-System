# 🍕 Online Food Ordering System

A comprehensive PHP-based web application for online food ordering with complete admin panel and user management system.

## 📋 Features

### 🛍️ Customer Features
- **User Registration & Login** - Secure user authentication system
- **Browse Food Menu** - View food items by categories
- **Shopping Cart** - Add/remove items with quantity selection
- **Order Placement** - Complete checkout with delivery address
- **Order Tracking** - Real-time order status updates
- **User Account** - Manage profile and view order history
- **Search Functionality** - Find food items quickly
- **Email Notifications** - Order confirmation emails

### 👨‍💼 Admin Features
- **Admin Dashboard** - Complete order and system overview
- **Food Management** - Add, edit, and manage food items and categories
- **Order Management** - Track and update order status through complete lifecycle:
  - Order Confirmation
  - Food Being Prepared
  - Food Pickup
  - Food Delivered
  - Order Cancellation
- **User Management** - View and manage customer accounts
- **Reports & Analytics** - Sales reports and order statistics
- **Image Management** - Upload and manage food item images

### 🔄 Order Lifecycle
1. **Order Placed** - Customer places order
2. **Order Confirmed** - Restaurant confirms the order
3. **Food Being Prepared** - Kitchen starts preparation
4. **Food Pickup** - Order ready for pickup/delivery
5. **Food Delivered** - Order completed successfully

## 🛠️ Technology Stack

- **Backend:** PHP 7.4+
- **Database:** MySQL
- **Frontend:** HTML5, CSS3, Bootstrap 4
- **JavaScript:** jQuery
- **Icons:** Font Awesome
- **Email:** PHP Mail

## 📁 Project Structure

```
├── admin/                 # Admin panel files
│   ├── includes/         # Admin includes (header, sidebar, etc.)
│   ├── css/              # Admin stylesheets
│   ├── js/               # Admin JavaScript files
│   └── *.php             # Admin functionality pages
├── assets/               # Frontend assets
│   ├── css/              # Stylesheets
│   ├── js/               # JavaScript files
│   ├── images/           # Static images
│   └── fonts/            # Web fonts
├── includes/             # Common includes
│   ├── dbconnection.php  # Database configuration
│   ├── header.php        # Site header
│   ├── footer.php        # Site footer
│   └── *.php             # Authentication includes
├── itemimages/           # Food item images
├── DB-MY-SQL/            # Database files
│   └── food_delivery.sql # Database schema
└── *.php                 # Main application pages
```

## 🚀 Installation & Setup

### Prerequisites
- **XAMPP/WAMP/LAMP** server environment
- **PHP 7.4** or higher
- **MySQL 5.7** or higher
- **Web browser** (Chrome, Firefox, Safari, etc.)

### Step 1: Download & Extract
1. Clone or download this repository
2. Extract to your web server directory (htdocs/www)

### Step 2: Database Setup
1. Start Apache and MySQL in XAMPP/WAMP
2. Open phpMyAdmin (`http://localhost/phpmyadmin`)
3. Create a new database named `food_delivery`
4. Import the SQL file: `DB-MY-SQL/food_delivery.sql`

### Step 3: Configuration
1. Update database credentials in `includes/dbconnection.php`:
```php
$con = mysqli_connect("localhost", "root", "", "food_delivery");
```

### Step 4: Access the Application
- **Customer Site:** `http://localhost/Online-Food-Ordering-System/`
- **Admin Panel:** `http://localhost/Online-Food-Ordering-System/admin/`

## 🔐 Default Login Credentials

### Admin Access
- **Username:** `admin`
- **Password:** `Appletree9@`

### Test User Account
- **Email:** `foodtest@yahoo.com`
- **Password:** `Orange8#`

## 📱 Screenshots

### Customer Interface
- Clean, responsive design with Bootstrap
- Easy navigation and food browsing
- Intuitive shopping cart and checkout

### Admin Panel
- Comprehensive dashboard with order statistics
- Easy-to-use food and category management
- Real-time order tracking and status updates

## 🔧 Key Features Breakdown

### Security Features
- Session-based authentication
- SQL injection protection (needs enhancement)
- Password hashing (MD5 - recommended to upgrade)
- Input validation and sanitization

### Database Schema
- **Users Table:** Customer information
- **Admin Table:** Administrator accounts
- **Food Items:** Menu items with categories
- **Orders:** Order details and tracking
- **Order Addresses:** Delivery information
- **Food Tracking:** Order status history

## 🚀 Future Enhancements

- [ ] **Payment Gateway Integration** (PayPal, Stripe)
- [ ] **SMS Notifications** for order updates
- [ ] **Advanced Search & Filters**
- [ ] **Rating & Review System**
- [ ] **Mobile App Development**
- [ ] **Multiple Restaurant Support**
- [ ] **Delivery Boy Management**
- [ ] **Advanced Analytics Dashboard**

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

## 👨‍💻 Developer

**Abdul Rahman**
- GitHub: [@Abdul-cm](https://github.com/Abdul-cm)
- Email: samwra34@gmail.com

## 🆘 Support

If you encounter any issues or have questions:

1. Check the [Issues](https://github.com/Abdul-cm/Online-Food-Ordering-System/issues) page
2. Create a new issue with detailed description
3. Contact the developer directly

## 🙏 Acknowledgments

- Bootstrap for responsive design framework
- Font Awesome for icons
- jQuery for JavaScript functionality
- MySQL for database management

---

⭐ **Star this repository if you found it helpful!**