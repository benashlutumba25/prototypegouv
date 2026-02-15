<x-layouts::app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl p-6">
        
        <!-- Header Section -->
        <div class="mb-4">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white" style="font-family: var(--font-display);">
                Tableau de bord
            </h1>
            <p class="text-gray-600 dark:text-gray-400 mt-1">
                Vue d'ensemble de l'authentification des documents
            </p>
        </div>

        <!-- Statistics Cards -->
        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
            <!-- Card 1: Documents Today -->
            <div class="relative overflow-hidden rounded-xl border border-blue-200 bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900 dark:to-blue-800 p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-blue-600 dark:text-blue-300">Aujourd'hui</p>
                        <p class="text-3xl font-bold text-blue-900 dark:text-white mt-2">24</p>
                        <p class="text-xs text-blue-600 dark:text-blue-400 mt-1">Documents authentifiés</p>
                    </div>
                    <div class="h-16 w-16 rounded-full bg-blue-500/20 flex items-center justify-center">
                        <svg class="w-8 h-8 text-blue-600 dark:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-3 flex items-center text-xs">
                    <span class="text-green-600 dark:text-green-400 font-semibold">↗ +12%</span>
                    <span class="text-gray-600 dark:text-gray-400 ml-1">vs hier</span>
                </div>
            </div>

            <!-- Card 2: Pending -->
            <div class="relative overflow-hidden rounded-xl border border-yellow-200 bg-gradient-to-br from-yellow-50 to-yellow-100 dark:from-yellow-900 dark:to-yellow-800 p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-yellow-600 dark:text-yellow-300">En attente</p>
                        <p class="text-3xl font-bold text-yellow-900 dark:text-white mt-2">8</p>
                        <p class="text-xs text-yellow-600 dark:text-yellow-400 mt-1">Documents à traiter</p>
                    </div>
                    <div class="h-16 w-16 rounded-full bg-yellow-500/20 flex items-center justify-center">
                        <svg class="w-8 h-8 text-yellow-600 dark:text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-3 flex items-center text-xs">
                    <span class="text-yellow-600 dark:text-yellow-400 font-semibold">⏱ Urgent: 3</span>
                </div>
            </div>

            <!-- Card 3: Success Rate -->
            <div class="relative overflow-hidden rounded-xl border border-green-200 bg-gradient-to-br from-green-50 to-green-100 dark:from-green-900 dark:to-green-800 p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-green-600 dark:text-green-300">Taux de réussite</p>
                        <p class="text-3xl font-bold text-green-900 dark:text-white mt-2">94.5%</p>
                        <p class="text-xs text-green-600 dark:text-green-400 mt-1">Ce mois-ci</p>
                    </div>
                    <div class="h-16 w-16 rounded-full bg-green-500/20 flex items-center justify-center">
                        <svg class="w-8 h-8 text-green-600 dark:text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-3 flex items-center text-xs">
                    <span class="text-green-600 dark:text-green-400 font-semibold">↗ +2.3%</span>
                    <span class="text-gray-600 dark:text-gray-400 ml-1">vs mois dernier</span>
                </div>
            </div>

            <!-- Card 4: Total Month -->
            <div class="relative overflow-hidden rounded-xl border border-purple-200 bg-gradient-to-br from-purple-50 to-purple-100 dark:from-purple-900 dark:to-purple-800 p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-purple-600 dark:text-purple-300">Ce mois</p>
                        <p class="text-3xl font-bold text-purple-900 dark:text-white mt-2">487</p>
                        <p class="text-xs text-purple-600 dark:text-purple-400 mt-1">Documents traités</p>
                    </div>
                    <div class="h-16 w-16 rounded-full bg-purple-500/20 flex items-center justify-center">
                        <svg class="w-8 h-8 text-purple-600 dark:text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-3 flex items-center text-xs">
                    <span class="text-purple-600 dark:text-purple-400 font-semibold">📅 15 jours restants</span>
                </div>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid gap-4 lg:grid-cols-2">
            
            <!-- Recent Documents Table -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 shadow-lg">
                <div class="p-6 border-b border-neutral-200 dark:border-neutral-700 bg-gradient-to-r from-blue-50 to-white dark:from-blue-900 dark:to-neutral-800">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white flex items-center gap-2">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Documents récents
                    </h2>
                </div>
                <div class="p-6">
                    <div class="space-y-3">
                        <!-- Document Item 1 -->
                        <div class="flex items-center justify-between p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-neutral-700 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-lg bg-blue-100 dark:bg-blue-900 flex items-center justify-center">
                                    <span class="text-blue-600 dark:text-blue-300 font-bold text-sm">PDF</span>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white text-sm">Diplôme_Universitaire.pdf</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Il y a 5 minutes</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-300">
                                ✓ Validé
                            </span>
                        </div>

                        <!-- Document Item 2 -->
                        <div class="flex items-center justify-between p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-neutral-700 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-lg bg-yellow-100 dark:bg-yellow-900 flex items-center justify-center">
                                    <span class="text-yellow-600 dark:text-yellow-300 font-bold text-sm">JPG</span>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white text-sm">Acte_Naissance_2024.jpg</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Il y a 12 minutes</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-700 dark:bg-yellow-900 dark:text-yellow-300">
                                ⏳ En cours
                            </span>
                        </div>

                        <!-- Document Item 3 -->
                        <div class="flex items-center justify-between p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-neutral-700 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-lg bg-blue-100 dark:bg-blue-900 flex items-center justify-center">
                                    <span class="text-blue-600 dark:text-blue-300 font-bold text-sm">PDF</span>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white text-sm">Attestation_Travail.pdf</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Il y a 25 minutes</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-300">
                                ✓ Validé
                            </span>
                        </div>

                        <!-- Document Item 4 -->
                        <div class="flex items-center justify-between p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-neutral-700 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-lg bg-red-100 dark:bg-red-900 flex items-center justify-center">
                                    <span class="text-red-600 dark:text-red-300 font-bold text-sm">PNG</span>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white text-sm">Certificat_Medical.png</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Il y a 1 heure</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-300">
                                ✗ Rejeté
                            </span>
                        </div>

                        <!-- Document Item 5 -->
                        <div class="flex items-center justify-between p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-neutral-700 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-lg bg-blue-100 dark:bg-blue-900 flex items-center justify-center">
                                    <span class="text-blue-600 dark:text-blue-300 font-bold text-sm">PDF</span>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white text-sm">Carte_Identite.pdf</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Il y a 2 heures</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-300">
                                ✓ Validé
                            </span>
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <a href="#" class="text-sm font-semibold text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">
                            Voir tous les documents →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Quick Actions & Charts -->
            <div class="space-y-4">
                
                <!-- Quick Actions -->
                <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 shadow-lg p-6">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Accès rapides
                    </h2>
                    <div class="grid grid-cols-2 gap-3">
                        <a href="{{ route('accueil') }}" class="group flex flex-col items-center justify-center p-4 rounded-lg border-2 border-blue-200 bg-gradient-to-br from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 dark:from-blue-900 dark:to-blue-800 transition-all duration-300 hover:scale-105 hover:shadow-lg">
                            <svg class="w-10 h-10 text-blue-600 dark:text-blue-300 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            <span class="text-sm font-semibold text-blue-700 dark:text-blue-300">Nouveau document</span>
                        </a>

                        <button class="group flex flex-col items-center justify-center p-4 rounded-lg border-2 border-purple-200 bg-gradient-to-br from-purple-50 to-purple-100 hover:from-purple-100 hover:to-purple-200 dark:from-purple-900 dark:to-purple-800 transition-all duration-300 hover:scale-105 hover:shadow-lg">
                            <svg class="w-10 h-10 text-purple-600 dark:text-purple-300 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                            </svg>
                            <span class="text-sm font-semibold text-purple-700 dark:text-purple-300">Archives</span>
                        </button>

                        <button class="group flex flex-col items-center justify-center p-4 rounded-lg border-2 border-green-200 bg-gradient-to-br from-green-50 to-green-100 hover:from-green-100 hover:to-green-200 dark:from-green-900 dark:to-green-800 transition-all duration-300 hover:scale-105 hover:shadow-lg">
                            <svg class="w-10 h-10 text-green-600 dark:text-green-300 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            <span class="text-sm font-semibold text-green-700 dark:text-green-300">Statistiques</span>
                        </button>

                        <button class="group flex flex-col items-center justify-center p-4 rounded-lg border-2 border-orange-200 bg-gradient-to-br from-orange-50 to-orange-100 hover:from-orange-100 hover:to-orange-200 dark:from-orange-900 dark:to-orange-800 transition-all duration-300 hover:scale-105 hover:shadow-lg">
                            <svg class="w-10 h-10 text-orange-600 dark:text-orange-300 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                            </svg>
                            <span class="text-sm font-semibold text-orange-700 dark:text-orange-300">Paramètres</span>
                        </button>
                    </div>
                </div>

                <!-- Document Types Chart -->
                <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 shadow-lg p-6">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                        </svg>
                        Répartition par type
                    </h2>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-blue-500"></div>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Diplômes</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-32 h-2 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-blue-500 rounded-full" style="width: 35%"></div>
                                </div>
                                <span class="text-sm font-semibold text-gray-900 dark:text-white w-10 text-right">35%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Actes naissance</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-32 h-2 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-green-500 rounded-full" style="width: 28%"></div>
                                </div>
                                <span class="text-sm font-semibold text-gray-900 dark:text-white w-10 text-right">28%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-purple-500"></div>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Attestations</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-32 h-2 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-purple-500 rounded-full" style="width: 22%"></div>
                                </div>
                                <span class="text-sm font-semibold text-gray-900 dark:text-white w-10 text-right">22%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Autres</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-32 h-2 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-yellow-500 rounded-full" style="width: 15%"></div>
                                </div>
                                <span class="text-sm font-semibold text-gray-900 dark:text-white w-10 text-right">15%</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</x-layouts::app>
