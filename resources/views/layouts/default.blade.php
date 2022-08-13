<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('partials/head')
</head>

<body class="position-relative spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="150"">
    <div class="main-page">
        @yield('content')
    </div>

    @include('partials/assets')

</body>

</html>
