# Gamento - Magento 2 Custom Theme & Setup

A custom Adobe Commerce (Magento Open Source 2.4.7) installation featuring a custom administrative theme and layout modifications tailored for branding and design experimentation.
---
## Core Features & Customizations

- 🎨 **Custom Admin Theme (`L37sg0_Gamento`):** Tailored admin panel branding located in `app/design/adminhtml/L37sg0/Gamento`, including custom LESS styles and a branded logo (`gamento-logo.jpeg`).
- 🛠️ **Admin UI Modifications:** Customized admin login and default layouts (`admin_login.xml`, `default.xml`) for the Magento backend.
- 🧩 **Custom Module Scaffold (`L37sg0_GamentoTheme`):** Basic module structure setup under `app/code` to support theme registration and dependency injection configurations.
- 🌐 **Localization & Utilities:** Integrated Bulgarian language pack (`mageplaza/magento-2-bulgarian-language-pack`), SMTP support (`mageplaza/module-smtp`), and 2FA disabled for local development convenience (`markshust/magento2-module-disabletwofactorauth`).
---
## Project Structure

```text
gamento/
├── app/
│   ├── code/
│   │   └── L37sg0/
│   │       └── GamentoTheme/      # Custom module wrapper for theme dependencies
│   ├── design/
│   │   └── adminhtml/
│   │       └── L37sg0/
│   │           └── Gamento/       # Custom Magento Admin theme assets, layouts, and styles
│   └── etc/                       # Global Magento config files, DI, and database schema mappings
├── composer.json                  # Magento 2.4.7-p1 dependencies and extra plugins
```
---
## Tech Stack & Requirements
- Platform: Adobe Commerce / Magento Open Source 2.4.7-p1
- Backend: PHP 8.2+ (as required by Magento 2.4.7)
- Search Engine: Elasticsearch 8 (magento/module-elasticsearch-8)
- Key Modules/Packages:
    - **`mageplaza/magento-2-bulgarian-language-pack`**
    - **`markshust/magento2-module-disabletwofactorauth`**
    - **`mageplaza/module-smtp`**
    - **`n98-magerun2.phar`**
---
## Installation & Setup
- Install project dependencies via Composer:
```bash
composer install
```
- Configure your environment settings (copy env.php.example to app/etc/env.php and update database/host details).
- Run Magento setup commands to deploy static content, compile dependency injection, and upgrade the database:
```bash
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
```
- Clean and flush the cache:
```bash
php bin/magento cache:flush
```
