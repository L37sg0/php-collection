# PHP Design Patterns Visualization

A comprehensive educational reference and visualization tool implementing classic design patterns in PHP. Built with a custom lightweight MVC structure, automated unit tests, and containerized infrastructure, it serves as a hands-on implementation guide for software architectural patterns.
---
## Architecture & Core Features

- 🏗️ **Comprehensive Pattern Categories (`src/`):**
  - **Creational:** Abstract Factory, Builder, Factory Method, Pool, Prototype, Simple Factory, Singleton, and Static Factory.
  - **Structural:** Adapter/Wrapper, Bridge, Composite, Data Mapper, Decorator, Dependency Injection, Facade, Fluent Interface, Flyweight, Proxy, and Registry.
  - **Behavioral:** Chain of Responsibilities, Command, Interpreter, Iterator, Mediator, Memento, Null Object, Observer, Specification, State, Strategy, Template Method, and Visitor.
  - **More / Architectural:** Entity-Attribute-Value (EAV), Repository pattern, and Service Locator.
- 🧪 **Automated Testing:**
  - Every design pattern implementation includes dedicated PHPUnit test suites (`Tests/`) ensuring correct behavior and code reliability.
- 🌐 **Custom Frontend & Routing (`public/`, `src/Controllers/`):**
  - Lightweight custom PHP routing and controller layer (`HomeController`, `PatternsController`, `AboutController`) designed to render and explore pattern explanations and examples.
- 🐳 **Infrastructure & Containerization:**
  - Full Docker support (`Dockerfile`, `docker-compose.yml`) with Nginx and custom PHP configurations for isolated local development.
---
## Project Structure

```text
design_patterns_php7/
├── docker/                 # Container configs (Nginx, MySQL, PHP local.ini)
├── public/                 # Web root entry point, template partials (header, footer, sidebar) and functions
├── src/                    # PHP Source Code (L37sg0\DesignPatterns Namespace)
│   ├── Behavioral/         # Behavioral design pattern implementations and tests
│   ├── Controllers/        # Custom lightweight MVC controllers
│   ├── Creational/         # Creational design pattern implementations and tests
│   ├── More/               # Advanced patterns (EAV, Repository, Service Locator)
│   └── Structural/         # Structural design pattern implementations and tests
├── Dockerfile              # Application container definition
└── docker-compose.yml      # Docker Compose orchestration
```
---
## Tech Stack
- Language: PHP 7+ / 8 compatible
- Testing Framework: PHPUnit 9.5
- Environment: Docker, Nginx, MySQL
---
## Local Development & Setup
- Clone the repository and configure your environment variables.
- Spin up the application using Docker Compose:
```bash
    docker compose up -d
```
- Install dependencies via Composer:
```bash
    composer install
```
- Run the unit test suite to verify pattern implementations:
```bash
    vendor/bin/phpunit
```