# L37sg0_HelloWorld - Magento 2 Custom Module

A comprehensive custom Magento 2 module built as a learning and practice exercise for module development, database schema management, setup/upgrade scripts, routing, controllers, blocks, and admin configuration integration.
---
## Core Features & Components

- 🗄️ **Database Schema Management (`Setup/InstallSchema.php`, `UpgradeSchema.php`):** 
  - Creates a custom database table (`post` / `Post Table`) with an indexed full-text search capability.
  - Includes an upgrade schema script (`v1.2.0`) to dynamically add extra columns (`test_column` of decimal type) to the existing table.
- 🌱 **Data Seeding & Upgrades (`Setup/InstallData.php`, `UpgradeData.php`):**
  - Populates initial mock posts (`Post 1`, `Post 2`) during installation.
  - Upgrades data (`v1.3.0`) to insert subsequent records (`Post 3`, `Post 4`).
- 🏛️ **Models & Collections (`Model/`):**
  - Standard Eloquent-like Magento ORM mapping for posts, resource models, and collections.
- ⚙️ **Admin Configuration (`etc/adminhtml/system.xml`):**
  - Registers a custom configuration tab (`L37sg0`) and section (`Hello World`) in the Magento Admin panel with general settings (Module Enable toggle and Custom Display Text field).
- 🌐 **Frontend Routing & Views (`Controller/`, `view/`):**
  - Custom frontend controllers and action routes (`index`, `display`, `test`) linked to layout XML files and PHTML templates (`index.phtml`, `display.phtml`, `test.phtml`).
---
## Project Structure

```text
magento-hello/
├── Block/                # UI Block classes (Display, Index, Test)
├── Controller/           # Frontend controller actions (Index, Config, Display, Test)
├── Helper/               # Module helper classes (Data.php)
├── Model/                # Post model and Resource Models/Collections
├── Setup/                # Install and Upgrade scripts for schema and data
├── etc/                  # XML configuration files
│   ├── adminhtml/        # Admin system configuration (system.xml)
│   ├── frontend/         # Frontend routing (routes.xml)
│   ├── config.xml        # Module default configuration
│   └── module.xml        # Module registration definition
├── view/                 # Frontend layout XMLs and HTML/PHTML templates
└── registration.php      # Module component registration
```
---
## Installation & Activation

To install and register this custom module in a Magento 2 instance:
- Place the module folder inside your Magento root directory under app/code/L37sg0/HelloWorld.
- Run the Magento upgrade and compilation commands via CLI:
```bash
    php bin/magento module:enable L37sg0_HelloWorld
    php bin/magento setup:upgrade
    php bin/magento setup:di:compile
    php bin/magento cache:flush
```