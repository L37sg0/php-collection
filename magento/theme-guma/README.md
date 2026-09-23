# Magento 2 Theme - Guma (Tires & Wheels Store)

Custom Magento 2 frontend theme built specifically for an e-commerce platform specializing in tires, wheels, and automotive accessories.
---
## Theme Overview

The theme is developed on top of the native Magento Blank theme (`magento/theme-frontend-blank`) and features custom module overrides designed to support technical automotive filters, specific product attributes (such as tire width, profile, diameter, load index, and speed rating), and a streamlined purchasing journey.
---
## Key Features & Customizations

- 🚗 **Automotive & Niche-Specific Layouts:** Tailored design components optimized for heavy filtering, search precision, and technical specifications typical of tire and wheel stores.
- ⚙️ **Enhanced Magento Core Overrides:** Custom layout XMLs, templates (`.phtml`), and styles overriding core extensions:
  - **Catalog & Advanced Search (`Magento_Catalog`, `Magento_CatalogSearch`):** Optimized for structured attribute filtering (width, profile, rim size, season - summer/winter/all-season).
  - **Layered Navigation (`Magento_LayeredNavigation`):** Enhanced filter sidebars for quick narrowing down of product options.
  - **Checkout & Cart (`Magento_Checkout`, `Magento_AdvancedCheckout`):** Clean and friction-free checkout process optimized for high-conversion automotive sales.
  - **Customer Features:** Support for customer accounts, balance, wishlists, rewards, and order management.
- 🎨 **Assets & Structure:** Dedicated `assets/` and `web/` directories for custom stylesheets, JavaScript, and theme imagery.
---
## Project Structure

```text
theme-guma/
├── assets/                     # Design source files and raw assets
├── etc/                        # Theme configuration files
├── i18n/                       # Translation dictionaries
├── media/                      # Theme banners, logos, and preview graphics
├── web/                        # Compiled static assets (CSS, LESS, JS)
├── Magento_AdvancedCheckout/   # Checkout flow overrides
├── Magento_AdvancedSearch/     # Search results and filters
├── Magento_Bundle/             # Bundle product templates (e.g. tire + rim sets)
├── Magento_Catalog/            # Product grids, lists, and product view pages
├── Magento_CatalogSearch/      # Search logic and widgets
├── Magento_Checkout/           # Cart and checkout templates
├── Magento_Customer/           # Customer dashboard and account views
├── Magento_LayeredNavigation/  # Faceted navigation filters
├── Magento_Newsletter/         # Newsletter signup blocks
├── Magento_Review/             # Product reviews and rating stars
├── Magento_Sales/              # Order history and invoice layouts
├── Magento_Theme/              # Root theme layouts and HTML skeletons
├── Magento_Wishlist/           # Wishlist page overrides
├── composer.json               # Composer package configuration
├── registration.php            # Component registration file
├── theme.xml                   # Theme declaration metadata
└── README.md                   # Documentation
```
---
## Installation & Setup

To install and activate the Guma theme in your Magento 2 environment:
- Place the theme directory into your Magento installation under app/design/frontend/magento/theme-guma (or your preferred vendor namespace).
- Run the following deployment and upgrade commands via SSH from your Magento root directory:
```bash
    php bin/magento setup:upgrade
    php bin/magento setup:static-content:deploy -f
    php bin/magento cache:flush
```
- Go to the Magento Admin Panel:
- Navigate to Content > Design > Themes to verify registration.
- Navigate to Content > Design > Configuration, choose your store view, and select the Guma theme.