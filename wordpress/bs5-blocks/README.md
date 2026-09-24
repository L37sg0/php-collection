# l37sg0 WordPress Bootstrap Blocks

An experimental WordPress Gutenberg block plugin designed to introduce custom, Bootstrap 5-styled components directly into the WordPress block editor.
---
## Architecture & Core Features

- 🧩 **Custom Gutenberg Blocks (`carousel/`, `company-contact/`):**
  - **l37sg0 Carousel:** Implements a fully structured Bootstrap 5 carousel component complete with indicators, sliding items, captions, and navigation controls.
  - **l37sg0 Company Contact:** An interactive contact card block allowing editors to configure and store business contact attributes (Company Name, Phone, Address, City, State, and Zip code) with live state updates in the editor.
- ⚙️ **Asset Registration & Enqueuing:**
  - Centralized registration configuration array (`L37SG0_BLOCK_REGISTER`) that automatically handles script dependencies (`wp-blocks`, `wp-i18n`, `wp-editor`) and enqueues the compiled block scripts into the Gutenberg editor via the `enqueue_block_editor_assets` action.
---
## Project Structure

```text
bs5-blocks/
├── bs5-blocks.php                  # Main plugin bootstrap and block script registration
├── carousel/                       # Carousel block source files
│   ├── block.js                    # Gutenberg block registration for the carousel
│   └── Carousel.jsx                # React component rendering the Bootstrap 5 carousel markup
└── company-contact/                # Company Contact block source files
    └── block.js                    # Gutenberg block registration and interactive React edit/save logic
```
---
## Tech Stack
- Platform: WordPress (Gutenberg Block API)
- Frontend / Editor Framework: React.js (JSX)
- UI Framework: Bootstrap 5 (markup standards)
---
## Installation & Usage
- Copy or upload the bs5-blocks folder into your WordPress wp-content/plugins/ directory.
- Activate the plugin through the Plugins menu in your WordPress administration dashboard.
- Open the Gutenberg block editor on any post or page, search for the l37sg0 block category, and insert either the Carousel or Company Contact block.