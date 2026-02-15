<!DOCTYPE html>
<html lang="fr" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'E-gouv - République Démocratique du Congo' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="site-layout-bg text-gray-900">

    <!-- Government Header -->
    <header class="bg-white/95 backdrop-blur-md text-blue-900 shadow-lg sticky top-0 z-50 dark:bg-zinc-900/95 dark:text-white dark:border-b dark:border-zinc-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center gap-4 justify-between w-full">
                <!-- DRC Emblem SVG -->
               <img src="{{asset('50.png')}}" alt="logo" class="w-60 h-20"  style="border-radius: 50%;" >

                <!-- Button En savoir plus -->
                <a href="{{route('dashboard')}}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2.5 rounded-lg transition-all duration-300 ease-out transform hover:scale-105 shadow-md hover:shadow-lg dark:bg-blue-500 dark:hover:bg-blue-600">
                    Retour
                </a>
            </div>
        </div>
    </header>

    <main class="min-h-screen">
    @yield('content')
    </main>


  



<script>
    // Initialize theme from localStorage on page load
    (function() {
        const savedTheme = localStorage.getItem('theme') || 'dark';
        if (savedTheme === 'dark') {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    })();
</script>

</body>

</html>

