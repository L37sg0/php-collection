# l37sg0 WordPress User Widget

A lightweight example WordPress widget designed to greet visitors and display personalized welcome messages based on their authentication status.
---
## Architecture & Core Features

- 👤 **Dynamic User Greeting (`l37sg0-wp-user-widget.php`):**
  - Extends the native WordPress `WP_Widget` class to create a custom sidebar/widget area component.
  - Checks if a user is currently logged in via `wp_get_current_user()`.
  - Displays a personalized greeting showing the user's nice name if logged in, or a default `"Welcome Guest"` message for unauthenticated visitors.
- ⚙️ **Widget Registration:**
  - Automatically hooks into the WordPress `widgets_init` action using `register_widget()` to make the component available across widget-ready areas.
---
## Project Structure

```text
greeting-widget/
├── l37sg0-wp-user-widget.php   # Main plugin and widget class implementation
├── LICENSE                     # Open-source license file
└── README.md                   # Project documentation
```
---
## Tech Stack
- Platform: WordPress (Widget API)
- Language: PHP
---
## Installation & Usage
- Copy or upload the greeting-widget folder into your WordPress wp-content/plugins/ directory.
- Activate the plugin via the Plugins menu in your WordPress administration dashboard.
- Navigate to Appearance > Widgets and drag the l37sg0 User Widget into any active sidebar or widget area.