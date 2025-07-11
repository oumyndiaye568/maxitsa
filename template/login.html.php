
    <div class="geometric-bg w-full max-w-md rounded-3xl shadow-2xl relative">
        <div class="geometric-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>
        <div class="relative z-10 p-8">
            <!-- Logo Section -->
            <div class="text-center mb-8">
                <div class="text-white text-opacity-100 text-4xl font-light tracking-wider mb-6">
                    MAXIT -SA
                </div>
                <div class="text-white text-opacity-60  font-light tracking-wider text-2xl">
                    TRANSFERT D'ARGENT
                </div>
            </div>
            <!-- Login Title -->
             <!-- <div class="text-center mb-8">
                <h1 class="text-black text-3xl font-bold tracking-wide">LOGIN</h1>
            </div>  -->
            
            <!-- Login Form -->
            <form   method="post" action="/show" class="space-y-10" >
                <!-- Username Field -->
                <div class="relative">
                    <div class="absolute left-4 top-1/2 transform -translate-y-1/2 z-10">
                         <div class="">
                            <!-- <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path> 
                            </svg>  -->
                        </div>
                    </div>
                </div>
                <!-- Password Field -->
                <div class="relative">
                    <div class="absolute left-4 top-1/2 transform -translate-y-1/2 z-10">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-md">
                             <!-- <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                            </svg>  -->
                            <i class="fa-solid fa-mobile"></i>
                        </div>
                    </div>
                    <input 
                        type="password" 
                        placeholder="NUMERO-TELEPHONE" 
                        class="input-field w-full pl-16 pr-4 py-4 rounded-2xl text-black placeholder-gray-500 outline-none"
                    />
                </div>
                 <div class="relative">
                    <div class="absolute left-4 top-1/2 transform -translate-y-1/2 z-10">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-md">
                             <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                            </svg> 
                            <!-- <i class="fa-solid fa-mobile"></i> -->
                        </div>
                    </div>
                    <input 
                        type="password" 
                        placeholder="PASSWORD" 
                        class="input-field w-full pl-16 pr-4 py-4 rounded-2xl text-black placeholder-gray-500 outline-none"
                    />
                </div>
                <!-- Login Button -->
                <button 
                    type="submit" 
                    class="btn-primary w-full py-4 rounded-2xl text-white font-semibold text-lg tracking-wide " >
                    SE CONNECTER
                </button>
            </form>
            
            <!-- Sign Up Section -->
            <div class="text-center mt-8">
                <p class="text-black text-sm mb-4">
                   CREER UN COMPTE
                </p>
                 <div><i class="fa-solid fa-chevron-down text-white"></i></div>

                    <a href="/create">
                     <button class="btn-secondary px-8 py-3 rounded-2xl text-white font-semibold tracking-wide">
                    SIGN UP
                    </button>
                    </a>
            </div>
        </div>
        <!-- Corner Icons -->
        <div class="absolute top-4 right-4 z-20">
            <button class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center backdrop-blur-sm">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
            </button>
        </div>
        <div class="absolute bottom-4 right-4 z-20">
            <button class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center backdrop-blur-sm">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
            </button>
        </div>
    </div>
