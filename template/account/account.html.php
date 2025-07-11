
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxIt - Interface Bancaire</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #1f2937 0%, #374151 100%);
        }
        
        .card-shadow {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        
        .hover-scale {
            transition: transform 0.2s ease;
        }
        
        .hover-scale:hover {
            transform: scale(1.02);
        }
        
        .status-success {
            background-color: #10b981;
            color: white;
        }
        
        .status-failed {
            background-color: #ef4444;
            color: white;
        }
        
        .amount-positive {
            color: #10b981;
        }
        
        .amount-negative {
            color: #ef4444;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
<?php

// echo $connect

?>



    

    <div class="flex">
        
        <!-- Sidebar -->
        <div class="w-64 bg-orange-500  p-6">

        
            <!-- Logo -->
            <div class="flex items-center mb-8">
                <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center">
                    <span class="text-orange-500 font-bold text-xl">M</span>
                </div>
                <span class="ml-3 text-white font-bold text-xl">MaxIt</span>
            </div>

            <!-- Navigation -->
            <nav class="space-y-2 ">
                <a href="#" class="flex items-center text-white/80 hover:text-white hover:bg-white/10 p-3 rounded-lg transition-colors ">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Accueil
                </a>
                <a href="#" class="flex items-center text-white/80 hover:text-white hover:bg-white/10 p-3 rounded-lg transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                    </svg>
                    Payements
                </a>
                <a href="#" class="flex items-center text-white/80 hover:text-white hover:bg-white/10 p-3 rounded-lg transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    Transactions
                </a>
                <a href="#" class="flex items-center text-white/80 hover:text-white hover:bg-white/10 p-3 rounded-lg transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    mes comptes
                </a>
            </nav>

            <!-- Disconnect Button -->
            <div class="mt-auto pt-8">
                <button class="flex items-center text-white/80 hover:text-white hover:bg-white/10 p-3 rounded-lg transition-colors w-full">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    Deconnexion
                </button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <!-- Account Header -->
             <div class="bg-white shadow-sm px-6 py-4 flex items-center justify-between">
        <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-500 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <input type="text" placeholder="recherche" class="text-gray-600 outline-none bg-transparent">
        </div>
        <div class="flex items-center space-x-4">
            <button class="bg-green-500 text-white px-4 py-2 rounded-lg font-medium hover:bg-green-600 transition-colors">
                Connecté
            </button>
            <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                <img src="https://via.placeholder.com/40" alt="Profile" class="w-full h-full rounded-full object-cover">
            </div>
            <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM4 19h6v-6H4v6zM16 8V3h5v5h-5zM4 8V3h5v5H4z"></path>
            </svg>
        </div>
    </div>
            <div class="gradient-bg rounded-2xl p-8 mb-8 text-white relative overflow-hidden">
                <div class="relative z-10">
                    <h1 class="text-4xl font-bold mb-2">MaxIt</h1>
                    <p class="text-white/80 mb-1">Compte principale</p>
                    <p class="text-2xl font-semibold">77 773 27 62</p>
                </div>
                <div class="absolute top-6 right-6 flex items-center space-x-4">
                    <div class="flex items-center bg-white/10 backdrop-blur-sm rounded-lg px-4 py-2">
                        <span class="text-sm mr-2">solde:</span>
                        <span class="font-semibold">100.000 000</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <div class="w-16 h-16 bg-white/10 rounded-lg flex items-center justify-center">
                        <div class="w-12 h-12 bg-white rounded grid grid-cols-3 gap-1 p-1">
                            <div class="bg-black rounded-sm"></div>
                            <div class="bg-black rounded-sm"></div>
                            <div class="bg-black rounded-sm"></div> 
                            <div class="bg-black rounded-sm"></div>
                            <div class="bg-white rounded-sm"></div>
                            <div class="bg-black rounded-sm"></div>
                            <div class="bg-black rounded-sm"></div>
                            <div class="bg-black rounded-sm"></div>
                            <div class="bg-black rounded-sm"></div>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-white/20 to-transparent"></div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="grid grid-cols-3 gap-6 mb-8">
                <button class="bg-white card-shadow rounded-xl p-6 hover-scale hover:shadow-lg transition-all text-left">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm mb-1">consulter mes transaction</p>
                        </div>
                        <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                    </div>
                </button>
                <button class="bg-white card-shadow rounded-xl p-6 hover-scale hover:shadow-lg transition-all text-left">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm mb-1">creer un compte secondaire</p>
                        </div>
                        <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </div>
                    </div>
                </button>
                <button class="bg-white card-shadow rounded-xl p-6 hover-scale hover:shadow-lg transition-all text-left">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm mb-1">creer un compte secondaire</p>
                        </div>
                        <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </div>
                    </div>
                </button>
            </div>

            <!-- Transaction History -->
            <div class="bg-white rounded-xl card-shadow p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-6">historiques</h2>
                
                <div class="space-y-4">
                    <!-- Transaction 1 -->
                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold text-gray-800">Payment</p>
                                <p class="text-sm text-gray-500">12 janvier 2025</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold amount-negative">-25000 fcfa</p>
                            <span class="inline-block px-3 py-1 status-success rounded-full text-xs font-medium">réussi</span>
                        </div>
                    </div>

                    <!-- Transaction 2 -->
                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold text-gray-800">Depot</p>
                                <p class="text-sm text-gray-500">23 juin 2025</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold amount-positive">245488 fcfa</p>
                            <span class="inline-block px-3 py-1 status-success rounded-full text-xs font-medium">réussi</span>
                        </div>
                    </div>

                    <!-- Transaction 3 -->
                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold text-gray-800">retrait</p>
                                <p class="text-sm text-gray-500">23 juillet 2025</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold amount-positive">245488 fcfa</p>
                            <span class="inline-block px-3 py-1 status-failed rounded-full text-xs font-medium">échec</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

