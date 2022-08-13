---
title: Website Refresh
subtitle: Pt1, The Basics
created_at: 2022/08/10
updated_at:
enabled: true
poster: resources::img/renovation-pt1.jpg
caption: Early renovation
---

## Background

I am migrating this website, made with Laravel 8, Streams, and an HTML template theme, to a fresh copy of Laravel 9 and cleaning it up. The following process also applies to *new* template or theme-based websites.

---

## Getting Started

I first installed a fresh copy of Laravel and Streams to get started. 

```bash
# Create a new Laravel project
composer create laravel/laravel ryanthepyro.com

cd ryanthepyro.com

# Install Streams
composer require streams/core:2.0.x-dev
```

---

### Streams Migration

I copied and pasted the `/streams` directory to move my stream definitions and file-based data.

```bash
cp -r ../ryanthepyro.com.bak/streams ./
```

---

[https://github.com/RyanThompson/ryanthepyro.com/tree/master/streams](https://github.com/RyanThompson/ryanthepyro.com/tree/master/streams)


---

This website does not use any SQL or non-file-based databases, so that is all that is needed for migrating content.

---

### Migrating Templates

I used Blade templates to slice up an HTML theme I purchased. So, I copied and pasted the `/resources/views` directory to migrate them from my old build. They still need more slicing and organization, which I will share later.

```bash
cp -r ../ryanthepyro.com.bak/resources/views/* ./resources/views
```

---

[https://github.com/RyanThompson/ryanthepyro.com/tree/master/resources/views](https://github.com/RyanThompson/ryanthepyro.com/tree/resources/views)

The [post](https://github.com/RyanThompson/ryanthepyro.com/blob/master/resources/views/post.blade.php) and [welcome](https://github.com/RyanThompson/ryanthepyro.com/blob/master/resources/views/welcome.blade.php)  Blade templates are the main entry points to the view layer for this website. Each extends the `default` layout, which includes various common [partials](https://github.com/RyanThompson/ryanthepyro.com/tree/master/resources/views/partials). 

### Migrating Images

I keep images in resources, so I need to copy those over as well:

```bash
cp -r ../ryanthepyro.com.bak/resources/img ./resources
```

---

[https://github.com/RyanThompson/ryanthepyro.com/tree/master/resources/img](https://github.com/RyanThompson/ryanthepyro.com/tree/master/resources/img)

---

### Integrating with Vite

This website comes with some baggage to sort through, which I had to copy over first:

```bash
cp -r ../ryanthepyro.com.bak/public/assets ./public
```

---

[https://github.com/RyanThompson/ryanthepyro.com/tree/master/public](https://github.com/RyanThompson/ryanthepyro.com/tree/master/public)

---

Laravel comes with a basic Vite configuration. In my case, I just opened `/resources/css/app.css` and dumped the un-minified contents of `/assets/css/app.css` into it and commented out the original inclusion of it.

```blade
// resources/views/partials/head.blade.php
{!! Assets::style('/assets/css/vendor/bootstrap.min.css') !!}
{!! Assets::style('/assets/css/vendor/fontawesome.css') !!}
{!! Assets::style('/assets/css/vendor/lightbox.css') !!}
{!! Assets::style('/assets/css/plugins/plugins.css') !!}
{{-- {!! Assets::style('/assets/css/style.min.css') !!} --}}
```

---

I import the CSS in `resources/js/app.js` and include the resulting file with the `vite` directive:

```blade
// resources/views/partials/assets.blade.php
@verbatim@vite(['resources/js/app.js'])@endverbatim
```

---


### Running the Website

I could now locally serve the website, and that is mission accomplished. I will organize and optimize everything next, and it will be ready for the long haul. 

```bash
npm run build
php artisan serve
```
