<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('admin.layouts.partials.head')
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>
    {{-- <div id="toaster"></div> --}}
    <div class="wrapper">
        {{-- @include('sweetalert::alert') --}}
        @include('admin.layouts.partials.left-sidebar')
        <div class="page-wrapper">
            @include('admin.layouts.partials.header')
            <div class="content-wrapper">
                <div class="content">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
            @include('admin.layouts.partials.footer')
            @include('admin.layouts.partials.scripts')
        </div>
    </div>
    @include('admin.layouts.partials.modals')
</body>

</html>
