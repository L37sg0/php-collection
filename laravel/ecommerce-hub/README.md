# Ecommerce Hub (echub)

A modular backend architecture and process orchestrator designed for e-commerce platforms, built with Laravel.
---
## Features

- 🧩 **Modular Architecture:** Structured into distinct business domains (`Base`, `Finance`, `Inventory`, `Order`) with dedicated database migrations, factories, and models.
- 🔄 **Process Orchestration Core:** Designed as a backend engine to manage and sync e-commerce workflows, data flows, and operations.
- 🔌 **Integration Helpers:** Includes utility clients (`SimpleHttpClient`, `SimpleSftpClient`) and credentials/attribute traits for connecting with external services and APIs.
- 📦 **Comprehensive Domain Models:** Pre-configured data structures handling users, groups, products, stocks, warehouses, prices, taxes, invoices, and customer orders.
---
## Project Structure

```text
ecommerce-hub/
├── app/
│   ├── Http/                # Standard controllers, kernel, and middleware
│   ├── Modules/             # Domain-specific modules
│   │   ├── Base/            # Users, groups, core integrations (HTTP/SFTP clients)
│   │   ├── Finance/         # Invoices, prices, and taxes management
│   │   ├── Inventory/       # Products, stocks, warehouses, and groups
│   │   └── Order/           # Customers, addresses, items, and orders
│   └── Providers/           # Service and route providers
├── routes/
│   └── web.php              # Standard web entry points
└── resources/
    └── views/               # Minimal frontend views (welcome page)
```
---
## Tech Stack
- Backend: PHP 8.1, Laravel 10 Framework
- Integration Layer: Custom HTTP & SFTP communication wrappers (GuzzleHttp)
- Database Architecture: Modular migrations, Eloquent models, factories, and seeders
---
## Core Dependencies (composer.json)
- PHP: ^8.1
- Laravel Framework: ^10.10
- HTTP Client: guzzlehttp/guzzle (^7.2)
- API Authentication: laravel/sanctum (^3.2)
- Interactive REPL: laravel/tinker (^2.8)
