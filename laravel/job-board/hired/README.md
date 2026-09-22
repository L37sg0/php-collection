# Hired

A comprehensive hybrid job board and freelance gig platform built with Laravel, featuring an independent modular theme structure and advanced search capabilities.
---
## Features

- 💼 **Dual Marketplace Model:** Combines traditional job board listings with a freelance-style "gig" ecosystem (including price options, tags, and fixed/tiered pricing).
- 🎨 **Modular Theming System:** Custom theme architecture (`Theme/JobBoard`) separating frontend views and components cleanly from core application logic.
- 👤 **Professional Portfolios:** Rich user profile and portfolio management supporting custom experiences, projects, contacts, and distinct roles (freelancers, companies, agencies).
- ⚡ **Advanced Search & Sync:** Powered by Laravel Scout and Meilisearch for lightning-fast job and gig discovery.
- 💳 **Billing & Payments:** Integrated with Laravel Cashier for handling subscription or transaction workflows.
---
## Project Structure

```text
hired/
├── app/
│   ├── Http/                # Controllers (Auth, Gig, Job, Portfolio, Profile) & Form Requests
│   ├── Models/              # Core business models, database fields, and relation helpers
│   ├── Providers/           # Service providers including ThemeServiceProvider
│   └── Theme/               # Modular theme layer (views, components, layouts)
├── routes/
│   ├── web.php              # Main application, job, gig, and portfolio routes
│   └── auth.php             # Authentication routes (Laravel Breeze base)
└── resources/               # Default fallback views and assets
```
---
## Tech Stack
- Backend: PHP 8.0.2+, Laravel 9 Framework
- Frontend & UI: Blade templates, Laravel Breeze, Livewire (^2.11)
- Search Engine: Laravel Scout (^9.8) with Meilisearch
- Billing: Laravel Cashier (^14.7)
---
## Core Dependencies (composer.json)
- PHP: ^8.0.2
- Laravel Framework: ^9.19
- Authentication & UI: laravel/breeze (^1.18), laravel/sanctum (^3.0)
- Dynamic Components: livewire/livewire (^2.11)
- Search & Indexing: laravel/scout (^9.8), meilisearch/meilisearch-php (^0.27.0)
- Billing & Payments: laravel/cashier (^14.7)
