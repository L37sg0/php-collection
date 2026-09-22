# WMS (Warehouse Management System) - Data Core

A robust relational data schema and seeding framework for a Warehouse Management System (WMS) and Order Fulfilment application built with Laravel 10. This project focuses on establishing a comprehensive backend architecture, complete with granular database migrations, Eloquent models, and a complex Faker-based seeding engine to test relational integrity and data flows.
--- 
## Core Features

- 📦 **Inventory & Product Management:** Hierarchical product categories (with parent-child nesting), dynamic product metadata, brands, suppliers, items, and inventory tracking.
- 🛒 **Fulfilment & Order Processing:** Fully structured order lifecycle handling, order addresses, line items with SKU mapping, pricing/discounts, and shipments.
- 💳 **Transaction Tracking:** Detailed financial and stock transaction logs tied directly to orders and transaction modes/statuses.
- 🔐 **RBAC (Role-Based Access Control):** Granular permission and role management structure linked securely to system users.
- 🌱 **Advanced Data Seeder:** Comprehensive `DatabaseSeeder` utilizing model factories to generate realistic mock data, relational associations (many-to-many pivots), and hierarchical structures for testing.
---
## Project Structure

```text
wms/
├── app/
│   └── Models/
│       ├── Fulfilment/      # Order, OrderItem, OrderAddress, Shipment models
│       ├── Inventory/       # Product, Category, Brand, Supplier, Item, Transaction models
│       └── RBAC/            # Role, Permission, User, and pivot models
├── database/
│   ├── factories/           # Model factories for Fulfilment, Inventory, and RBAC entities
│   ├── migrations/          # Categorized database migrations:
│   │   ├── 1_RBAC/          # Roles, permissions, users, and mapping tables
│   │   ├── 2_Inventory/     # Categories, products, suppliers, items, transactions
│   │   └── 3_Fulfilment/    # Orders, addresses, order items, shipments
│   └── seeders/
│       └── DatabaseSeeder.php # Complex relational seeding logic
└── routes/
    └── web.php              # Base routing skeleton
```
---
## Tech Stack
- Backend Framework: PHP 8.1+, Laravel 10 Framework
- Database Architecture: Relational schema (MySQL/SQLite compatible) via Laravel Migrations and Eloquent ORM
- Test Data Generation: FakerPHP (^1.9.1)
---
## Core Dependencies (composer.json)
- PHP: ^8.1
- Laravel Framework: ^10.10
- API Support: laravel/sanctum (^3.2)
- Developer Tools: laravel/tinker (^2.8), fakerphp/faker (^1.9.1)
---
## Usage

As a database-first and backend architectural blueprint, this application serves as the solid structural foundation for a full-scale WMS. You can use Laravel Tinker to inspect models, relationships, and seeded data pools:
```bash
php artisan tinker
>>> App\Models\Inventory\Product::with(['categories', 'items', 'meta'])->first();
>>> App\Models\Fulfilment\Order\Order::with(['items', 'addresses', 'transactions'])->first();
```
---
## UML Diagrams
![tutorials24x7-rbac-database-design.png](resources%2Fimages%2Ftutorials24x7-rbac-database-design.png)
![tutorials24x7-mysql-inventory-database-design.png](resources%2Fimages%2Ftutorials24x7-mysql-inventory-database-design.png)
