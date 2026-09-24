# l37sg0 WordPress Contraction Compulsion Correction

A lightweight example WordPress plugin that intercepts post content dynamically to fix English contractions on the fly, replacing shorthand forms with their full-word equivalents.
---
## Architecture & Core Features
- 📝 Content Filtering Engine (l37sg0-wp-contraction-compulsion-correction.php):
    - Hooks into the native WordPress the_content filter to modify text rendering automatically.
    - Decodes HTML entities using html_entity_decode() prior to processing.
- 🔄 Contraction Mapping & Replacement:
    - Standardizes typographic apostrophes (e.g., converting smart quotes ’ to straight quotes ').
    - Replaces common contractions (case-insensitively) with expanded phrases:
    ```text
        isn't → is not
        we'll → we will
        you'll → you will
        can't → cannot
        i'll → i will
        it's → it is
        i'm → i am
    ```
    - Includes a playful Easter egg rule that highlights occurrences of the word "Gotham" with a pink background style.
---
## Project Structure
```text
text-correction-plugin/
├── l37sg0-wp-contraction-compulsion-correction.php # Main plugin file containing the content filter
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
- Create or view any post containing text with common contractions (e.g., "Isn't it grand that we'll soon be sailing..."), and the plugin will automatically expand them when rendered on the frontend.