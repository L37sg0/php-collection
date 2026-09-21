# Laravel Blog Application

A feature-rich personal blog and content management system built with **Laravel 8**, featuring built-in authentication, user management via **Laravel Jetstream**, reactive interfaces using **Livewire**, and a complete CRUD workflow for posts and comments.
---
## Features

- 🔐 **Authentication & Security:** Powered by Laravel Jetstream and Sanctum, providing secure login, registration, password resets, and user profile management.
- 📝 **Post Management (CRUD):** Fully structured routing and controllers to create (`/posts/new`), view (`/posts/view/{id}`), edit (`/posts/edit/{post_id}`), and delete (`/posts/delete/{post_id}`) articles.
- 💬 **Interactive Comments:** Dedicated comment handling system allowing users to leave feedback and replies on posts.
- ⚡ **Dynamic Front-End:** Leverages Livewire components and Blade templates for a reactive, modern UI experience.
- 🗄️ **Database Architecture:** Built with clean Eloquent ORM models supporting **Categories**, **Posts**, **Comments**, and **Users**.
---
## Project Structure

```text
blog/
├── app/
│   ├── Http/
│   │   ├── Controllers/    # Core controllers (Posts, Comments, FrontEnd)
│   │   └── Middleware/     # Request filters and authentication checks
│   └── Models/             # Eloquent models (Post, Category, Comment, User)
├── database/               # Migrations, factories, and seeders
├── resources/
│   └── views/              # Blade templates (Auth, Posts, Profile, Dashboard)
└── routes/
    └── web.php             # Web routes and middleware protection groups
```
---
## Tech Stack
- Backend: PHP 7.3 / 8.0, Laravel 8 Framework
- Authentication & UI: Laravel Jetstream, Livewire, Laravel Collective HTML
- Database: MySQL / MariaDB via Eloquent ORM
---
## Core Dependencies (composer.json)
- laravel/framework (^8.12)
- laravel/jetstream (^1.5)
- livewire/livewire (^2.0)
- laravelcollective/html (^6.2)
- guzzlehttp/guzzle (^7.0.1)
