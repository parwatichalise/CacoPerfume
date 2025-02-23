<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    @include('admin.includes.top')
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
        @include('Admin.includes.navbar')
        <div class="content-wrapper">
            <main>
                @yield('content')
            </main>
        </div>
        <footer>
            @include('Admin.includes.footer')
        </footer>
        @include('Admin.includes.bottom')
        @yield('scripts')
</body>

</html>
