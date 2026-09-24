# turbines-plugin

A robust, object-oriented custom WordPress plugin developed as a machine planning tool for wind parks, based on advanced plugin architecture tutorials by Alessandro Castellani.

---

## Architecture & Core Design Patterns

* 🧩 **Object-Oriented Structure (MVC-inspired):** Utilizes a modular architecture managed through Composer and PSR-4 autoloading.
* ⚙️ **Initialization & Service Container (`Inc\Init`):** Automatically registers core services, admin controllers, custom post types, and activation hooks upon bootstrap.
* 🔧 **Settings & Data APIs:** Abstracted administrative settings management via custom API wrappers (`SettingsApi`, `DataApi`) and callback handlers (`AdminCallbacks`).
* 🔄 **Lifecycle Management:** Clean separation of concerns for plugin **Activation**, **Deactivation**, and **Uninstallation** routines.

---

## Project Structure

```text
turbines-plugin/
├── assets/
│   ├── myscript.js          # Plugin frontend/admin JavaScript
│   └── mystyle.css          # Custom styling
├── composer.json            # Composer configuration & autoload rules
├── inc/
│   ├── Api/
│   │   ├── Callbacks/       # Admin configuration callbacks
│   │   ├── Data/            # Data handling APIs
│   │   └── SettingsApi.php  # Settings registration engine
│   ├── Base/
│   │   ├── Activate.php     # Activation hooks logic
│   │   ├── BaseController.php# Shared base paths and URLs
│   │   ├── Deactivate.php   # Deactivation hooks logic
│   │   ├── Enqueue.php      # Script and stylesheet enqueuing
│   │   ├── SettingsLinks.php# Plugin action/settings links
│   │   └── Uninstall.php    # Clean uninstallation routine
│   ├── Init.php             # Core service registration loader
│   └── Pages/
│       └── Admin.php        # WordPress Admin dashboard page builder
├── templates/
│   ├── admin.php            # Dashboard management view
│   ├── cpt.php              # Custom Post Type management view
│   ├── taxonomy.php         # Custom taxonomy management view
│   └── widget.php           # Widget management view
├── turbines-plugin.php      # Main plugin bootstrap file
└── vendor/                  # Composer dependencies & autoloader

```

---

## Tech Stack & Highlights

* **Platform:** WordPress Plugin API (Custom Post Types, Taxonomies, Settings API)
* **Design Pattern:** Modular Service Container with PSR-4 Autoloading
* **Language:** PHP, JavaScript, CSS3
* **Author:** Petar Ivanov

---

## Installation & Usage

1. Clone or upload the `turbines-plugin` directory into your WordPress `wp-content/plugins/` directory.
2. Run `composer install` inside the plugin folder to generate the vendor autoloader if dependencies require building.
3. Navigate to **Plugins** in your WordPress administration panel and activate **Турбини**.
4. Configure your wind park machine planning metrics via the newly added admin menu pages.