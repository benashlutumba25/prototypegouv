<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="site-layout-bg min-h-screen antialiased dark:bg-zinc-950">
        <div class="flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
            <div class="flex w-full max-w-md flex-col gap-6 p-8 rounded-2xl bg-white/90 backdrop-blur-md shadow-2xl dark:bg-zinc-900/90 dark:border dark:border-zinc-800">
                <a href="{{ route('accueil') }}" class="flex flex-col items-center gap-4 font-medium" wire:navigate>
                    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-white shadow-md p-1">
                        <img src="{{ asset('50.png') }}" alt="Emblème RDC" class="w-full h-full object-contain rounded-full">
                    </div>
                    <div class="text-center">
                        <h1 class="text-xl font-bold text-blue-900 dark:text-white" style="font-family: var(--font-display);">République Démocratique du Congo</h1>
                        <p class="text-sm text-blue-600 dark:text-blue-400 font-medium">Ministère de la Fonction Publique</p>
                    </div>
                </a>
                
                <div class="flex flex-col gap-6">
                    {{ $slot }}
                </div>
            </div>
            
            <div class="text-center text-sm text-white/80 dark:text-zinc-500">
                &copy; {{ date('Y') }} E-Gouv RDC. Tous droits réservés.
            </div>
        </div>

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
        @fluxScripts
    </body>
</html>
