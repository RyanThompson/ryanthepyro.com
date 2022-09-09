---
title: Laravel Streams + PyroCMS 4
subtitle: News
created_at: 2022/01/23
updated_at: 2022/01/23
enabled: true
poster: resources::img/pyro_cms_facebook_cover.jpg
caption: PyroCMS 4 Pattern
---

It has been a long time, and there is a lot to talk about, so let's get into it!

### The Status of PyroCMS

PyroCMS development has been experiencing a considerable lull of new development. Why is this? A full-time job that wasn't embracing Pyro, for one. Large amounts of technical debt and overhead, for another. A lack of addon marketplace and poor community tools doesn't help either. So it was hard to find and put in the extra time to push it forward.

Despite this, I am happy to say that PyroCMS is robust, secure, extensible, mature, and has a polished, flexible, and fast approach to modeling websites with pages, grids or blocks, and of course, Streams. Numerous developer careers and businesses have been built on it and are thriving. And I intend on maintaining v3 for the foreseeable future as it serves many loyal and loving customers, developers, agencies, and clients who love using it.

### Laravel Streams

Almost two years ago, I made it my mission to dig into PyroCMS and either kill it or carve out and realize my vision. In my mind, I had to resolve everything on my list to continue:

- Utilitarian
- No installer
- No compiling
- Easier to extend
- Easier to customize
- Incredible performance
- Purist Laravel integration
- Minimal technical overhead
- Easy to approach, use and learn
- It had to functionally replace PyroCMS

After almost a year of exploration, chopping, and development, Laravel Streams revealed itself and is now nearing a release candidate. TL;DR; https://streams.dev

Laravel Streams is utility-first and focuses on your data structure. It is flat-file first, though it supports any data storage strategy, and you can move between storage strategies without refactoring your code. The minimum effective effort requires simply describing the data structure you want using JSON Stream definitions, and that's it. There are no installers. There is no compiling and no kidnapping of Laravel services. There is no standard database requirement. Everything is customizable and extensible, uses Blade for templating, and all the significant components are decoupled as Laravel packages. As a result, Laravel Streams can model and provide UI for *anything* and is a valuable tool for all kinds of work.



- **Streams Core** provides the basis of the data modeling and application engine, multi-tenancy, and primary asset pipeline. 
- **Streams API** provides an extensible universal hypermedia interface to your configured Streams data. A native [JavaScript API client](https://streams.dev/docs/api/client) NPM package is also available.
- **Streams UI** provides extensible, and framework agnostic user interface and control panel utilities.
- **Streams CLI** provides an Artisan API for interacting with your application. 
- **Streams Dev** provides tooling, automation, schema generators, typescript generators, and more.

If you are interested in learning more about this new project, please visit https://streams.dev.

### PyroCMS 4

PyroCMS will begin moving towards Laravel Streams, and v4 will mark a complete switch to the new architecture. Meanwhile, the v3 branch will receive a UI update using Tailwind and start including optional Laravel Streams features since they can run side by side.

This website and documentation will be eventually moved and redirected to a PyroCMS marketplace listing at streams.dev as a Laravel Streams product. 

### Full Steam Ahead

It has been a long time coming, but everything has been coming into focus and alignment for a righteous comeback. Last year, I left my job to focus on these projects and pursue client work full-time under a new parent company, the Fundamental Syndicate (LLC). We work extensively in Laravel, PyroCMS, and now Streams projects in the shape of websites, multi-platform applications, API backends and specialize in bringing order to large complex projects. 

### Next Steps

The first and immediate priority is to [version the Streams Core and Streams API packages](https://github.com/laravel-streams/streams/issues?q=is%3Aopen+is%3Aissue+project%3Alaravel-streams%2Fstreams%2F5+project%3Alaravel-streams%2Fstreams%2F4). A Tailwind UI update for PyroCMS 3, which will carry into v4, and preparing the v3 branch for incoming Laravel Streams support are also a priority. 

The Streams UI, CLI, and Dev packages will be versioned next, and we will bring the Git-powered marketplace online along with user accounts at streams.dev. 

PyroCMS 4 will have all of the constituent parts necessary to enter the release cycle itself by this time. In addition, we will have already released minor versions on the v3 branch to begin Streams integration which will increase performance and introduce flat-file and Blade support. 
