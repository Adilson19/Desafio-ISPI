<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('assets/css/style.css') }}" data-template="vertical-menu-template-free">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/js/script.js') }}"></script>
</head>
<body>
    <div class="container">
        <aside>
            <div>
                @include('includes.header')
                </div>
            </aside>
        <section>
            <div>
                @include('includes.footer')
            </div>
        </section>
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>
