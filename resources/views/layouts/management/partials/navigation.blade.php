
    <!-- Navbar -->
    <nav class="bg-white border-b border-gray-200 shadow-md">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center flex-shrink-0">
                    <a href="{{ url('/') }}" class="text-xl font-bold text-indigo-600">
                        {{ config('app.name', 'Mi Proyecto') }}
                    </a>
                </div>

                <!-- Menú en escritorio -->
                <div class="items-center hidden space-x-8 md:flex">
                    <a href="{{ url('/') }}" class="text-gray-700 hover:text-indigo-600">Inicio</a>
                    <a href="{{ url('/about') }}" class="text-gray-700 hover:text-indigo-600">Acerca</a>
                    <a href="{{ url('/contact') }}" class="text-gray-700 hover:text-indigo-600">Contacto</a>
                </div>

                <!-- Botón mobile -->
                <div class="flex items-center md:hidden">
                    <button id="menu-btn" class="text-gray-700 hover:text-indigo-600 focus:outline-none">
                        <!-- Icono hamburguesa -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menú desplegable en mobile -->
        <div id="mobile-menu" class="hidden px-4 pb-3 space-y-2 bg-white border-t border-gray-200 md:hidden">
            <a href="{{ url('/') }}" class="block text-gray-700 hover:text-indigo-600">Inicio</a>
            <a href="{{ url('/about') }}" class="block text-gray-700 hover:text-indigo-600">Acerca</a>
            <a href="{{ url('/contact') }}" class="block text-gray-700 hover:text-indigo-600">Contacto</a>
        </div>
    </nav>

    <!-- Contenido principal -->

    @livewireScripts
    <script>
        // Script para abrir/cerrar el menú en mobile
        document.getElementById("menu-btn").addEventListener("click", function () {
            const menu = document.getElementById("mobile-menu");
            menu.classList.toggle("hidden");
        });
    </script>
