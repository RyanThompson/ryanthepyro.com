@extends('layouts.default')

@section('content')
@include('pages/post/header')
@include('pages/post/breadcrumb')

<main class="page-wrapper">
    @include('pages/post/detail')
    @include('pages/post/disqus')
</main>

@include('pages/post/contact')
@include('partials/footer')
@endsection
