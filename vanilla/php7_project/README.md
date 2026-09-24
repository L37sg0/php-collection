# PHP 7 Website Template & Navigation Project

An educational multi-page website template built with **Vanilla PHP 7** and **Bootstrap 4**, following the exercises from the book *Practical PHP 7, MySQL 8, and MariaDB Website Databases (2nd Edition)* by Adrian West and Steve Prettyman (2018).
---
## Architecture & Core Features

- 🧩 **Modular Template System:**
  - Uses a central layout wrapper (`template.php`) that dynamically assembles page components.
  - Modular partial includes for headers (`header.php`, `header-for-template.php`), navigation (`nav.php`), sidebars (`info-col.php`), and footers (`footer.php`).
- 📄 **Page Structure:**
  - Static multi-page navigation setup comprising a Home page (`index.php`) and sequential pages (`page-2.php` through `page-5.php`).
  - Dynamic active-state routing logic managed via a simple PHP switch statement inside the navigation component based on the current page context.
- 🎨 **Styling & UI:**
  - Styled using **Bootstrap 4** via CDN, featuring responsive grid columns, jumbotrons, and custom button groups.
---
## Project Structure

```text
php7_project/
├── footer.php              # Footer template partial with copyright and metadata
├── header.php              # General header partial
├── header-for-template.php # Logo, title, and auxiliary button group header
├── info-col.php            # Right-side information/aside column content
├── nav.php                 # Dynamic navigation list with active-state handling
├── template.php            # Core layout template rendering the page grid
├── index.php               # Home page entry point ($page = 'Home')
├── page-2.php              # Page 2 entry point
├── page-3.php              # Page 3 entry point
├── page-4.php              # Page 4 entry point
├── page-5.php              # Page 5 entry point
├── logo.jpg                # Site branding logo graphic
├── Practical-...pdf        # Reference textbook ebook
└── README.md               # Project documentation
```
---
## Tech Stack
- Language: PHP 7+
- Frontend Framework: Bootstrap 4 (CDN)
- Architecture: Procedural PHP modular template pattern
---
## Running the Project
- To run this project locally, simply point a local PHP server to the directory:
```bash
    php -S localhost:8000
```