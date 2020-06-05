<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('partials/head')
</head>

<body>
    <div class="main-page">
        
        @include('partials/header')
        
        @include('pages/post/breadcrumb')

        <!-- Start Page Wrapper  -->
        <main class="page-wrapper">

            @include('pages/post/detail')

        </main>
        
        @include('partials/cta')
        @include('partials/footer')

    </div>

    @include('partials/assets')

</body>

</html>
