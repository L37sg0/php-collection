# Symfony Guestbook

A full-featured, multi-tier Guestbook web application built following the official **"The Fast Track" (Symfony 6)** book tutorial. The project implements a traditional server-side rendered Twig application alongside an independent Single Page Application (SPA), asynchronous message processing via **RabbitMQ (AMQP)**, REST API via **API Platform**, and administration via **EasyAdmin**.
---
## Architecture & Core Features

- 🖥️ **Dual Frontend Setup:**
  - **Main App (Twig):** Traditional Server-Side Rendered interface for managing conferences, viewing comments, and submitting posts.
  - **SPA (`/spa` directory):** A decoupled Single Page Application built with **Preact**, **Preact Router**, and Webpack Encore, communicating via the API backend.
- ⚡ **API & Services:**
  - **API Platform:** Exposes robust REST endpoints (`api-platform/core`) with CORS configuration (`nelmio/cors-bundle`).
  - **Spam Checker & Image Optimization:** Integrates external APIs for spam validation (Akismet) and image processing via `imagine/imagine`.
- 📬 **Asynchronous Messaging & Queue:**
  - Uses **Symfony Messenger** combined with **RabbitMQ (`ext-amqp`)** to process background jobs like comment handling, notifications, and workflow transitions.
- 🔐 **Administration & Workflows:**
  - **EasyAdmin Bundle:** Dedicated dashboard for reviewing, editing, and publishing/rejecting comments (`App\Controller\Admin`).
  - **Symfony Workflow:** Manages comment lifecycle states (e.g., accepted, rejected, spam).
---
## Project Structure

```text
guestbook/
├── assets/                 # Main Twig app assets (JS, SCSS, images)
├── bin/                    # Console and test executables
├── config/                 # Symfony configurations (packages, routes, services)
├── migrations/             # Doctrine database migration versions
├── public/                 # Web server entry point (index.php)
├── spa/                    # Decoupled Preact SPA source code and Webpack configuration
│   ├── assets/             # SPA styles and variables
│   ├── src/                # SPA components, pages (home, conference), and API clients
│   └── webpack.config.js   # Encore config for the frontend SPA
├── src/                    # PHP Source Code (App Namespace)
│   ├── Api/                # API Platform extensions and filters
│   ├── Command/            # Custom CLI commands (Cleanup, Step info)
│   ├── Controller/         # Web controllers & EasyAdmin CRUD controllers
│   ├── Entity/             # Doctrine Entities (Conference, Comment, Admin)
│   ├── Message/            # Messenger messages & handlers (RabbitMQ consumers)
│   ├── Repository/         # Doctrine data repositories
│   └── Security/           # Custom authenticators
├── templates/              # Twig HTML templates (layouts, emails, admin views)
├── tests/                  # PHPUnit functional & unit tests
├── translations/           # ICU translation files (EN, FR)
├── compose.yaml            # Docker Compose orchestration
└── nginx.conf.example      # Example Nginx virtual host configurations
```
---

## Tutorial application following symfony 6 book

https://symfony.com/doc/6.2/the-fast-track/en
---
## Differences:
 - is using mysql instead of postgresql
 - symfony CLI is not installed
 - code is not deployed on platform.sh
---
## Used Commands in the tutorial - only the rare ones

### asks you for a plain password and returns to you a hash
```bash
docker-compose exec app symfony-guestbook/bin/console security:hash-password
```

### makes a testcase of the specified type
```bash
docker-compose exec app symfony-guestbook/bin/console make:test TestCase SpamCheckerTest
```

### creates the database specified in the pointed config
```bash
docker-compose exec app symfony-guestbook/bin/console doctrine:database:create --env=test
```

### loads the fixtures(fake date) in the database (--env=test will be for the test database)
```bash
docker-compose exec app symfony-guestbook/bin/console doctrine:fixtures:load --env=test
```

### consumes the messages submitted to the message bus
```bash
docker-compose exec app symfony-guestbook/bin/console messenger:consume async -vv
```

### install the workflow bundle
```bash
docker-compose exec app composer -d symfony-guestbook/ require symfony/workflow
```

### generate the image with the workflow
```bash
docker-compose exec app symfony-guestbook/bin/console workflow:dump comment | dot -Tpng -o ./symfony-guestbook/workflow.png
```

### explicitly find workflow services from the dependency injection container
```bash
docker-compose exec app symfony-guestbook/bin/console debug:container workflow
```
```bash
docker-compose exec app symfony-guestbook/bin/console debug:autowiring workflow
```

### check with curl if HTTP Cache Kernel is active
```bash
curl -s -I -X GET http://localhost
```
```bash
# First request is a 'miss'
HTTP/1.1 200 OK
Server: nginx/1.23.4
Content-Type: text/html; charset=UTF-8
Content-Length: 68418
Connection: keep-alive
X-Powered-By: PHP/8.2.12
Cache-Control: public, s-maxage=3600
Date: Mon, 27 Nov 2023 12:01:37 GMT
X-Debug-Token: cea4e1
X-Debug-Token-Link: http://localhost/_profiler/cea4e1
X-Robots-Tag: noindex
X-Content-Digest: end88bc5ef519a8c5515eb16831d43377c
Age: 0
X-Symfony-Cache: GET /: miss, store

# Second request is a 'fresh' and Age is also changed
HTTP/1.1 200 OK
Server: nginx/1.23.4
Content-Type: text/html; charset=UTF-8
Content-Length: 68418
Connection: keep-alive
X-Powered-By: PHP/8.2.12
Cache-Control: public, s-maxage=3600
date: Mon, 27 Nov 2023 12:01:37 GMT
x-debug-token: cea4e1
x-debug-token-link: http://localhost/_profiler/cea4e1
x-robots-tag: noindex
x-content-digest: end88bc5ef519a8c5515eb16831d43377c
Age: 106
X-Symfony-Cache: GET /: fresh
```

### purge cache using curl as per the new route defined
```bash
curl -s -I -X PURGE -u admin:password http://localhost/admin/http-cache/
curl -s -I -X PURGE -u admin:password http://localhost/admin/http-cache/conference_header
```

### sets API_ENDPOINT env var for the spa
```bash
docker-compose exec -e API_ENDPOINT="http://symfony-guestbook.loc/" app npm run dev --prefix symfony-guestbook/spa/
```

### create cordova app in spa and add android support for it
```bash
docker-compose exec app npm run cordova create app --prefix symfony-guestbook/spa/
docker-compose exec app npm run cordova platform add android --prefix symfony-guestbook/spa/app
# then run npm run dev to build and copy content of public to app/www
rm -rf spa/app/www/
mkdir -p spa/app/www
cp -r spa/public/ spa/app/www/

```

### extracts translation files in translations folder
```bash
docker-compose exec app symfony-guestbook/bin/console translation:extract fr --force --domain=messages
```

### for running the tests need to pass vars first:
```bash
docker-compose exec -e APP_ENV=test -e KERNEL_CLASS="App\Kernel" -e CORS_ALLOW_ORIGIN="^http?://(localhost|127\.0\.0\.1|spa\.symfony-guestbook\.loc)(:[0-9]+)?" app symfony-guestbook/vendor/bin/phpunit symfony-guestbook/tests/
```

## Notes:
 - workflows should be probably used with some additional checks.
 - DO NOT forget to clean your cached views for the env you're working on when make changes on templates
   ```bash
   rm -rf var/cache/dev
   ```
