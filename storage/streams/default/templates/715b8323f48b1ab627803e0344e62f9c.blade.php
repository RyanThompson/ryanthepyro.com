
## Background

I am migrating this website, made with Larave 8, Streams, and HTML templates, to a fresh copy of Laravel 9 and clean it up. The following process will also apply to *new* template or theme based websites.

---

## Getting Started

To get started, I first installed a fresh copy of Laravel and Streams. 

```bash
# Create a new Laravel project
composer create laravel/laravel ryanthepyro.com

cd ryanthepyro.com

# Install Streams
composer require streams/core:2.0.x-dev
```

---

### Streams Migration

Simply copy and paste the `/streams` directory to move stream definitions and file-based data.

```bash
cp -r ../ryanthepyro.com.bak/streams ./
```

---

The streams directory for this site looks like this:

``` files
├── streams/
│   └── abilities.json
│   └── about.json
│   └── posts.json
│   └── projects.json
├── streams/data/abilities/*.json
├── streams/data/about/*.json
├── streams/data/posts/*.md
└── streams/data/projects/*.json
```

<!-- @todo: streams/sdk : streams:tap -->

---

### Frontend Integration

You can slice up any theme or design into templates and view partials. This website looks like this:

```files
├── resources/views/layouts
│   └── default.blade.php
├── resources/pages/home/*.blade.php
├── resources/pages/post/*.blade.php
├── resources/partials/*.blade.php
├── post.blade.php
└── welcome.blade.php
```

The `post` and `welcome` Blade templates are the main entrypoints to the view layer for this website. Each extend the `default` layout which includes various common `partials`. The `pages/*` templates are for includes specific to those types of pages.

I copied mine over from the old install as well:

```bash
cp -r ../ryanthepyro.com.bak/resources/img ./resources
```

### Integrating with Vite

Do this

### Running the Website

You can preview the website locally with the `php artisan serve` command. Use `npm run build` to build the frontend assets or `npm run dev` when developing.

### Cleaning + Optimizing

- Remove unnecessary/unnused stuff
- Split styles & organize assets
- Remove unused JS libraries
- Ensure tree-shaking
