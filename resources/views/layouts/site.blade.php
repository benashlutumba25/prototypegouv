<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'E-gouv - République Démocratique du Congo' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-900">

    <!-- Government Header -->
    <header class="bg-blue-700 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center gap-4">
                <!-- DRC Emblem SVG -->
                <div class="flex-shrink-0">
                    <svg width="60" height="60" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Shield Background -->
                        <path d="M50 10 L80 20 L80 50 Q80 75 50 90 Q20 75 20 50 L20 20 Z" fill="#FFD700" stroke="#B8860B" stroke-width="2"/>
                        
                        <!-- Leopard Head (stylized) -->
                        <circle cx="50" cy="45" r="12" fill="#8B4513"/>
                        <circle cx="46" cy="42" r="2" fill="#FFF"/>
                        <circle cx="54" cy="42" r="2" fill="#FFF"/>
                        <path d="M45 48 Q50 51 55 48" stroke="#8B4513" stroke-width="2" fill="none" stroke-linecap="round"/>
                        
                        <!-- Spear and Tusk (crossed) -->
                        <line x1="35" y1="35" x2="45" y2="65" stroke="#8B4513" stroke-width="2.5"/>
                        <line x1="65" y1="35" x2="55" y2="65" stroke="#DEB887" stroke-width="2.5"/>
                        
                        <!-- Decorative stars -->
                        <path d="M50 25 L51 28 L54 28 L52 30 L53 33 L50 31 L47 33 L48 30 L46 28 L49 28 Z" fill="#FFD700"/>
                        
                        <!-- Motto Banner -->
                        <rect x="25" y="75" width="50" height="8" fill="#1e40af" rx="2"/>
                        <text x="50" y="81" font-size="4" fill="#FFD700" text-anchor="middle" font-family="Arial, sans-serif" font-weight="bold">JUSTICE·PAIX·TRAVAIL</text>
                    </svg>
                </div>

                <!-- Ministry Information -->
                <div class="flex-1">
                    <h1 class="text-xl md:text-2xl font-bold" style="font-family: var(--font-display);">
                        République Démocratique du Congo
                    </h1>
                    <p class="text-sm md:text-base text-blue-100 mt-1" style="font-family: var(--font-body);">
                        Ministère de la Fonction Publique, Modernisation de l'Administration et Innovation du Service Public
                    </p>
                </div>
            </div>
        </div>
    </header>

    <main class="min-h-screen">
    @yield('content')
    </main>


  


</body>

</html>

