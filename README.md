# PhpSPA Template

A simple, minimal template for building single-page applications with PHP using the [phpSPA framework](https://github.com/dconco/phpspa).

## Quick Start

```bash
composer create-project phpspa/phpspa MyApp
cd MyApp
composer start
```

## What's Included

- **2 Simple Pages**: Home and About
- **Clean Layout**: Minimal HTML structure
- **Tailwind CSS**: For styling
- **Responsive**: Works on all devices

## Project Structure

```
src/
├── index.php          # App entry point
├── config/env.php     # Environment config
├── layout/Layout.php  # HTML layout
└── pages/
    ├── HomePage.php   # Home page
    └── AboutPage.php  # About page
```

## Customize

1. Edit content in `pages/` files
2. Modify styles by updating Tailwind classes
3. Add new pages by creating new files and registering routes in `index.php`

That's it! Simple and ready to go.

---

Built with [phpSPA Framework](https://github.com/dconco/phpspa)
