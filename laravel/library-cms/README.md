# MightyLibrarian

A comprehensive library management system built with Laravel, featuring live search capabilities, modular administration sections, and a responsive Bootstrap 5 interface.
---
## Features

- 📚 **Full Library Operations:** Complete management modules for Authors, Books, Book Issues (loans/returns), Categories, Publishers, and Students.
- ⚡ **Live Search Integration:** Real-time search forms powered by Livewire and backed by Laravel Scout with Meilisearch.
- 🎛️ **Admin Dashboard & Settings:** Centralized dashboard for managing library workflow, configurable return days, and system preferences.
- 🐳 **Docker-Ready:** Containerized environment configuration for effortless deployment and local testing.
- 📱 **Responsive Design:** Frontend and admin panel built fully with Bootstrap 5.3 for optimal desktop and mobile usability.
---
## Project Structure

```text
mightylibrarian/
├── app/
│   ├── Console/             # Custom commands (e.g., LibraryIndexImport)
│   ├── Http/                # Controllers, Livewire search components, middleware, and form requests
│   ├── Models/              # Domain models, database fields, and status enums
│   └── View/Components/     # Reusable form and input blade components
├── routes/
│   └── web.php              # Web routes and admin CRUD route groups
└── resources/
    └── views/               # Admin panel views, frontend templates, and livewire search components
```
---
## Tech Stack
- Backend: PHP 8.0.2+, Laravel 9 Framework
- Frontend & UI: Blade templates, Bootstrap 5.3, Livewire (^2.11)
- Search Engine: Laravel Scout (^9.8) with Meilisearch
- Environment: Docker & Docker Compose
---
## Core Dependencies (composer.json)
- PHP: ^8.0.2
- Laravel Framework: ^9.19
- Dynamic Components: livewire/livewire (^2.11)
- Search & Indexing: laravel/scout (^9.8), meilisearch/meilisearch-php (^0.27.0)
- HTTP Client & Utilities: guzzlehttp/guzzle (^7.2)
---
## System Requirements
- RAM: 1G
- Storage: 1G
- CPU cores: 1
- Docker engine: v. 20.10.22+
- Docker Compose: v. 1.29.2+
---
## Installation
```bash
git clone [https://github.com/L37sg0/mightylibrarian.git](https://github.com/L37sg0/mightylibrarian.git)
cd mightylibrarian
docker-compose up -d
cp mightylibrarian/.env.example mightylibrarian/.env
docker-compose exec app composer install -d mightylibrarian
docker-compose exec app php mightylibrarian/artisan migrate --seed
docker-compose exec app php mightylibrarian/artisan library:index:import
```
---
## Usage
- Go to your server port 80, click Register and create a new user.
- Log in with your credentials to access the system dashboard and manage library assets.
---
### Images:
![front-desktop.png](screenshots%2Ffront-desktop.png)
![front-mobile.png](screenshots%2Ffront-mobile.png)
![book-issues.png](screenshots%2Fbook-issues.png)
![login-mobile.png](screenshots%2Flogin-mobile.png)
![register-desktop.png](screenshots%2Fregister-desktop.png)
![dash-mobile.png](screenshots%2Fdash-mobile.png)
![book-issues-edit.png](screenshots%2Fbook-issues-edit.png)
![search-bar.png](screenshots%2Fsearch-bar.png)
![flash-message.png](screenshots%2Fflash-message.png)
![flash-errors.png](screenshots%2Fflash-errors.png)
![authors-mobile.png](screenshots%2Fauthors-mobile.png)
