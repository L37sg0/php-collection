# Symfony Projects Workspace

This directory contains a collection of Symfony web applications and experimental projects showcasing different architectural patterns, security models, and feature implementations.
---
## Directory Structure

```text
symfony/
├── guestbook/         # Guestbook application featuring messaging and visitor interaction.
├── picture-cms/       # Content Management System tailored for image/media gallery handling.
├── rbac/              # Role-Based Access Control implementation focusing on granular permissions and security policies.
├── restaurant/        # Full-stack restaurant management system with API integration, EasyAdmin, and 2FA.
└── veloshop/          # Bicycle e-commerce frontend prototype using Symfony UX Twig Components and custom authenticators.
```
---
## Projects Overview
- **`Guestbook (guestbook/)`** - A classic introductory project focusing on handling form submissions, database persistence with Doctrine, and visitor comments.
- **`Picture CMS (picture-cms/)`** - A media-focused Content Management System designed for organizing, uploading, and managing image assets and galleries.
- **`RBAC (rbac/)`** - A security-centric project implementing complex Role-Based Access Control, user roles, permission matrices, and protected administrative routes.
- **`Restaurant (restaurant/)`** - A robust restaurant application featuring public frontend pages, table bookings, customer reviews, an API Platform menu synchronization service, and secure Two-Factor Authentication (2FA) via TOTP managed through EasyAdmin.
- **`VeloShop (veloshop/)`** - An e-commerce frontend architecture for a bicycle store utilizing Symfony UX Twig Components, custom UI building blocks, and tailored security authentication handlers.