@extends('layouts.themes.main')
@section('content')
    @include('layouts.partials.alerts')
    {{-- {{ siteHit() }} --}}
    @include('main.carousel')
    {{-- @include('main.banner') --}}
    {{-- @include('main.about') --}}
    @include('main.events')
    {{-- @include('main.news')
    @include('main.campus-tour')
    @include('main.college')
    @include('main.testimonials') --}}

    {{-- @include('main.features')
    @include('main.factcounter')
    @include('main.colleges')
    @include('main.gallery')
    @include('main.presidentsreport')
    @include('main.campusmap')
    @include('main.news') --}}
@endsection