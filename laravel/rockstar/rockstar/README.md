# Rockstar

A modular Laravel 10 application built as a feature-rich fictional rock band website, featuring a public frontend presentation layer and a fully authenticated admin dashboard for managing site content.
---
## Features

- 🎸 **Band & Tour Management:** Dynamic tracking of tour dates, band member profiles, descriptions, and imagery.
- 🛠️ **Custom Admin Dashboard:** Secure management sections for updating home screen images, contact details, social links, and site branding (icons/favicons).
- 🧩 **Modular Internal Architecture:** Encapsulated business logic, migrations, models, controllers, and views housed within a dedicated namespace (`L37sg0\Rockstar`), laying the groundwork for a multi-site Laravel structure.
- 🎨 **Responsive Frontend UI:** Styled using custom CSS, W3.css, and FontAwesome assets embedded directly within the module resources.
---
## Project Structure

```text
rockstar/
├── app/
│   ├── Http/Controllers/Auth/   # Breeze/Laravel authentication controllers
│   └── Websites/
│       └── L37sg0/
│           └── Rockstar/        # Encapsulated Rockstar module
│               ├── Database/    # Factories, Migrations, and Seeders
│               ├── Http/        # Controllers (Admin & Frontend) & Form Requests
│               ├── Models/      # Eloquent models (BandMember, TourDate, SocialLink, Website)
│               ├── resources/   # Blade views (admin & frontend) and assets (CSS, JS, images)
│               └── routes/      # Module-specific web routes
├── config/                      # Laravel configuration files
├── database/                    # Root database files
└── routes/                      # Global and auth web routes
```
---
## Tech Stack
- Backend: PHP 8.1+, Laravel 10 Framework
- Image Processing: intervention/image (^2.7)
- Authentication: Laravel Breeze / Sanctum
- Frontend & UI: Blade templates, W3.css, FontAwesome
---
## Core Dependencies (composer.json)
- PHP: ^8.1
- Laravel Framework: ^10.0
- Image Handling: intervention/image (^2.7)
- API Support: laravel/sanctum (^3.2)
- Developer Tools: laravel/breeze (^1.19), fakerphp/faker (^1.9.1)
---
## Usage
- Navigate to the root URL (/) to view the frontend band website.
- Access the administrative dashboard via /dashboard (requires authentication/login) to manage tour dates, band members, social channels, and media elements.
