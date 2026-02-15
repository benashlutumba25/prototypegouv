<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
        <style>
            /* Custom Sidebar Styles for Government Theme */
            .gov-sidebar {
                /* Light Mode: Keep Blue Government Theme */
                background: linear-gradient(180deg, #1e40af 0%, #1d4ed8 50%, #2563eb 100%);
                box-shadow: 2px 0 10px rgba(29, 78, 216, 0.15);
                border-right: none;
            }

            /* Dark Mode: Switch to Black/Dark Background */
            .dark .gov-sidebar {
                background: #18181b; /* zinc-900 */
                background-image: none;
                box-shadow: 2px 0 10px rgba(0, 0, 0, 0.5);
                border-right: 1px solid #27272a; /* zinc-800 */
            }
            
            .gov-sidebar-header {
                background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 100%);
                border-bottom: 2px solid rgba(255, 255, 255, 0.1);
            }

            .dark .gov-sidebar-header {
                background: #18181b;
                background-image: none;
                border-bottom: 1px solid #27272a;
            }
            
            .gov-menu-item {
                transition: all 0.3s ease;
                border-left: 3px solid transparent;
            }
            
            .gov-menu-item:hover {
                background: rgba(255, 255, 255, 0.1);
                border-left-color: #60a5fa;
                transform: translateX(5px);
            }
            
            .gov-menu-item.active {
                background: linear-gradient(90deg, rgba(96, 165, 250, 0.3) 0%, rgba(59, 130, 246, 0.1) 100%);
                border-left-color: #93c5fd;
                font-weight: 600;
            }
            
            .gov-menu-icon {
                transition: transform 0.3s ease;
            }
            
            .gov-menu-item:hover .gov-menu-icon {
                transform: scale(1.1);
            }
            
            .gov-user-section {
                background: linear-gradient(135deg, rgba(30, 64, 175, 0.5) 0%, rgba(29, 78, 216, 0.3) 100%);
                border-top: 2px solid rgba(255, 255, 255, 0.1);
            }
        </style>
    </head>
    <body class="min-h-screen">
        <!-- Custom Government-Themed Sidebar -->
        <div class="flex min-h-screen">
            <!-- Sidebar -->
            <aside class="gov-sidebar w-64 fixed h-screen flex flex-col">
                
                <!-- Header with Logo -->
                <div class="gov-sidebar-header p-6 ">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3" wire:navigate>
                        <div class="h-12 w-12 rounded-lg bg-white backdrop-blur-sm flex items-center justify-center">
                            <img src="{{asset('50.png')}}" alt="logo" class="w-60 h-20"  style="border-radius: 50%;" >
                        </div>
                        <div class="flex-1">
                            <h1 class="text-white font-bold text-lg">E-Gouv RDC</h1>
                            <p class="text-blue-200 text-xs">Système d'authentification</p>
                        </div>
                    </a>
                </div>

                <!-- Navigation -->
                <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                    <!-- Platform Section -->
                    <div class="mb-6">
                        <p class="text-blue-200 text-xs font-semibold uppercase tracking-wider mb-3 px-3">
                            Plateforme
                        </p>
                        
                        <!-- Dashboard -->
                        <a href="{{ route('dashboard') }}" 
                           class="gov-menu-item flex items-center gap-3 px-3 py-3 rounded-lg text-white {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                           wire:navigate>
                            <svg class="gov-menu-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span class="font-medium">Dashboard</span>
                        </a>

                        <!-- Accueil / New Document -->
                        <a href="{{ route('accueil') }}" 
                           class="gov-menu-item flex items-center gap-3 px-3 py-3 rounded-lg text-white {{ request()->routeIs('accueil') ? 'active' : '' }}"
                           wire:navigate>
                            <svg class="gov-menu-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <span class="font-medium">Nouveau Document</span>
                        </a>

                        <!-- Documents -->
                        <a href="#" 
                           class="gov-menu-item flex items-center gap-3 px-3 py-3 rounded-lg text-white"
                           wire:navigate>
                            <svg class="gov-menu-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                            </svg>
                            <span class="font-medium">Mes Documents</span>
                        </a>

                        <!-- Statistics -->
                        <a href="#" 
                           class="gov-menu-item flex items-center gap-3 px-3 py-3 rounded-lg text-white"
                           wire:navigate>
                            <svg class="gov-menu-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            <span class="font-medium">Statistiques</span>
                        </a>
                    </div>

                    <!-- Resources Section -->
                    <div>
                        <p class="text-blue-200 text-xs font-semibold uppercase tracking-wider mb-3 px-3">
                            Ressources
                        </p>
                        
                        <!-- Settings -->
                        <a href="{{ route('profile.edit') }}" 
                           class="gov-menu-item flex items-center gap-3 px-3 py-3 rounded-lg text-white"
                           wire:navigate>
                            <svg class="gov-menu-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="font-medium">Paramètres</span>
                        </a>

                        <!-- Documentation -->
                        <a href="https://laravel.com/docs" 
                           target="_blank"
                           class="gov-menu-item flex items-center gap-3 px-3 py-3 rounded-lg text-white">
                            <svg class="gov-menu-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            <span class="font-medium">Documentation</span>
                        </a>

                        <!-- Theme Toggle -->
                        <button onclick="toggleTheme()" 
                           class="gov-menu-item flex items-center gap-3 px-3 py-3 rounded-lg text-white w-full">
                            <svg id="theme-icon-sun" class="gov-menu-icon w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                            <svg id="theme-icon-moon" class="gov-menu-icon w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                            </svg>
                            <span class="font-medium" id="theme-text">Mode sombre</span>
                        </button>
                    </div>
                </nav>

                <!-- User Profile Section -->
                <div class="gov-user-section p-4">
                    <div class="flex items-center gap-3 p-3 rounded-lg bg-white/5 backdrop-blur-sm">
                        <div class="h-10 w-10 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center text-white font-bold">
                            {{ auth()->user()->initials() }}
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-white font-medium text-sm truncate">{{ auth()->user()->name }}</p>
                            <p class="text-blue-200 text-xs truncate">{{ auth()->user()->email }}</p>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-blue-200 hover:text-white transition-colors" title="Déconnexion">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </aside>

            <!-- Main Content Area -->
            <main class="flex-1 ml-64">
                <!-- Mobile Header -->
                <flux:header class="lg:hidden">
                    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
                    <flux:spacer />
                    <flux:dropdown position="top" align="end">
                        <flux:profile
                            :initials="auth()->user()->initials()"
                            icon-trailing="chevron-down"
                        />
                        <flux:menu>
                            <flux:menu.radio.group>
                                <div class="p-0 text-sm font-normal">
                                    <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                        <flux:avatar
                                            :name="auth()->user()->name"
                                            :initials="auth()->user()->initials()"
                                        />
                                        <div class="grid flex-1 text-start text-sm leading-tight">
                                            <flux:heading class="truncate">{{ auth()->user()->name }}</flux:heading>
                                            <flux:text class="truncate">{{ auth()->user()->email }}</flux:text>
                                        </div>
                                    </div>
                                </div>
                            </flux:menu.radio.group>
                            <flux:menu.separator />
                            <flux:menu.radio.group>
                                <flux:menu.item :href="route('profile.edit')" icon="cog" wire:navigate>
                                    {{ __('Settings') }}
                                </flux:menu.item>
                            </flux:menu.radio.group>
                            <flux:menu.separator />
                            <form method="POST" action="{{ route('logout') }}" class="w-full">
                                @csrf
                                <flux:menu.item
                                    as="button"
                                    type="submit"
                                    icon="arrow-right-start-on-rectangle"
                                    class="w-full cursor-pointer"
                                    data-test="logout-button"
                                >
                                    {{ __('Log Out') }}
                                </flux:menu.item>
                            </form>
                        </flux:menu>
                    </flux:dropdown>
                </flux:header>

                {{ $slot }}
            </main>
        </div>

        <script>
            // Theme management system
            function initTheme() {
                // Get stored theme or default to dark
                const savedTheme = localStorage.getItem('theme') || 'dark';
                applyTheme(savedTheme);
                updateThemeUI(savedTheme);
            }

            function toggleTheme() {
                const html = document.documentElement;
                const currentTheme = html.classList.contains('dark') ? 'dark' : 'light';
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
                
                applyTheme(newTheme);
                updateThemeUI(newTheme);
                localStorage.setItem('theme', newTheme);
            }

            function applyTheme(theme) {
                const html = document.documentElement;
                if (theme === 'dark') {
                    html.classList.add('dark');
                } else {
                    html.classList.remove('dark');
                }
            }

            function updateThemeUI(theme) {
                const sunIcon = document.getElementById('theme-icon-sun');
                const moonIcon = document.getElementById('theme-icon-moon');
                const themeText = document.getElementById('theme-text');

                if (theme === 'dark') {
                    // In dark mode, show sun icon (to switch to light)
                    if (sunIcon) sunIcon.classList.remove('hidden');
                    if (moonIcon) moonIcon.classList.add('hidden');
                    if (themeText) themeText.textContent = 'Mode clair';
                } else {
                    // In light mode, show moon icon (to switch to dark)
                    if (sunIcon) sunIcon.classList.add('hidden');
                    if (moonIcon) moonIcon.classList.remove('hidden');
                    if (themeText) themeText.textContent = 'Mode sombre';
                }
            }

            // Initialize theme on page load
            document.addEventListener('DOMContentLoaded', initTheme);
            
            // Also run immediately in case DOMContentLoaded already fired
            if (document.readyState === 'loading') {
                // Still loading, wait for DOMContentLoaded
            } else {
                // DOM is ready, run immediately
                initTheme();
            }
        </script>

        @fluxScripts
    </body>
</html>
