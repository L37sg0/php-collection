# ABC Plugin - Wind Farm Asset & Job Organizing Tool

A specialized WordPress plugin designed for operational management, maintenance tracking, and IoT monitoring within wind farm infrastructure. Built with a custom modular MVC-like architecture, it provides dedicated administrative views for wind turbines, substations, operational events, and real-time monitoring (RTM).
---
## Architecture & Core Features

- 🏗️ **Infrastructure & Asset Management (`inc/Pages/Objects/`):**
  - Track and manage physical assets across the wind farm network, including **Windparks**, **Turbines**, **Substations**, **Switchgears**, **Outlets**, and auxiliary equipment.
- 📋 **Operations & Maintenance Tracking (`inc/Pages/Management/`):**
  - **Events & Interruptions:** Log, categorize, and filter grid interruptions and operational events.
  - **Logerr & Messages:** Error logging and internal messaging/ticketing system for technicians and operators.
- 📊 **Real-Time IoT Monitoring (RTM Viewer):**
  - Embedded remote monitoring module (`templates/management/rtm/`) designed to track IoT devices and turbine status across the park using a dedicated Bootstrap-powered interface.
- ⚙️ **Custom CRUD & Data Layer (`inc/Api/`):**
  - Robust backend architecture featuring a dedicated Database API (`DataApi.php`), centralized CRUD handlers, pagination controllers (`PageController.php`), and Settings API wrappers.
  - Custom form lifecycle management for seamless data entry, searching, filtering, and pagination (`scripsts/CrudScript.php`).
---
## Project Structure

```text
abc-plugin/
├── abc-plugin.php          # Main plugin bootstrap file (activation/deactivation hooks)
├── composer.json           # PSR-4 Autoloading configuration (Inc\ namespace)
├── assets/                 # Global plugin styles and scripts (myscript.js, mystyle.css)
├── inc/                    # Core PHP source code (Inc namespace)
│   ├── Api/                # REST/Data APIs, CRUD operations, Pagination, and Callbacks
│   ├── Base/               # Lifecycle hooks (Activate, Deactivate, Enqueue, Uninstall)
│   ├── Pages/              # Admin pages, Management panels, and Asset modules
│   └── Init.php            # Service registration orchestrator
├── scripsts/               # Form action handlers (CrudScript.php for save, update, delete, search)
└── templates/              # HTML/PHP views for admin management panels and RTM IoT viewer
    ├── management/         # Views for Events, Interruptions, Logerr, Messages, and RTM
    └── objects/            # Views for Windparks, Turbines, Substations, Switchgears, etc.
```
---
## Tech Stack
- Platform: WordPress (Plugin Architecture)
- Language: PHP 7+ (Object-Oriented with PSR-4 Autoloading via Composer)
- Frontend Assets: Bootstrap 4 (isolated within the RTM module), custom CSS/JS
---
## Installation & Setup
- Copy or clone the abc-plugin directory into your WordPress plugins directory (wp-content/plugins/).
- Run Composer to initialize dependencies if needed:
```bash
    composer install
```
- Activate the plugin from the WordPress Administration Dashboard under Plugins.
- Access the newly created custom management menus from the sidebar to configure wind parks, monitor turbines, and review operational logs.