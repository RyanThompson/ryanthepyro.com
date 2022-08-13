
## Background

I am migrating this website, made with Laravel 8, Streams, and HTML templates, to a fresh copy of Laravel 9 and clean it up. The following process will also apply to *new* template or theme based websites.

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

I simply copied and pasted the `/streams` directory to move stream definitions and file-based data.

```bash
cp -r ../ryanthepyro.com.bak/streams ./
```

---

This website does not use any SQL or non-file-based databases so that is it for migrating content.

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

### Migrating Templates

I used Blade templates to slice up an HTML theme I purchased. To migrate them I copied and pasted the `/resources/views` directory. 

```bash
cp -r ../ryanthepyro.com.bak/resources/views/* ./resources/views
```

---

```files
└── resources/views/
│   └── post.blade.php
│   └── welcome.blade.php
├── resources/views/layouts
│   └── default.blade.php
├── resources/pages/home/*.blade.php
├── resources/pages/post/*.blade.php
└── resources/partials/*.blade.php
```

The `post` and `welcome` Blade templates are the main entrypoints to the view layer for this website. Each extend the `default` layout which includes various common `partials`. The `pages/*` templates are for includes specific to those types of pages.

### Migrating Images

I keep images in resources so those need to be copied over as well:

```bash
cp -r ../ryanthepyro.com.bak/resources/img ./resources
```

---

### Integrating with Vite

This website comes with some baggage to sort through which I had to copy over first:

```bash
cp -r ../ryanthepyro.com.bak/public/assets ./public
```

```files
└── public/assets/css/
│   └── vendor/bootstrap.min.css
│   └── vendor/fontawesome.css') !!}
│   └── vendor/lightbox.css') !!}
│   └── plugins/plugins.css') !!}
│   └── plugins.css
│   └── style.min.css
```

---

Laravel comes with a basic Vite configuration. In my case, I just opened `/resources/css/app.css` and dumped the unminified contents of `/assets/css/app.css` into it and comment out the original inclusion of it.

```blade
// resources/views/partials/head.blade.php
{!! Assets::style('/assets/css/vendor/bootstrap.min.css') !!}
{!! Assets::style('/assets/css/vendor/fontawesome.css') !!}
{!! Assets::style('/assets/css/vendor/lightbox.css') !!}
{!! Assets::style('/assets/css/plugins/plugins.css') !!}
{{-- {!! Assets::style('/assets/css/style.min.css') !!} --}}
```

I import the CSS in `resources/js/app.js` and include the resulting file with the `vite` directive:

```blade
// resources/views/partials/assets.blade.php
@verbatim@vite(['resources/js/app.js'])@endverbatim
```

---


### Running the Website

I could now locally serve the website and that is mission accomplished. I will organize and optimize everything next and it will be ready for the long-haul. 

```bash
npm run build
php artisan serve
```
