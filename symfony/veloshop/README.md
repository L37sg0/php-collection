# VeloShop (Bicycle E-Commerce Frontend)

A foundational Symfony 6 application built as an e-commerce storefront prototype for a bicycle shop, featuring component-driven Twig architecture, custom UI components, user management entities, and custom authenticators.
---
## Architecture & Core Features

- 🚲 **Storefront Layouts & Components (`templates/veloshop/`):**
  - Modular component structure including banners, breadcrumbs, buttons, product cards, navigations, footers, pagination, progress bars, and search boxes.
  - Dedicated pages for home (`home.html.twig`) and product listings (`product.list.html.twig`).
- 🧩 **Component Architecture (`src/Components/`):**
  - Utilizes `symfony/ux-twig-component` alongside custom PHP component classes (`FeaturedProductsComponent`, `CheckoutComponent`, `NavigationComponent`, `ReviewComponent`, etc.) to encapsulate UI logic.
- 🔐 **Security & Authentication:**
  - Custom security handlers and authenticators (`LoginFormAuthenticator`, `TokenAuthenticator`, `AccessDeniedHandler`).
  - User entity and fixtures (`UserFixtures`) for initial database seeding.
- 🐳 **Infrastructure & Containerization:**
  - Complete Docker setup with `Dockerfile`, `docker-compose.yml`, Nginx configuration (`nginx/conf.d/app.conf`), and custom PHP settings (`php/local.ini`).
---
## Project Structure

```text
veloshop/
├── bin/                    # Console and test executables
├── config/                 # Symfony configuration files (packages, routes, services)
├── docker/                 # Container configs (Nginx, MySQL, PHP)
├── migrations/             # Doctrine database migration versions
├── public/                 # Web server entry point and assets (images, banners)
├── src/                    # PHP Source Code (App Namespace)
│   ├── Components/         # Twig component classes (Alert, Checkout, Product, Search, etc.)
│   ├── Controller/         # Web controllers (FrontendController, HomeController, SecurityController)
│   ├── DataFixtures/       # Doctrine database fixtures
│   ├── Entity/             # Doctrine ORM Entities (User)
│   ├── Repository/         # Doctrine repositories
│   └── Security/           # Custom authenticators and access-denied handlers
├── templates/              # Twig HTML templates
│   ├── components/         # Global alerts and form templates
│   ├── security/           # Login views
│   └── veloshop/           # Veloshop specific blocks, components, and pages
├── tests/                  # PHPUnit test suite
├── Dockerfile              # Application container definition
└── docker-compose.yml      # Docker Compose orchestration
```
---
## Tech Stack
- Backend Framework: Symfony 6.0 (PHP 8.*)
- Database & ORM: Doctrine ORM & Migrations, Doctrine Fixtures
- Frontend Components: Symfony UX Twig Component (symfony/ux-twig-component)
- Environment: Docker & Docker Compose, Nginx, MySQL
---
## Local Development & Setup
- Clone the repository and configure your environment variables in .env.
- Install PHP dependencies via Composer:
```bash
    composer install
```
- Run database migrations and load fixtures:
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