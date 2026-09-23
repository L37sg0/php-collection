# Magento Workspace Overview (`magento/`)

A centralized workspace directory containing custom-built Magento 2 modules, themes, and development sandboxes created for various e-commerce demos and learning exercises.
---
## Directory Structure & Components

```text
magento/
├── gamento/          # Core Magento installation / environment sandbox or workspace
├── magento-hello/    # Custom learning module (L37sg0_HelloWorld) featuring custom database tables, setup/upgrade scripts, admin configurations, and frontend routes
├── magento-smtp/     # Custom SMTP configuration module for mail handling and delivery
├── theme-boxing/     # Specialized frontend theme tailored for a combat sports & boxing equipment store
└── theme-guma/       # Custom e-commerce frontend theme designed for a tires and automotive wheels web store
```
---
## Summary of Projects
- **`gamento/`**: Working environment or reference structure for testing Magento instances.
- **`magento-hello/`**: A comprehensive practice module implementing a custom database entity (post), data fixtures (InstallData, UpgradeData), schema migration scripts, frontend controllers/views, and an Admin panel configuration section (L37sg0 tab).
- **`magento-smtp/`**: Integration module handling outbound email configuration and mailing services for Magento.
- **`theme-boxing/`**: A niche frontend theme based on Magento Blank, customized for selling boxing gloves, punching bags, hand wraps, and protective gear.
- **`theme-guma/`**: A specialized automotive frontend theme optimized for tire, wheel, and accessory stores featuring extensive catalog filters and streamlined checkout flows.