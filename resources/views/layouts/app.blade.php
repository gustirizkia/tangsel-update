<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'Tangsel Update')
    </title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="TANGSEL UPDATE" />
    <meta name="description"
        content="Tangsel Update
Platform portal berita yang menghadirkan informasi terkini dan terpercaya untuk masyarakat Tangerang Selatan." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:title" content="TANGSEL UPDATE" />
    <meta property="og:description"
        content="Tangsel Update
Platform portal berita yang menghadirkan informasi terkini dan terpercaya untuk masyarakat Tangerang Selatan." />
    <meta property="og:image" content="{{ asset('assets/images/logo.jpg') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ url('/') }}" />
    <meta property="twitter:title" content="TANGSEL UPDATE" />
    <meta property="twitter:description"
        content="Tangsel Update
Platform portal berita yang menghadirkan informasi terkini dan terpercaya untuk masyarakat Tangerang Selatan." />
    <meta property="twitter:image" content="{{ asset('assets/images/logo.jpg') }}" />

    <!-- Meta Tags Generated with https://metatags.io -->

    @stack('head_tag')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('addStyle')
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
</head>

<body class="font-poppins">
    <x-navbar />
    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('components.footer')
    @stack('addScript')
</body>

</html>
