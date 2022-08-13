@extends('layouts.default')

@section('content')
<div class="main-page active-light">
        
    @include('partials/header')

    <!-- Start Page Wrapper  -->
    <main class="page-wrapper">
        
        @include('pages/home/hero')

        @include('pages/home/about')
        {{-- @include('pages/home/services') --}}
        {{-- @include('pages/home/projects') --}}
        @include('pages/home/blog')
        @include('pages/home/contact')

    </main>
    <!-- End Page Wrapper  -->
    
    @include('partials/footer')

</div>
@endsection
