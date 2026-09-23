# L37sg0 Boxing - Magento 2 Custom Theme

Custom Magento 2 frontend theme designed specifically for e-commerce stores specializing in boxing and combat sports equipment (punching bags, boxing gloves, protective gear, hand wraps, and accessories).
---
## Theme Overview

The theme is built on top of the default Magento Blank theme (`magento/theme-frontend-blank`) and includes custom module overrides tailored to optimize the user experience, layout, and shopping flow for combat sports gear.

---
## Key Features & Customizations

- 🥊 **Niche-Tailored UI Overrides:** Tailored presentation for key e-commerce modules, including Catalog, Checkout, Layered Navigation, and Wishlists, to support rich product attributes (sizes, weights for punching bags, material types, etc.).
- 🛒 **Enhanced Core Modules:** Custom templates, layouts, and styles overriding multiple native Magento components:
  - **Catalog & Search:** Optimized product grids/lists, advanced search, and layered navigation for filtering gear by brand, weight, size, and category.
  - **Checkout & Cart:** Streamlined checkout process, advanced checkout options, gift options, and reward points integrations.
  - **Customer Engagement:** Built-in support for customer balance, multiple wishlists, product reviews, newsletters, and newsletters/rewards.
- 📐 **Responsive & Modern Architecture:** Fully responsive layout structures leveraging Magento's frontend standards, template overrides (`.phtml`), and layout XML files.
---
## Project Structure

```text
theme-boxing/
├── etc/                        # Theme configuration files
├── i18n/                       # Translation dictionaries
├── media/                      # Theme preview images and assets
├── web/                        # Static assets (CSS, Less/Sass, JS, images)
├── Magento_AdvancedCheckout/   # Overrides for advanced checkout features
├── Magento_Catalog/            # Catalog and product view overrides
├── Magento_Checkout/           # Cart and checkout process templates
├── Magento_Cms/                # CMS page layouts
├── Magento_Customer/           # Customer account & dashboard templates
├── Magento_LayeredNavigation/  # Filter and navigation sidebar customizations
├── Magento_Newsletter/         # Newsletter subscription blocks
├── Magento_Review/             # Product reviews and ratings
├── Magento_Theme/              # Global theme layout overrides and root templates
├── Magento_Wishlist/           # Wishlist functionality overrides
├── composer.json               # Composer package definition
├── registration.php            # Theme component registration file
├── theme.xml                   # Theme metadata declaration
└── README.md                   # Documentation
```
---
## Installation & Activation

To install and activate the L37sg0 Boxing theme in your Magento 2 environment:
- Place the theme directory into your Magento installation under app/design/frontend/L37sg0/boxing.
- Register and deploy the theme files by running the following CLI commands from your Magento root:
```bash
    php bin/magento setup:upgrade
    php bin/magento setup:static-content:deploy -f
    php bin/magento cache:flush
```
- Navigate to the Magento Admin Panel:
- Go to Content > Design > Themes to verify the theme is registered.
- Go to Content > Design > Configuration, select your store view, and assign L37sg0 Boxing as the current theme.