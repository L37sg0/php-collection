# Vanilla PHP Workspace

This directory contains standalone educational and architectural projects built using pure (vanilla) PHP without heavy external frameworks. It serves as a practical sandbox for learning software design patterns and modular procedural web application structures.
---
## Directory Structure

```text
vanilla/
├── design_patterns_php7/   # Comprehensive implementation of classic GoF design patterns in PHP 7+
└── php7_project/           # Multi-page modular website template following a PHP textbook guide
```
---
## Projects Overview
- Design Patterns PHP 7 (design_patterns_php7/)

    - Purpose: An educational reference and visualization tool implementing classic design patterns.

    - Key Characteristics:

        - Categorized architecture covering Creational, Structural, Behavioral, and Architectural/More patterns (e.g., Abstract Factory, Strategy, Observer, Repository, Service Locator).

        - Fully tested with automated PHPUnit test suites for every pattern.

        - Containerized environment using Docker, Nginx, and a custom lightweight MVC routing layer.

- PHP 7 Website Template Project (php7_project/)

    - Purpose: A modular multi-page static website template built as an implementation exercise from the textbook Practical PHP 7, MySQL 8, and MariaDB Website Databases (2nd Edition).

    - Key Characteristics:

        - Procedural, component-based layout using central templating (template.php) and modular includes (header.php, nav.php, info-col.php, footer.php).

        - Dynamic active-state navigation via PHP control structures across home and sequential subpages (page-2.php through page-5.php).

        - Styled with Bootstrap 4.