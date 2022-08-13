<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{ config('app.name') }}</title>
<meta name="robots" content="noindex, follow" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="cf-2fa-verify" content="8163934abbecfcd">

<!-- Favicon -->
{{-- {!! favicons('public::img/favicon.png') !!} --}}

<!-- CSS -->
{!! Assets::style('/assets/css/vendor/bootstrap.min.css') !!}
{!! Assets::style('/assets/css/vendor/fontawesome.css') !!}
{!! Assets::style('/assets/css/vendor/lightbox.css') !!}
{!! Assets::style('/assets/css/plugins/plugins.css') !!}
{{-- {!! Assets::style('/assets/css/style.min.css') !!} --}}

@vite(['resources/css/app.css'])

@if (App::environment() == 'production')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83887620-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-83887620-1');
</script>
@endif
