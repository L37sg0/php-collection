# CV-app

A feature-rich "API-first" web application designed for managing CVs and applicant profiles, complete with an entirely JS-driven frontend and multiple theme layouts.
---
## Features

- 🌐 **API-First Architecture:** Built with a decoupled backend API layer using Laravel API Resources and DTOs.
- ⚡ **JS-Driven Frontend:** Dynamic user interactions powered by asynchronous AJAX calls to the internal API endpoints.
- 🔒 **Secure Data Handling:** Complete with CSRF protection and strict backend validation via `FormRequest` rules.
- 🏛️ **Design-Patterned Backend:** Implements architectural best practices including immutable interface bindings, Repositories, and Data Transfer Objects (DTOs).
- 🎨 **Multi-Theme Support:** Includes **2 distinct UI themes** ("iPortfolio" and "Laravel") with a config helper enabling seamless theme switching.
---
## Project Structure

```text
cv-app/
├── app/
│   ├── Console/             # Custom console commands (e.g., static content deploy)
│   ├── DataTransferObjects/ # DTO classes for applicant, education, skills, and university data
│   ├── Http/
│   │   ├── Controllers/     # API controllers and frontend entry points
│   │   ├── Requests/        # Form request validation classes
│   │   └── Resources/       # API Resource transformation classes
│   ├── Models/              # Eloquent models and data interfaces
│   ├── Providers/           # Service providers
│   └── Repositories/        # Repository pattern interfaces and implementations
├── routes/
│   └── web.php              # Web routes and resource endpoint definitions
└── resources/
    └── views/               # Blade templates for the two themes ("iPortfolio" and "Laravel")
```
---
## Tech Stack
- Backend: PHP 8.2, Laravel 11 Framework
- API & Data Layer: Laravel Sanctum, RESTful API Resources, Repository Pattern, DTOs
- Frontend: JavaScript (AJAX), Blade Templates, Bootstrap / Custom Theme Assets
---
## Core Dependencies (composer.json)
- PHP: ^8.2
- Laravel Framework: ^11.0
- API Authentication: laravel/sanctum (^4.0)
- Interactive REPL: laravel/tinker (^2.9)
