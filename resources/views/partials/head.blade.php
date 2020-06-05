<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{ config('app.name') }}</title>
<meta name="robots" content="noindex, follow" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Favicon -->
{!! favicons('public::assets/images/favicon.png') !!}

<!-- CSS -->
{!! assets()->style('public::assets/css/vendor/bootstrap.min.css') !!}
{!! assets()->style('public::assets/css/vendor/fontawesome.css') !!}
{!! assets()->style('public::assets/css/vendor/lightbox.css') !!}
{!! assets()->style('public::assets/css/plugins/plugins.css') !!}
{!! assets()->style('public::assets/css/style.css') !!}
