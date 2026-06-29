<div align="center">

# 📊 RTL Dashboard

### A fully responsive, feature-rich Laravel admin dashboard built for right-to-left (RTL) languages — Arabic, Persian, and Hebrew.

<p>
  <img src="https://img.shields.io/github/license/morpheusadam/rtl-dashboard?style=for-the-badge&color=4c1" alt="License" />
  <img src="https://img.shields.io/github/stars/morpheusadam/rtl-dashboard?style=for-the-badge&color=ffca28" alt="Stars" />
  <img src="https://img.shields.io/github/forks/morpheusadam/rtl-dashboard?style=for-the-badge&color=42a5f5" alt="Forks" />
  <img src="https://img.shields.io/github/last-commit/morpheusadam/rtl-dashboard?style=for-the-badge&color=8e44ad" alt="Last commit" />
  <img src="https://img.shields.io/github/repo-size/morpheusadam/rtl-dashboard?style=for-the-badge&color=e67e22" alt="Repo size" />
</p>

<p>
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
  <img src="https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel" />
  <img src="https://img.shields.io/badge/Livewire-3-4E56A6?style=for-the-badge&logo=livewire&logoColor=white" alt="Livewire" />
  <img src="https://img.shields.io/badge/Bootstrap-RTL-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap RTL" />
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL" />
</p>

</div>

---

## 📖 Overview

**RTL Dashboard** is a fully responsive, feature-rich **admin dashboard template** designed specifically for **right-to-left (RTL) languages**. Built on the latest **Laravel 11** and **Livewire**, it delivers a seamless, intuitive experience for users who prefer RTL layouts — making it an ideal foundation for **Arabic, Persian, Hebrew**, and other RTL-language applications.

Beyond the polished UI, it ships with a complete back end: a full blog with articles, categories and comments, a menu builder, custom pages, an advertising system, a support-ticket system, smart traffic and error tracking, and a modular plugin architecture (powered by `nwidart/laravel-modules`). Role and permission management (Spatie), media handling, multi-language content, and API documentation via Swagger come built in.

It is perfect for **developers, agencies, and SaaS builders** who need a production-ready, RTL-first dashboard with statistics, notifications, and a clean, extensible structure.

> 🔎 **Keywords:** rtl dashboard, laravel admin panel, rtl admin template, persian dashboard, arabic dashboard, laravel 11 dashboard, livewire admin, responsive admin template, rtl ui, php dashboard.

---

## ✨ Features

- 🌐 **RTL-first design** — fully responsive layouts tailored for Arabic, Persian, and Hebrew.
- 🔍 **Smart SEO** — automatic SEO optimization, `robots.txt`, and a sitemap generator.
- 🔔 **Real-time notifications & alerts** — rich notifications with images, plus instant, automatic error alerts.
- 🖼️ **Media management** — professional image handling with drag-and-drop uploads (Spatie Media Library).
- 🧩 **Menu & page builder** — create menus, order links by drag-and-drop, and build custom pages from templates.
- 📰 **Full blog** — articles, categories, comments, and tags.
- 📣 **Advertising system** — built-in ad placements.
- 🎫 **Support tickets** — a contact/ticketing system for user communication.
- 📈 **Dashboard analytics** — traffic, top pages, browsers, devices, operating systems, and more.
- 🔗 **Link redirection** — manage and track redirects.
- 🛡️ **Security** — advanced permissions, rate limiting, custom 404 pages, and Cloudflare-ready setup.
- 👥 **User system** — profiles with avatars, login, registration, and email confirmation.
- ⚙️ **Site settings** — central configuration for the whole application.
- 🌍 **Multi-language content** — translatable models via Spatie Translatable.
- 📱 **PWA-ready** — `manifest.json` for installable mobile experiences.
- 🔌 **Plugin & module system** — extend functionality with self-contained modules.
- 📚 **API docs** — interactive documentation via L5-Swagger.

---

## 🛠️ Tech Stack

<p align="center">
  <img src="https://skillicons.dev/icons?i=laravel,php,mysql,bootstrap,js" alt="Tech stack" />
</p>

| Layer | Technology |
| --- | --- |
| Framework | Laravel 11 (PHP 8.2+) |
| UI | Livewire 3, Bootstrap (RTL), Blade |
| Modules | `nwidart/laravel-modules` |
| Permissions | `spatie/laravel-permission` |
| Media | `spatie/laravel-medialibrary`, Intervention Image |
| i18n | `spatie/laravel-translatable` |
| Notifications | Toastr |
| Geolocation | `stevebauman/location` |
| API Docs | L5-Swagger |

---

## 🖼️ Screenshots

<p align="center">
  <img src="public/images/screenshots/1.png" width="45%" alt="RTL Dashboard screenshot" />
  <img src="public/images/screenshots/2.png" width="45%" alt="RTL Dashboard screenshot" />
</p>
<p align="center">
  <img src="public/images/screenshots/3.png" width="45%" alt="RTL Dashboard screenshot" />
  <img src="public/images/screenshots/4.png" width="45%" alt="RTL Dashboard screenshot" />
</p>

---

## 🚀 Getting Started

### Prerequisites

- **PHP 8.2+**
- **Composer**
- **MySQL** (or another supported database)
- **php-imagick** extension

### Installation

```bash
# Install the image extension (Debian/Ubuntu)
sudo apt-get install php-imagick

# Install PHP dependencies
composer install

# Configure your environment
cp .env.example .env
php artisan key:generate
php artisan storage:link

# After setting your database credentials in .env
php artisan migrate:fresh
php artisan db:seed

# Run the queue worker and scheduler in the background
php artisan queue:work
php artisan schedule:run
```

### Default Credentials

| Field | Value |
| --- | --- |
| Login URL | `http://127.0.0.1:8000/login` |
| Email | `admin@admin.com` |
| Password | `password` |

---

## ⚙️ Layout Sections

Blade layouts expose the following yield points for easy extension:

```blade
@yield('styles')
@yield('content')
@yield('after-body')
@yield('scripts')
```

---

## 🗂️ Project Structure

```text
rtl-dashboard/
├── app/
│   ├── Helpers/                 # Settings, security, upload & system-info helpers
│   ├── Http/Controllers/Backend # Admin controllers (articles, menus, ads, ...)
│   └── Models/                  # Eloquent models
├── Modules/                     # Self-contained feature modules (e.g. Team)
├── public/images/screenshots/   # UI screenshots
├── resources/views/             # Blade templates & layouts
├── routes/                      # web.php / api.php
└── database/                    # Migrations & seeders
```

---

## 🤝 Contributing

Contributions are welcome! Please read [`CONTRIBUTING.md`](CONTRIBUTING.md) and the [Code of Conduct](CODE_OF_CONDUCT.md), then open an [issue](https://github.com/morpheusadam/rtl-dashboard/issues) or submit a pull request.

## 📜 License

Distributed under the **MIT License**. See [`LICENSE.md`](LICENSE.md) for details.

---

## ⭐ Star History

<a href="https://star-history.com/#morpheusadam/rtl-dashboard&Date">
  <img src="https://api.star-history.com/svg?repos=morpheusadam/rtl-dashboard&type=Date" alt="Star History Chart" width="600" />
</a>

---

<div align="center">

### 👤 Author — Morpheus Adam

Web developer & cheerful hacker · PHP · Laravel · Go

<p>
  <a href="https://github.com/morpheusadam"><img src="https://img.shields.io/badge/GitHub-morpheusadam-181717?style=for-the-badge&logo=github&logoColor=white" alt="GitHub" /></a>
  <a href="https://sam.zeonic.me"><img src="https://img.shields.io/badge/Website-sam.zeonic.me-4c1?style=for-the-badge&logo=googlechrome&logoColor=white" alt="Website" /></a>
  <a href="mailto:morpheusadam95@gmail.com"><img src="https://img.shields.io/badge/Email-Contact-D14836?style=for-the-badge&logo=gmail&logoColor=white" alt="Email" /></a>
</p>

⭐ **If this dashboard helped you, consider giving it a star!** ⭐

</div>
