# PicturesCMS

A frontend-focused exercise and layout implementation designed to replicate the UI and user experience of Pixabay, built with Laravel 11.
---
## Features

- 🖼️ **Pixabay-Inspired Interface:** Pixel-faithful recreation of core visual elements, including hero search sections, image grids, and overlays.
- 🧩 **Modular Component Architecture:** Extensively broken down Blade components for headers, footers, navigation bars, dropdowns, and search bars.
- 🔐 **Modals & Overlays:** Built-in frontend modals for user login and registration workflows.
- ⚡ **Lightweight Setup:** Clean routing structure dedicated primarily to frontend presentation and UI design testing.
---
## Project Structure

```text
pictures-cms/
├── app/
│   ├── Http/Controllers/Front/ # Frontend controllers (e.g., HomeController)
│   ├── Models/              # Core user model
│   └── Providers/           # Application service providers
├── routes/
│   └── web.php              # Main frontend root route
└── resources/
    └── views/
        └── front/           # Frontend views, layout base, and modular components
            ├── components/  # Reusable UI parts (hero, search, modals, navigation)
            └── ...          # Home view and asset styling templates
```
---
## Tech Stack
- Backend: PHP 8.2+, Laravel 11 Framework
- Frontend & UI: Blade templates, custom UI and core packages (l37sg0/badmin, l37sg0/core, l37sg0/rbac)
---
## Core Dependencies (composer.json)
- PHP: ^8.2
- Laravel Framework: ^11.9
- Custom Modules: l37sg0/badmin (^1.0), l37sg0/core (^1.0), l37sg0/rbac (^1.0)
- Developer Tools: laravel/tinker (^2.9), fakerphp/faker (^1.23)
---
## Usage
- Start the development server using php artisan serve or Laravel Sail.
- Open your browser and navigate to the root URL (/) to explore the Pixabay frontend UI layout and components.
