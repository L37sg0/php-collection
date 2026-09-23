# Picture CMS (Pixabay Recreation)

A modern Symfony 7 web application built as a design and functional recreation of **Pixabay**, featuring rich media management components, a component-driven Twig layout, frontend interactivity via Symfony UX Stimulus, and an administration dashboard powered by EasyAdmin.
---
## Architecture & Core Features

- 🖼️ **Pixabay-Inspired Frontend Layouts:**
  - Modular Twig component structure (`components/`) including hero sections, advanced search bars (`search.html.twig`, `search-sm.html.twig`), navigation menus, multi-column dropdowns, and authentication modals (login/register).
  - Dedicated front controllers (`HomeController`, `DiscoverController`, `CommunityController`, `AboutController`, `MediaController`) handling the platform's public browsing experience.
- ⚙️ **Modern Symfony Stack:**
  - **Symfony 7.1** running on PHP 8.2+.
  - **Asset Mapper & Symfony UX:** Leverages native asset mapping (`asset_mapper.yaml`) alongside Stimulus (`symfony/stimulus-bundle`) and Turbo (`symfony/ux-turbo`) for reactive UI components without complex heavy asset tooling.
- 🛡️ **Administration & Security:**
  - **EasyAdmin 4:** Configured administrative dashboard (`DashboardController`) under `/admin` for backend management.
  - **Security Bundle:** Standard authentication flow managed by `SecurityController`.
---
## Project Structure

```text
picture-cms/
├── assets/                 # Frontend assets (JS, Stimulus controllers, SCSS styles)
├── bin/                    # Console and test executables
├── config/                 # Symfony configuration files (packages, routes, services)
├── public/                 # Web server root directory (entry point index.php, media/images)
├── src/                    # PHP Source Code (App Namespace)
│   ├── Controller/
│   │   ├── Admin/          # EasyAdmin dashboard controllers
│   │   ├── Front/          # Public-facing controllers (Home, Discover, Community, Media, About)
│   │   └── Security/       # Authentication controllers
│   ├── Entity/             # Doctrine ORM Entities
│   └── Repository/         # Doctrine repositories
├── templates/              # Twig templates
│   ├── admin/              # Admin dashboard templates
│   ├── base.html.twig      # Global layout wrapper
│   └── front/              # Frontend pages and reusable UI components
│       ├── components/     # Modals, navigation, hero, search bars, and footers
│       └── home.html.twig  # Main Pixabay-style landing page view
├── tests/                  # PHPUnit test suites
└── webpack.config.js       # Optional Webpack Encore configuration
```
---
## Tech Stack
- Backend Framework: Symfony 7.1 (PHP >= 8.2)
- Database & ORM: Doctrine ORM 3.2 & Doctrine Migrations
- Administration: EasyAdmin 4.11
- Frontend Assets: Symfony Asset Mapper, Stimulus, Turbo, Sass / SCSS