<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tea House - Tea Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

@include('Frontend.includes.top')
@yield('head')

</head>
<body>
    @include('Frontend.includes.navbar')
    <main >
        @yield('content')
    </main>
    <footer>
    @include('Frontend.includes.footer')
    </footer>
    @include('Frontend.includes.bottom')
    @yield('scripts')
</body>

</html>