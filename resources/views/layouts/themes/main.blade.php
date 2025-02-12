<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('layouts.partials.head')
</head>

<body>
    <!-- preloader start -->
    <div class="preloader">
        <img src="{{ asset('images/new-preloader-white.gif') }}" alt="preloader">
    </div>
    <!-- preloader end -->
    @if (session('alert'))
        <div class="alert alert-danger">
            {{ session('alert') }}
        </div>
    @endif
    <div class="body-inner">
        {{-- @include('sweetalert::alert') --}}
        @include('layouts.partials.header')
        @yield('content')
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </div>
    @include('layouts.partials.modals')
</body>

</html>
