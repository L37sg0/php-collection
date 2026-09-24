# l37sg0 WordPress Shortcodes

A lightweight example WordPress plugin designed to inject custom interactive elements and formatted content snippets into posts and pages using simple shortcodes.
---
## Architecture & Core Features

- 🔘 **Button Shortcode (`[button]`):**
  - Allows editors to generate custom-styled links rendered as HTML buttons.
  - Supports configurable attributes: `url` (defaults to `#`) and `target` (defaults to `_blank`).
- 💻 **Code Snippet Shortcode (`[code]`):**
  - Safely formats and displays code snippets inside `

---
## Project Structure
```text
text-correction-plugin/
├── l37sg0-wp-shortcodes.php                        # Main plugin file containing the content filter
├── LICENSE                                         # Open-source license file
└── README.md                                       # Project documentation
```
---
## Tech Stack
- Platform: WordPress (Filter Hook API)
- Language: PHP
---
## Installation & Usage
- Copy or upload the text-correction-plugin folder into your WordPress wp-content/plugins/ directory.
- Activate the plugin via the Plugins menu in your WordPress administration dashboard.