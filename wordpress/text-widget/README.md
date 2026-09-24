# l37sg0 Text Widget

A lightweight example WordPress plugin that provides a customized clone of the classic Text Widget, allowing site administrators to display custom titles and text blocks in widget-ready areas.
---
## Architecture & Core Features

* 📄 **Custom Widget Class (`l37sg0_Text_Widget`):**
* Extends the native WordPress `WP_Widget` class to manage widget rendering, settings forms, and data updates.
* Automatically handles widget title filtering via the standard `widget_title` hook.


* ⚙️ **Admin Control & Settings Form (`form.php`):**
* Provides a dedicated settings template with input fields for a customizable title and a multi-line text area (with a 16-row height).
* Sanitizes user input during updates using `strip_tags()` for titles and safe handling for text content.
---

## Project Structure

text-widget/
├── form.php                    # HTML form template for the widget admin settings
├── l37sg0-wp-text-widget.php   # Main plugin file containing widget registration and logic
├── LICENSE                     # Open-source license file
└── README.md                   # Project documentation

---

## Tech Stack

* **Platform:** WordPress (Widget API)
* **Language:** PHP, HTML

---

## Installation & Usage

1. Copy or upload the `text-widget` folder into your WordPress `wp-content/plugins/` directory.
2. Activate the plugin via the **Plugins** menu in your WordPress administration dashboard.
3. Navigate to **Appearance > Widgets**, drag the **l37sg0 Text Widget** into an active sidebar, configure your custom title and text, and save your changes.