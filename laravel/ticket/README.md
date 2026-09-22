# Ticket Helpdesk API

A robust backend service and API implementation for a helpdesk and ticketing system, built with Laravel 10.
---
## Features

- 🎫 **Comprehensive Helpdesk Operations:** Dedicated routing, validation, and control structures for managing support tickets and internal departments.
- 👥 **User Management Endpoints:** Dedicated API logic for handling user-related actions, data transfers, and administrative tasks.
- 🛡️ **Advanced Request Validation:** Granular, action-specific validation classes grouped logically for tickets, departments, and user operations.
- ⚡ **API-Centric Design:** Clean RESTful routing structure defined under the `/api` prefix, complete with custom exception handling (`ApiExceptionHandler`) for API consistency.
---
## Project Structure

```text
ticket/
├── app/
│   ├── Exceptions/Helpdesk/ # Custom API and resource exceptions
│   ├── Http/
│   │   ├── Controllers/     # Controllers for Tickets, Departments, and Users
│   │   └── Requests/        # Action-specific Form Requests (Create, Update, Read, Delete, Import/Export)
│   ├── Models/Helpdesk/     # Eloquent models, static data classes, and relationship traits
│   ├── Observers/Helpdesk/  # Model observers (e.g., TicketStatusObserver)
│   ├── Providers/Helpdesk/  # Helpdesk-specific service configuration and providers
│   └── Rules/Helpdesk/      # Custom validation rules (e.g., ticket existence checks)
├── config/                  # Laravel configuration files
├── database/                # Migrations, factories, and seeders
└── routes/
    └── web.php              # Global and prefixed API route definitions
```
---
## Tech Stack
- Backend: PHP 8.1+, Laravel 10 Framework
- API & Authentication: Laravel Sanctum (^3.2)
- Data Handling: Custom Form Requests, Observers, and Eloquent Models
---
## Core Dependencies (composer.json)
- PHP: ^8.1
- Laravel Framework: ^10.10
- API Security: laravel/sanctum (^3.2)
- Developer Tools: laravel/tinker (^2.8), fakerphp/faker (^1.9.1)
---
## Usage
- Access the API endpoints utilizing the **`/api/helpdesk/`** and **`/api/users/`** route prefixes for tickets, departments, and user management workflows.
---
## UML Diagram
![helpdesk.schema.diagram.png](public%2Fhelpdesk.schema.diagram.png)
