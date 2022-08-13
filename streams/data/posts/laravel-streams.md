---
title: Laravel Streams
subtitle: Introduction
created_at: 2022/08/02
updated_at: 2022/08/03
enabled: true
poster: resources::img/bean-sprouts.jpg
caption: Three beans sprouting
---

## {{ $entry->subtitle }}

[Laravel Streams](https://streams.dev/docs) is a project I have been working on to supersede [PyroCMS](https://pyrocms.com). It is a loosely coupled full-stack application framework that provides an optimized foundation and workflow for Laravel development.

### Goals of the Project

Laravel Streams stays out of your way and presents all features as service-level tools. Our goal is to enhance, support, and streamline your application and workflow, not dictate it.

My vision is the most performant, accessible, and flexible application stack imaginable. To magnify the potential of individual developers of all skill levels and to provide teams with a go-to stack for delivering rock-solid products quickly and consistently.

### Status & Roadmap

This project is thoroughly tested and mostly feature complete, but currently still in development. Priority right now is "kicking the tires" and documentation.

- **Streams Core** is alpha.
- **Streams API** is alpha.
- **Streams UI** is pre-alpha.

---

Once the above foundations are closer to release, the focus will shift towards:

- The repository marketplace
- The `streams/dev` companion

---

If you would like to get involved, please consider:

- Installing the below packages and diving in!
- Submitting [bug fixes, suggestions, and code](https://github.com/laravel-streams/streams/issues)
- [Sponsoring my projects](https://github.com/sponsors/RyanThompson)

---

## Streams Core

[Streams Core](https://github.com/laravel-streams/streams-core) is the one package where it all starts. It contains the data-modeling engine, core field types, and a handful of fundamental tools and services for most projects.

- Data Modeling
- Asset Pipelines
- Support Utilities
- Extreme Extensibility

---

Streams Core is ready to leverage any supported Laravel database and various file-based formats and strategies, including markdown files, CSV files, and JSON data. In addition, the `source adapter interface` can be used to extend and support any data source with MongoDB ready via an additional package.

Below is the stream describing this simple blog:

```json
{
    "config": {
        "source": {
            "format": "md"
        }
    },
    "routes": [
        {
            "handle": "view",
            "uri": "post/{id}",
            "view": "post"
        }
    ],
    "fields": [
        {
            "handle": "id",
            "type": "slug",
            "rules": [
                "required"
            ]
        },
        {
            "handle": "title",
            "type": "string",
            "rules": [
                "required",
                "max:50"
            ]
        },
        {
            "handle": "subtitle",
            "type": "string"
        },
        {
            "handle": "created_at",
            "type": "date",
            "config": {
                "default": "now"
            }
        },
        {
            "handle": "updated_at",
            "type": "date"
        },
        {
            "handle": "enabled",
            "type": "boolean",
            "config": {
                "default": false
            }
        },
        {
            "handle": "poster",
            "type": "image"
        },
        {
            "handle": "caption",
            "type": "string"
        },
        {
            "handle": "body",
            "type": "markdown"
        }
    ]
}
```

---

The `post.blade.php` template then contains:

```html
<article>
    @{!! Str::markdown(View::parse($entry->body, [
        'entry' => $entry,
    ])) !!}
</article>
```

---

If you like, you may install it with [Composer](https://getcomposer.org/):

```bash
composer require streams/core:2.0.x-dev
```

---

Please visit the [documentation](https://streams.dev/docs/core/introduction) to read more about what Streams Core can do.

## Streams API

[Streams API](https://github.com/laravel-streams/streams-api) is an optional package that provides a robust RESTful API for stream-configured data. 

- Access Control
- CRUD Operations
- Cache Automation
- Native JS Client
- Easily Extendible

---

Likewise, you may install it with [Composer](https://getcomposer.org/):

```bash
composer require streams/api:1.0.x-dev
```

---

Please visit the [documentation](https://streams.dev/docs/api/introduction) to read more about what Streams API can do.


## Streams UI

[Streams UI](https://github.com/laravel-streams/streams-ui) is an optional package that provides a cohesive but decoupled collection of components and utilities for all UI needs and control panels.

- Blade Components
- Code Configurable
- Reactive Components
- Control Panel Utilities
- Highly Extensible
- Easily Themeable

---

Streams UI defaults to using CSS3 variables, Tailwind CSS, Alpine JS, and a Livewire-like component coupling. However, you can also bring your choice of a stack and leverage the available components.

Similarly, you may install it with [Composer](https://getcomposer.org/):

```bash
composer require streams/ui:1.0.x-dev
```

---

Please visit the [documentation](https://streams.dev/docs/ui/introduction) to read more about what Streams UI can do.
