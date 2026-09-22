# NewsSite

A modern news portal CMS built with Laravel 11, featuring a comprehensive administration panel, RSS/Atom feeds, dynamic sitemaps, and automated services integration.
---
## Features

- 📰 **Dynamic News & Categories:** Full content management for news articles, hierarchical categories, and tags.
- ⚡ **Feed & Sitemap Integration:** Automated daily sitemap generation and full RSS/Atom feed support via Spatie packages.
- 🎛️ **Admin Control Panel:** Secure management interface for categories, tags, and articles protected by user verification middleware.
- 🔗 **External Services & Automation:** Built-in services for Facebook publishing and Google News indexing pipelines.
- 🔍 **Search & Filtering:** Frontend search capabilities and category-based news filtering.
---
## Project Structure

```text
newscms/
├── app/
│   ├── Console/Commands/    # Custom artisan commands (e.g., GenerateSitemap)
│   ├── Http/
│   │   ├── Controllers/     # Admin CRUD controllers & frontend news controllers
│   │   └── Middleware/      # Application middleware
│   ├── Models/              # Eloquent models (Category, News, Tag, User)
│   ├── Services/            # Integration services (FacebookService, GoogleNewsService)
│   └── View/Components/     # Blade and vendor feed components
├── routes/
│   └── web.php              # Web routes, public feeds, search, and admin prefix groups
└── resources/
    └── views/               # Admin panel templates, news frontend, search pages, and feeds
```
---
## Tech Stack
- Backend: PHP 8.2+, Laravel 11 Framework
- Frontend & UI: Blade templates, custom admin packages (l37sg0/badmin, l37sg0/core, l37sg0/rbac)
- Feeds & SEO: spatie/laravel-feed, spatie/laravel-sitemap
- Social & APIs: facebook/graph-sdk
---
## Core Dependencies (composer.json)
- PHP: ^8.2
- Laravel Framework: ^11.31
- Feeds & Sitemap: spatie/laravel-feed (^4.4), spatie/laravel-sitemap (^7.3)
- Social Integration: facebook/graph-sdk (^5.1)
- Custom Admin/Core Modules: l37sg0/badmin (^1.0), l37sg0/core (^1.0), l37sg0/rbac (^1.0)
---
## Usage
- Start the local development environment or server using Laravel Sail or php artisan serve.
- Access the public frontend to browse news items, filter by categories, or view the RSS feed (/feed or /rss).
- Log in through the authentication layer to access the administrative dashboard under /admin for content management.
