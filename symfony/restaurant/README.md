# Symfony Restaurant Management System

A full-featured restaurant web application built with **Symfony 7.0**, featuring a complete frontend presentation, API-driven menu synchronization, robust administration dashboards, table bookings, customer reviews, and secure **Two-Factor Authentication (2FA)** via TOTP and QR codes.
---
## Architecture & Core Features

- 🍽️ **Restaurant Frontend & UI (`templates/front/`):**
  - Modern responsive layouts including home, about, chefs, gallery, contact forms, table booking (`book-a-table-form.html.twig`), and customer reviews.
  - Dynamic menu listing (`menu.html.twig`) integrated with backend API data retrieval mimicking external system synchronization.
- 🔌 **API & External Integration (`src/ApiResource/`, `src/Service/`):**
  - **API Platform & Nelmio CORS:** Exposes REST endpoints for menus and items (`ApiFetchService`), enabling decoupled frontend consumption.
  - **Data Processing:** Includes custom services for CSV/Excel data import and export (`CsvImporter`, `CsvExporter`).
- 🔐 **Security & Two-Factor Authentication (2FA):**
  - **Scheb 2FA Bundle (`scheb/2fa-bundle`, `scheb/2fa-totp`):** Integrates TOTP-based 2FA with **Endroid QR Code** generation (`endroid/qr-code`) for secure administrator login.
  - **JWT & Access Tokens:** Uses `lcobucci/jwt` and custom security token extractors/handlers.
- 🎛️ **Administration Panel (`src/Controller/Admin/`):**
  - **EasyAdmin 4:** Comprehensive backend dashboard for managing menus, menu items, table bookings, messages, reviews, images, and API integrations.
---
## Project Structure

```text
restaurant/
├── assets/                 # Frontend assets (SCSS, JS, vendor styles/scripts, images)
├── bin/                    # Console and test executables
├── config/                 # Symfony configuration files (packages, routes, services)
├── migrations/             # Doctrine database migration versions
├── public/                 # Web server entry point and uploaded media assets (`public/uploads/`)
├── src/                    # PHP Source Code (App Namespace)
│   ├── ApiResource/        # API Platform resources, models, and fetch services
│   ├── Controller/         # Web controllers, FrontController, and EasyAdmin CRUD controllers
│   ├── DataFixtures/       # Doctrine database fixtures for initial setup
│   ├── Entity/             # Doctrine ORM Entities (Admin, Booking, Menu, MenuItem, Review, etc.)
│   ├── EventSubscriber/    # Event subscribers (admin cache headers, website menu events)
│   ├── Form/               # Symfony Form types (Bookings, Contacts, Reviews, 2FA)
│   ├── Repository/         # Doctrine data repositories
│   ├── Security/           # Custom authenticators, token extractors, and handlers
│   └── Service/            # Business logic services (CSV import/export, credential generation)
├── templates/              # Twig HTML templates
│   ├── admin/              # Admin dashboard and 2FA authentication views
│   ├── bundles/            # Customized error pages (403, 404, 500)
│   └── front/              # Public pages, components, and forms (menu, booking, contact)
├── tests/                  # PHPUnit functional and API tests
└── webpack.config.js       # Webpack Encore configuration
```
---
## Tech Stack
- Backend Framework: Symfony 7.0 (PHP >= 8.2)
- Database & ORM: Doctrine ORM & Migrations, Doctrine Fixtures
- API & Integration: API Platform 3.2, Nelmio CORS Bundle
- Security & 2FA: Symfony Security Bundle, Scheb 2FA (TOTP), Endroid QR Code
- Administration: EasyAdmin 4.8
- Data Handling: Goodby CSV (handcraftedinthealps/goodby-csv)
---
## Local Development & Setup
- Clone the repository and configure your environment variables in .env.
- Install PHP dependencies via Composer:
```bash
    composer install
```
- Run database migrations to set up the RBAC schema:
```bash
    php bin/console doctrine:migrations:migrate
    php bin/console doctrine:fixtures:load
```
- Build frontend assets:
```bash
    npm install && npm run dev
```
- Start the local development server:
```bash
    php -S localhost:8000 -t public/
```