# 📬 Laravel Contact Form with Admin Dashboard

> A simple but modern Laravel project demonstrating a contact form system with email delivery and an admin dashboard to manage messages. Designed for developers eager to practice **form handling**, **mail sending**, and **middleware** in Laravel.

![Laravel Version](https://img.shields.io/badge/Laravel-10.x-orange?style=flat&logo=laravel)
![License](https://img.shields.io/github/license/your-username/laravel-contact-form-dashboard?style=flat)
![Issues](https://img.shields.io/github/issues/your-username/laravel-contact-form-dashboard?style=flat)
![Pull Requests](https://img.shields.io/github/issues-pr/your-username/laravel-contact-form-dashboard?style=flat)

---

## 🧠 Skills Covered
- ✅ Form Handling in Laravel
- ✅ Email Sending with Mailable classes
- ✅ Middleware usage for route protection
- ✅ Admin Message Management
- ✅ Flash Messages & Validations
- ✅ Blade Components and Layouts

---

## 🚀 Features
- 📩 Submit contact form via frontend
- 📧 Send message to admin email
- 🛡️ Middleware-protected admin dashboard
- 📋 View, read, and delete messages from admin panel
- 🧑‍💻 Clean and modern UI for both user and admin

---

## 🔧 Installation

```bash
# Clone the repository
git clone https://github.com/your-username/laravel-contact-form-dashboard.git

cd laravel-contact-form-dashboard

# Install dependencies
composer install

# Copy .env and configure
cp .env.example .env

# Generate app key
php artisan key:generate

# Setup your mail config in .env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=admin@example.com
MAIL_FROM_NAME="ContactFormApp"

# Run migrations
php artisan migrate

# Start development server
php artisan serve
