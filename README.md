# 📰 Bloggers - Modern Laravel Blog Platform

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-11-red.svg)
![PHP](https://img.shields.io/badge/PHP-8.0+-blue.svg)
![MySQL](https://img.shields.io/badge/MySQL-8.0+-orange.svg)
![Bootstrap](https://img.shields.io/badge/Bootstrap-4-purple.svg)
![License](https://img.shields.io/badge/License-MIT-green.svg)

**A complete, production-ready blog platform built with Laravel 11, featuring modern UI/UX design and comprehensive functionality.**

[🐛 Report Bug](https://github.com/iSmileeee/bloggers/issues) • [✨ Request Feature](https://github.com/iSmileeee/bloggers/issues)

![Bloggers Preview](./public/screenshots/preview.png)

</div>

---

## ✨ Features

### 🎨 **Modern Design & UX**
- **Clean, Professional Interface** - Soft color palette with modern aesthetics
- **Responsive Design** - Optimized for all devices and screen sizes
- **Smooth Animations** - Fade-in effects, hover transitions, and micro-interactions
- **Dark/Light Mode Ready** - Extensible theme system
- **Accessibility First** - WCAG compliant design patterns

### 🚀 **Core Functionality**
- **🔐 User Authentication** - Secure registration, login, and logout
- **📝 Blog Management** - Full CRUD operations for posts
- **💬 Comment System** - Interactive commenting with threaded discussions
- **👤 Profile Management** - Update personal information and security settings
- **🔍 Advanced Search** - Find posts by title, content, or author
- **📊 Dashboard Analytics** - User activity and content statistics

### 🛠 **Technical Excellence**
- **Laravel 11** - Latest framework with modern PHP features
- **MySQL 8.0+** - Robust database with advanced querying
- **Bootstrap 4** - Responsive grid system and components
- **Font Awesome 6** - Comprehensive icon library
- **Google Fonts** - Professional typography
- **RESTful API** - Clean, documented endpoints

---

## 📋 Table of Contents

- [Features](#-features)
- [Tech Stack](#-tech-stack)
- [Prerequisites](#-prerequisites)
- [Installation](#-installation)
- [Configuration](#-configuration)
- [Usage](#-usage)
- [API Documentation](#-api-documentation)
- [Testing](#-testing)
- [Deployment](#-deployment)
- [Contributing](#-contributing)
- [License](#-license)
- [Contact](#-contact)

---

## 🛠 Tech Stack

### Backend
- **Laravel 11** - PHP web framework
- **PHP 8.0+** - Server-side scripting
- **MySQL 8.0+** - Relational database
- **Composer** - PHP dependency management

### Frontend
- **Bootstrap 4** - CSS framework
- **Font Awesome 6** - Icon library
- **Google Fonts** - Typography
- **Vanilla JavaScript** - Interactive features
- **Blade Templates** - Server-side rendering

### Development Tools
- **Laravel Breeze** - Authentication scaffolding
- **Laravel Sanctum** - API authentication
- **Laravel Telescope** - Debugging assistant
- **PHPUnit** - Testing framework

---

## 📋 Prerequisites

Before running this application, ensure you have the following installed:

- **PHP 8.0 or higher**
- **Composer** (PHP dependency manager)
- **MySQL 8.0 or higher**
- **Node.js & npm** (for asset compilation)
- **Git** (version control)

### System Requirements
```bash
# Check PHP version
php --version

# Check Composer
composer --version

# Check MySQL
mysql --version
```

---

## 🚀 Installation

### 1. Clone the Repository
```bash
git clone https://github.com/iSmileeee/bloggers.git
cd bloggers
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node Dependencies (Optional)
```bash
npm install
npm run build
```

### 4. Environment Configuration
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Database Setup
```bash
# Create database
mysql -u root -p
CREATE DATABASE bloggers;
EXIT;

# Run migrations
php artisan migrate

# Seed database (optional)
php artisan db:seed
```

### 6. Start Development Server
```bash
php artisan serve
```

Visit `http://127.0.0.1:8000` in your browser.

---

## ⚙️ Configuration

### Environment Variables
Configure your `.env` file with the following settings:

```env
APP_NAME="Bloggers"
APP_ENV=local
APP_KEY=base64:your-generated-key
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bloggers
DB_USERNAME=your_username
DB_PASSWORD=your_password

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
```

### File Permissions
```bash
# Set proper permissions for Laravel
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

---

## 📖 Usage

### User Registration
1. Navigate to the homepage
2. Click "Register" in the navigation
3. Fill out the registration form
4. Verify your email (if enabled)

### Creating Content
1. Log in to your account
2. Click "Create Post" from the navigation
3. Write your post title and content
4. Publish your post

### Managing Posts
- View all posts on the homepage
- Access "My Posts" to manage your content
- Edit or delete posts from the dashboard

### Interacting with Content
- Read full posts by clicking "Read More"
- Leave comments on posts (requires login)
- Update your profile information

---

## 🔌 API Documentation

The application includes RESTful API endpoints:

### Authentication Endpoints
```http
POST   /api/register
POST   /api/login
POST   /api/logout
GET    /api/user
```

### Post Endpoints
```http
GET    /api/posts
POST   /api/posts
GET    /api/posts/{id}
PUT    /api/posts/{id}
DELETE /api/posts/{id}
```

### Comment Endpoints
```http
GET    /api/posts/{id}/comments
POST   /api/posts/{id}/comments
DELETE /api/comments/{id}
```

---

## 🧪 Testing

### Running Tests
```bash
# Run all tests
php artisan test

# Run specific test suite
php artisan test --testsuite=Feature

# Run with coverage
php artisan test --coverage
```

### Test Structure
```
tests/
├── Feature/
│   ├── Auth/
│   │   ├── AuthenticationTest.php
│   │   ├── RegistrationTest.php
│   │   └── PasswordResetTest.php
│   ├── BlogTest.php
│   └── CommentTest.php
├── Unit/
│   ├── PostTest.php
│   └── UserTest.php
└── Pest.php
```

---

## 🌐 Deployment

### Production Checklist
- [ ] Set `APP_ENV=production` in `.env`
- [ ] Configure production database
- [ ] Set up SSL certificate
- [ ] Configure web server (Apache/Nginx)
- [ ] Set proper file permissions
- [ ] Enable caching: `php artisan config:cache`

### Example Nginx Configuration
```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /path/to/bloggers/public;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_pass unix:/var/run/php/php8.0-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }
}
```

---

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create a feature branch: `git checkout -b feature/amazing-feature`
3. Commit your changes: `git commit -m 'Add amazing feature'`
4. Push to the branch: `git push origin feature/amazing-feature`
5. Open a Pull Request

### Development Guidelines
- Follow PSR-12 coding standards
- Write tests for new features
- Update documentation as needed
- Ensure all tests pass before submitting PR

---

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## 📞 Contact

**Project Creator** - [Edward James Grageda](https://github.com/iSmileeee)

**Project Link** - [https://github.com/iSmileeee/bloggers](https://github.com/iSmileeee/bloggers)

### Support
- 📧 Email: egrageda60@google.com
- 🐛 Issues: [GitHub Issues](https://github.com/iSmileeee/bloggers/issues)
- 💬 Discussions: [GitHub Discussions](https://github.com/iSmileeee/bloggers/discussions)

---

## 🙏 Acknowledgments

- [Laravel](https://laravel.com/) - The PHP framework
- [Bootstrap](https://getbootstrap.com/) - CSS framework
- [Font Awesome](https://fontawesome.com/) - Icon library
- [Google Fonts](https://fonts.google.com/) - Typography

---

<div align="center">

**Made with ❤️ using Laravel**

⭐ Star this repo if you found it helpful!

</div>
