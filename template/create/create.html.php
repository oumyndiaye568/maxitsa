<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max it - Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        .input-field {
            background-color: #f0f0f0;
            border: 1px solid #e0e0e0;
        }
        .input-field:focus {
            outline: none;
            border-color: #ff6b35;
            box-shadow: 0 0 0 2px rgba(255, 107, 53, 0.2);
        }
        .eye-icon {
            cursor: pointer;
            opacity: 0.6;
        }
        .eye-icon:hover {
            opacity: 1;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex">
    <!-- Sidebar gauche orange -->
    <div class="w-1/3 bg-orange-500 flex flex-col justify-center items-center text-white">
        <div class="text-center">
            <h1 class="text-6xl font-light mb-4">Max it</h1>
            <p class="text-2xl font-semibold">SN</p>
        </div>
    </div>

    <!-- Formulaire principal -->
    <div class="w-2/3 bg-white flex items-center justify-center p-8">
        <div class="w-full max-w-2xl">
            <h2 class="text-3xl font-light text-gray-700 mb-8 text-center">Inscription</h2>
            
            <form class="space-y-6">
                <!-- Nom et Prénom -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-2">Nom</label>
                        <input type="text" placeholder="Entrez votre nom" class="input-field w-full px-4 py-3 rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-2">Prénom</label>
                        <input type="text" placeholder="Entrez votre prénom" class="input-field w-full px-4 py-3 rounded-md">
                    </div>
                </div>

                <!-- Numéro de téléphone -->
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">Numéro de téléphone</label>
                    <input type="tel" placeholder="Entrez votre numéro de téléphone" class="input-field w-full px-4 py-3 rounded-md">
                </div>

                <!-- Adresse -->
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">Adresse</label>
                    <input type="text" placeholder="Entrez votre adresse" class="input-field w-full px-4 py-3 rounded-md">
                </div>

                <!-- Numéro Carte d'identité -->
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">Numéro Carte d'identité</label>
                    <input type="text" placeholder="Entrez votre numéro de carte nationale d'identité" class="input-field w-full px-4 py-3 rounded-md">
                </div>

                <!-- Cartes d'identité -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-2">Carte d'identité Recto</label>
                        <div class="relative">
                            <input type="text" placeholder="Entrez votre numéro de carte Recto" class="input-field w-full px-4 py-3 rounded-md pr-12">
                            <div class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-2">Carte d'identité Verso</label>
                        <div class="relative">
                            <input type="text" placeholder="Entrez votre numéro de carte Verso" class="input-field w-full px-4 py-3 rounded-md pr-12">
                            <div class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Photo -->
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">Photo</label>
                    <div class="relative">
                        <input type="text" placeholder="Entrez votre photo" class="input-field w-full px-4 py-3 rounded-md pr-12">
                        <div class="absolute right-3 top-1/2 transform -translate-y-1/2">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Bouton d'inscription -->
                <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-medium py-4 px-6 rounded-md transition-colors duration-200 text-lg">
                    Inscription
                </button>

                <!-- Liens du bas -->
                <div class="flex justify-center space-x-4 text-sm text-gray-500 mt-6">
                    <a href="#" class="hover:text-orange-500">Déjà un compte ?</a>
                    <span>|</span>
                    <a href="#" class="hover:text-orange-500">Connexion</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>