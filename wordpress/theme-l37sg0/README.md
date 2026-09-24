# l37sg0 Theme

A custom-built WordPress theme designed specifically for l37sg0.com, featuring a fully responsive layout powered by Bootstrap 5, modular template structuring, and custom post types/options.
---
## Architecture & Core Features

* 🎨 **Bootstrap 5 Integration:**
* Fully styled using Bootstrap 5 and FontAwesome for modern components, offcanvas navigation, and utility classes.


* ⚙️ **Modular Functions & Backend Architecture (`functions.php`):**
* Modularly loads theme support, styles, scripts, menus, custom post types (About, Projects, Services), URL rewrites, and an AJAX-powered contact form.


* 🧩 **Template Hierarchy & Layout Parts:**
* **Router (`index.php`):** Handles conditional template loading for 404 pages, blog routes, and homepage sections.
* **Home Sections:** Organizes the landing page into modular sections including a header banner, about overview, services, tech stack, API experience, and projects.
* **Blog & Footer:** Includes dedicated layouts for posts, pagination, and a rich footer complete with navigation links, a newsletter signup form, and social media icons.

---

## Project Structure
```txt
theme-l37sg0/
├── assets                  # CSS stylesheets, JavaScript files, and images
├── content.php             # Main content template wrapper
├── footer.php              # Global footer template with navigation and social icons
├── functions/              # Modular theme functionality (Contact form, Custom Post Types, Options, Scripts, Styles)
├── functions.php           # Theme bootstrap file loading core function modules
├── header.php              # Global header template with responsive Bootstrap navigation bar
├── index.php               # Main template router handling conditional page rendering
├── LICENSE                 # Open-source license file
├── parts/                  # Template parts grouped by context (blog, home, 404 page)
├── README.md               # Project documentation
└── style.css               # Theme metadata and primary stylesheet
```
---

## Tech Stack

* **Platform:** WordPress Theme API
* **Frontend Framework:** Bootstrap 5, jQuery 3.6.3, FontAwesome
* **Language:** PHP, HTML5, CSS3, JavaScript

---

## Installation & Usage

1. Copy or upload the `theme-l37sg0` folder into your WordPress `wp-content/themes/` directory.
2. Navigate to **Appearance > Themes** in your WordPress administration dashboard and activate **l37sg0 Theme**.
3. Configure your menus, custom post types, and theme options to populate the homepage sections, services, and project portfolios.