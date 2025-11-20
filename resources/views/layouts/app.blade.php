<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Indonesian Vanilla Beans Export - Vanilla Planifolia, Vanilla Tahitensis, and Vanilla Derivatives">
    <title>@yield('title', 'Premium Indonesian Vanilla Export | Vanilla Beans & Derivatives')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;600&family=Roboto:wght@400;500;600&family=Oswald:wght@600&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS (use relative path to avoid scheme issues) -->
    <link rel="stylesheet" href="/css/style.css">
    
    @stack('styles')
</head>
<body>
    <!-- Header -->
    @include('layouts.partials.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.partials.footer')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    @stack('scripts')
</body>
</html>
