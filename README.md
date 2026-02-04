# Hutagaol

Static website built using **TightenCo Jigsaw**.

---

## System Requirements

To use Jigsaw, you need to have PHP (minimum version **8.2**) and Composer installed on your machine. You’ll also optionally
need Node.js and NPM installed if you want to use Vite to compile your CSS and JavaScript.

---

## Setup Project

### Install Dependencies

Install PHP dependencies using Composer:

```bash
composer install
```

Install Node dependencies:

```bash
npm install
```

Copy .env and set APP_URL:

```bash
cp .env.example .env
```

---

### Build Project

For local development:

```bash
npm run dev
```

For production build:

```bash
npm run build
```

The generated static site will be available in:

```
/build_production
```

---

## Run Local Development Server

Jigsaw includes a built-in local server:

```bash
./vendor/bin/jigsaw serve
```

Then open your browser at:

```
http://localhost:8000
```

---

## Update Testimonial

### Testimonial Data Location

All testimonial data is stored in:

```
/source/testimonials.json
```

### Testimonial Data Structure

Example:

```php
return [
    [
        'name' => 'John Doe',
        'title' => 'CEO, Company Name',
        'quote' => 'This service is amazing!',
    ],
];
```

### How to Update Testimonial

1. Open `source/testimonials.json`
2. Add, edit, or remove testimonial entries
3. Save the file
4. Rebuild the project:

```bash
npm run dev
```

---

## Update Page Content

All page content is located inside the:

```
/source
```

Common files include:
- `index.blade.php`
- `about.blade.php`
- `testimonial.blade.php`

This project uses **Blade syntax**, similar to Laravel.

⚠️ **Do not edit any files inside `build_*` directories** because they are auto-generated.

---

## Git Commit Guide

### Check changes

```bash
git status
```

### Stage changes

```bash
git add .
```

### Commit changes

Use clear and descriptive commit messages:

```bash
git commit -m "Update testimonial content"
```

Examples:
- `Add new testimonial`
- `Fix testimonial layout`
- `Update homepage copy`
- `Refactor Blade components`

---

## Notes

- All content updates must be done inside the `source` directory
- Always rebuild after making content changes
- The `build_*` directories contain generated output only
