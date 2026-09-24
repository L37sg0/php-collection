# theme1 (First WordPress Theme)

A classic custom-built WordPress theme created as an initial exploration into WordPress theme development, integrated with Bootstrap 5 and utilizing the WP Bootstrap Navwalker class for advanced navigation support.
---
## Architecture & Core Features

* 🧭 **WP Bootstrap Navwalker Integration:**
    * Includes the `WP_Bootstrap_Navwalker` class to seamlessly integrate Bootstrap 4/5 dropdown menus and navigation bars with the WordPress built-in menu manager.
    * Automatically filters and adapts attributes (such as changing `data-toggle` to `data-bs-toggle` for Bootstrap 5 compatibility).


* 💬 **Comment Management & Querying:**
    * Implements custom comment queries (`WP_Comment_Query`) alongside native WordPress comment forms and list templates (`comments.php`).


* ⚙️ **Functions & Asset Management (`functions.php`):**
    * Registers styles and scripts via CDN (Bootstrap 5.0.2, Popper.js, FontAwesome 6.1.2, and Slim jQuery).
    * Adds core theme supports like `title-tag` and `custom-logo`, and registers the primary top navigation menu location.



## Project Structure
```txt
theme1/
├── assets                  # Theme assets including images (banner.jpg)
├── class-wp-bootstrap-navwalker.php # Bootstrap navigation walker implementation
├── comments.php            # Custom comment rendering and comment form template
├── content.php             # Main post/page content display template
├── footer.php              # Global footer template
├── functions.php           # Core theme functions, script/style enqueuing, and menu registrations
├── header.php              # Global header template with banner and inline styling
├── index.php               # Main template file
├── loop.php                # Post looping template
├── README.md               # Project documentation
├── searchform.php          # Custom search form template
└── style.css               # Theme metadata and stylesheet
```
---

## Tech Stack

* **Platform:** WordPress Theme API
* **Frontend Framework:** Bootstrap 5.0.2, FontAwesome 6.1.2
* **Language:** PHP, HTML5, CSS3, JavaScript

---

## Installation & Usage

1. Copy or upload the `theme1` folder into your WordPress `wp-content/themes/` directory.
2. Navigate to **Appearance > Themes** in your WordPress administration dashboard and activate **theme1**.
3. Set up your custom navigation menus under **Appearance > Menus** and assign them to the **Top Navbar** location to leverage the Bootstrap Navwalker.