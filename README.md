# Jaideep Kaur · Portfolio

Personal portfolio website for Jaideep Kaur, aviation customer service and ground operations professional.

Built with **Laravel 12** (PHP 8.2+). The front end is plain CSS and JavaScript in `public/`, so there is **no Node.js / npm build step**. That keeps it compatible with the Node.js 17.9 runtime on the server (Laravel's default Vite setup needs Node 20+).

## Editing content

All text on the site (summary, experience, skills, credentials, contact details) lives in one file:

```
config/portfolio.php
```

Edit it, commit and redeploy. You don't need to touch any templates.

**Résumé download:** put the PDF at `public/files/Jaideep-Kaur-Resume.pdf`. The "Download résumé" buttons appear automatically when that file exists.

## Project structure

| Path | Purpose |
| --- | --- |
| `config/portfolio.php` | All portfolio content |
| `resources/views/portfolio.blade.php` | Page template |
| `resources/views/layouts/app.blade.php` | HTML shell, SEO meta tags |
| `public/css/portfolio.css` | Styles |
| `public/js/portfolio.js` | Mobile menu, scroll animations |
| `app/Http/Controllers/PortfolioController.php` | Page and contact form |

## Run locally

```bash
composer setup     # install, create .env, generate APP_KEY
php artisan serve  # http://127.0.0.1:8000
```

For local development set `APP_ENV=local` and `APP_DEBUG=true` in `.env`.

Tests: `composer test`

## Deploying on Plesk

### 1. PHP version
**Websites & Domains → PHP Settings**: select **PHP 8.2 or newer**.

### 2. Pull the code from GitHub
**Websites & Domains → Git**:
- Repository URL: `https://github.com/kaurjaideep90/Jaideep-portfolio.git`
- Deployment mode: **Automatic**
- Server path: `/httpdocs`

(If the **Laravel Toolkit** extension is installed, you can use **Websites & Domains → Laravel → Install Application** with the same Git URL instead. It runs composer and artisan for you. Leave any npm/Node step disabled; none is needed.)

### 3. Point the document root at `/public`
**Websites & Domains → Hosting Settings → Document root**: `httpdocs/public`

(If your plan doesn't allow changing it, the `.htaccess` in the project root forwards requests to `public/` and blocks access to private files.)

### 4. Install PHP dependencies
**Websites & Domains → PHP Composer** (or SSH into `httpdocs`):

```bash
composer install --no-dev --optimize-autoloader
```

### 5. Create the `.env` file
Using **File Manager** or SSH in `httpdocs`:

```bash
cp .env.example .env
php artisan key:generate
```

Then edit `.env`:
- `APP_URL=https://your-domain.com`
- Contact form email (see below)

### 6. Permissions and caches
```bash
chmod -R 775 storage bootstrap/cache
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

Run `php artisan optimize:clear` followed by the cache commands again after every change to `.env` or `config/portfolio.php`.

### 7. Contact form email
Create a mailbox in Plesk (**Mail → Create Email Address**, e.g. `noreply@your-domain.com`), then in `.env`:

```dotenv
MAIL_MAILER=smtp
MAIL_HOST=localhost          # or your mail server, e.g. mail.your-domain.com
MAIL_PORT=587
MAIL_USERNAME=noreply@your-domain.com
MAIL_PASSWORD=the-mailbox-password
MAIL_FROM_ADDRESS="noreply@your-domain.com"
PORTFOLIO_EMAIL=kaurjaideep90@gmail.com   # where messages are delivered
```

Until SMTP is configured, `MAIL_MAILER=log` writes messages to `storage/logs/laravel.log`. If sending fails, visitors are shown your email address instead.

### 8. SSL
**Websites & Domains → SSL/TLS Certificates** → issue a free **Let's Encrypt** certificate and enable "Redirect from HTTP to HTTPS".

### Redeploying
After pushing to GitHub, Plesk pulls automatically. Under **Git → Repository settings → Deployment actions** you can add:

```bash
composer install --no-dev --optimize-autoloader && php artisan optimize:clear && php artisan config:cache && php artisan route:cache && php artisan view:cache
```
