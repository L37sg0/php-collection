# Symfony RBAC (Role-Based Access Control) System

A custom-built Symfony 6 application designed for managing Role-Based Access Control (RBAC), featuring dedicated management modules and CRUD interfaces for users, roles, and permissions.
---
## Architecture & Core Features

- 🔐 **Core RBAC Entities (`src/Entity/`):**
  - **User:** Represents system users and handles authentication relations.
  - **Role:** Defines access roles assigned to users.
  - **Permission:** Granular permissions associated with specific roles.
- 🎛️ **Management Controllers & Forms (`src/Controller/`, `src/Form/`):**
  - **UserController:** Full CRUD interface for user administration (`index`, `new`, `edit`, `show`).
  - **RoleController:** Management tools for roles and their assignments.
  - **PermissionController:** Interface for creating and regulating fine-grained permissions.
- 🎨 **Templates & UI (`templates/`):**
  - Modular Twig views providing complete administration dashboards and CRUD forms for users, roles, and permissions, alongside reusable stub templates.
  - Frontend styling managed via Webpack Encore (`assets/styles/`, `assets/js/dashboard.js`).
---
## Project Structure

```text
rbac/
├── assets/                 # Frontend assets (JavaScript dashboards, CSS styles)
├── bin/                    # Console and test executables
├── config/                 # Symfony configuration files (packages, routes, services)
├── migrations/             # Doctrine database migration files
├── public/                 # Web server entry point (index.php)
├── src/                    # PHP Source Code (App Namespace)
│   ├── Controller/         # CRUD controllers (Permission, Role, User)
│   ├── Entity/             # Doctrine ORM Entities (Permission, Role, User)
│   ├── Form/               # Symfony Form types for entity creation/editing
│   └── Repository/         # Doctrine repositories for data querying
├── templates/              # Twig templates
│   ├── permission/         # Permission CRUD views and forms
│   ├── role/               # Role CRUD views and forms
│   ├── user/               # User management CRUD views and forms
│   ├── stubs/              # Scaffold template stubs
│   └── base.html.twig      # Global layout template
├── tests/                  # PHPUnit test suite
└── webpack.config.js       # Webpack Encore build configuration
```
---
## Tech Stack
- Backend Framework: Symfony 6.3 (PHP >= 8.1)
- Database & ORM: Doctrine ORM & Doctrine Migrations
- Asset Management: Webpack Encore Bundle
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
```
- Build frontend assets:
```bash
    npm install && npm run dev
```
- Start the local development server:
```bash
    php -S localhost:8000 -t public/
```