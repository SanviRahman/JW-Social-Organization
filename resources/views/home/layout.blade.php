<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="style.css">
    <!-- Google Fonts for Bengali -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
     @stack('styles')
</head>
<body>
    <!-- Navigation -->
   @include('partials.nav')


    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    @include('partials.footer')


    @stack('scripts')
</body>
</html>
