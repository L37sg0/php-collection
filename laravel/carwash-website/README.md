# Car Wash Website (Carwash Landing Page)

A clean, component-based single-page landing site and business card application built for a local car wash service.
---
## Features

- **Single-Page Landing Presentation:** Designed as an online business card to showcase the car wash.
- **Modular Blade Components:** Structured with isolated UI components for easy maintenance and clean layout management.
- **Service Information Sections:** Dedicated sections for general information, location/directions, photo gallery, and a full price list.
- **Navigation & Layout:** Built-in header, navigation bar, and footer templates wrapping the main content seamlessly.
---
## Project Structure

```text
carwash-website/
├── app/                  # Core application logic & controllers
├── routes/
│   └── web.php           # Main entry route pointing to the landing controller
└── resources/
    └── views/            # Blade templates & layout components
        ├── index.blade.php
        └── components/
            ├── content/  # Section components (About, Find Us, Gallery, Price List)
            ├── content.blade.php
            ├── header.blade.php
            ├── navbar.blade.php
            └── footer.blade.php
```
---
## Tech Stack
- Backend: PHP 8.0+, Laravel 9 Framework
- Frontend & Templating: Blade Template Engine, HTML5, CSS

---
## Core Dependencies (composer.json)
- PHP: ^8.0.2
- Laravel Framework: ^9.11
- HTTP Client: guzzlehttp/guzzle (^7.2)
- API/Token Authentication: laravel/sanctum (^2.14.1)
- Interactive REPL: laravel/tinker (^2.7)
