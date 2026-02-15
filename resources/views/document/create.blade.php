@extends('layouts.site')

@section('content')
<div class="max-w-5xl mx-auto py-12 px-4 sm:px-6 lg:px-8">

    <!-- Titre avec animation -->
    <div class="mb-8 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4" style="font-family: var(--font-display); text-shadow: 0 2px 20px rgba(0,0,0,0.2);">
            Authentification de Documents
        </h1>
        <p class="text-lg text-white/90 max-w-2xl mx-auto" style="font-family: var(--font-body);">
            Soumettez vos documents officiels pour une analyse automatique et une transmission sécurisée au service central
        </p>
    </div>

    <!-- Loader Overlay -->
    <div id="loadingOverlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50" style="display: none;">
        <div class="bg-white rounded-2xl p-8 shadow-2xl flex flex-col items-center gap-4 animate-fadeInUp">
            <!-- Spinner -->
            <div class="relative">
                <div class="w-16 h-16 border-4 border-blue-200 rounded-full"></div>
                <div class="w-16 h-16 border-4 border-blue-600 rounded-full border-t-transparent animate-spin absolute top-0"></div>
            </div>
            <div class="text-center">
                <p class="text-lg font-semibold text-gray-800">Traitement en cours...</p>
                <p class="text-sm text-gray-600 mt-1">Veuillez patienter pendant l'authentification du document</p>
            </div>
        </div>
    </div>

    <!-- Carte formulaire avec glassmorphism -->
    <div class="glass-card gradient-border p-8 md:p-10">

        <form id="documentForm" method="POST" action="#" enctype="multipart/form-data" class="space-y-8" onsubmit="showLoader(event)">
            @csrf

            <!-- SECTION : Informations du document -->
            <div>
                <h2 class="section-heading text-2xl mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Informations du document
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Type de document -->
                    <div>
                        <label class="modern-label">
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h6a1 1 0 100-2H7zm0 4a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                </svg>
                                Type de document
                            </span>
                        </label>
                        <select name="type" class="modern-select" required>
                            <option value="">-- Sélectionner un type --</option>
                            <option value="naissance">📄 Acte de naissance</option>
                            <option value="diplome">🎓 Diplôme</option>
                            <option value="attestation">📋 Attestation</option>
                            <option value="certificat">🏆 Certificat</option>
                        </select>
                    </div>

                    <!-- Institution -->
                    <div>
                        <label class="modern-label">
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"></path>
                                </svg>
                                Institution émettrice
                            </span>
                        </label>
                        <input type="text" name="institution" class="modern-input"
                               placeholder="Ex: Ministère de l'Éducation Nationale" required>
                    </div>

                    <!-- Numéro du document -->
                    <div>
                        <label class="modern-label">
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                                </svg>
                                Numéro du document
                            </span>
                        </label>
                        <input type="text" name="numero" class="modern-input"
                               placeholder="Ex: DOC-2026-4587" required>
                    </div>

                    <!-- Date d'émission -->
                    <div>
                        <label class="modern-label">
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                                Date d'émission
                            </span>
                        </label>
                        <input type="date" name="date_emission" class="modern-input" required>
                    </div>

                </div>
            </div>

            <!-- Ligne de séparation -->
            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-blue-200"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="px-4 text-sm text-blue-700 bg-white/80 rounded-full font-semibold">✦</span>
                </div>
            </div>

            <!-- SECTION : Destination -->
            <div>
                <h2 class="section-heading text-2xl mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Destination du document
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="modern-label">
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                                Service central destinataire
                            </span>
                        </label>
                        <select name="service" class="modern-select" required>
                            <option value="">-- Choisir le service --</option>
                            <option value="etat_civil">🏛️ Service de l'État Civil</option>
                            <option value="academique">📚 Service Académique</option>
                            <option value="juridique">⚖️ Service Juridique</option>
                            <option value="administratif">📊 Service Administratif</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Ligne de séparation -->
            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-purple-200"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="px-4 text-sm text-blue-700 bg-white/80 rounded-full font-semibold">✦</span>
                </div>
            </div>

            <!-- SECTION : Upload -->
            <div>
                <h2 class="section-heading text-2xl mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                    </svg>
                    Document à authentifier
                </h2>

                <div class="file-upload">
                    <div class="text-center">
                        <svg id="uploadIcon" class="mx-auto h-16 w-16 text-blue-400 mb-4 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                        </svg>
                        <div class="flex text-sm text-gray-600 justify-center">
                            <label for="file-upload" class="relative cursor-pointer rounded-md font-semibold text-blue-700 hover:text-blue-600">
                                <span class="text-lg">Cliquez pour télécharger</span>
                                <input id="file-upload" name="document" type="file" class="sr-only" accept=".pdf,.jpg,.jpeg,.png" required onchange="handleFileUpload(event)">
                            </label>
                        </div>
                        <p class="text-sm text-gray-500 mt-3">
                            📎 Formats acceptés: PDF, JPG, PNG • Taille max: 10 Mo
                        </p>
                        
                        <!-- File Upload Feedback -->
                        <div id="uploadFeedback" class="mt-4 hidden">
                            <div class="bg-green-50 border-2 border-green-200 rounded-lg p-4 animate-fadeInUp">
                                <div class="flex items-center gap-3">
                                    <svg class="w-6 h-6 text-green-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <div class="flex-1 text-left">
                                        <p class="text-sm font-semibold text-green-800">✅ Fichier chargé avec succès</p>
                                        <p id="fileName" class="text-sm text-green-700 mt-1 font-medium"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ACTION avec note de sécurité -->
            <div class="pt-6">
                <div class="bg-gradient-to-r from-blue-50 to-sky-50 rounded-lg p-4 mb-6 border border-blue-100">
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-semibold text-gray-800">🔒 Transmission sécurisée</p>
                            <p class="text-xs text-gray-600 mt-1">Vos documents seront analysés automatiquement et transmis de manière cryptée au service destinataire.</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-end">
                    <button type="submit" class="btn-gradient">
                        <span class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Authentifier le document
                        </span>
                    </button>
                </div>
            </div>

        </form>

    </div>

</div>

<script>
function handleFileUpload(event) {
    const file = event.target.files[0];
    
    if (file) {
        // Show the feedback section
        const feedbackDiv = document.getElementById('uploadFeedback');
        const fileNameElement = document.getElementById('fileName');
        const uploadIcon = document.getElementById('uploadIcon');
        
        // Update the filename display
        fileNameElement.textContent = `📄 ${file.name} (${(file.size / 1024).toFixed(2)} KB)`;
        
        // Show the feedback with animation
        feedbackDiv.classList.remove('hidden');
        
        // Change icon color to green
        uploadIcon.classList.remove('text-blue-400');
        uploadIcon.classList.add('text-green-500');
    }
}

function showLoader(event) {
    // Prevent default form submission
    event.preventDefault();
    
    // Show the loader
    const loader = document.getElementById('loadingOverlay');
    loader.style.display = 'flex';
    
    // Simulate form submission (replace with actual form submission)
    // In production, you would submit the form via AJAX or allow normal submission
    setTimeout(() => {
        // Submit the form after showing loader
        event.target.submit();
    }, 100);
}
</script>
@endsection