# Windpark Dashboard

An application for monitoring, digitizing, and managing wind farms, turbines, and associated infrastructure. Built as an early Laravel system tailored for the needs of a wind farm monitoring and maintenance center.
---
## Core Features

- 🌬️ **Windpark Management:** Full CRUD operations for structuring and reviewing wind farms.
- ⚙️ **Turbine Monitoring:** Organizing wind generators linked to their respective farms.
- ⚡ **Substations & Outlets:** Tracking electrical infrastructure and grid connection points.
- 🔐 **Authentication:** Complete user authentication system including login, registration, and access control (via `laravel/ui`).
- 📝 **Administrative Dashboard:** Views for organizing core data structures and maintenance workflows.
---
## Project Structure

```text
windpark-dashboard/
├── app/
│   ├── Http/
│   │   ├── Controllers/   # Controllers for auth, frontend, windparks, turbines, etc.
│   │   └── Middleware/    # Standard Laravel middleware components
│   ├── Outlet.php         # Eloquent model for outlets
│   ├── Substation.php     # Eloquent model for substations
│   ├── Turbine.php        # Eloquent model for turbines
│   ├── User.php           # Eloquent model for users
│   └── Windpark.php       # Eloquent model for windparks
├── database/              # Seeders and factories for test data
├── resources/
│   └── views/             # Blade templates (auth, structure/turbines, windparks, substations, outlets)
└── routes/
    └── web.php            # Web routes and resource endpoints
```
---
## Tech Stack
- Backend: PHP ^7.2, Laravel Framework 6.2
- UI Framework: Laravel UI (^1.2), Bootstrap (via legacy Blade templates)
- Form & HTML Helpers: laravelcollective/html (^6.0)
- Developer Tools: Laravel Tinker
---
## Core Dependencies (composer.json)
- PHP: ^7.2
- Laravel Framework: ^6.2
- Laravel UI: ^1.2
- Laravel Collective HTML: ^6.0
