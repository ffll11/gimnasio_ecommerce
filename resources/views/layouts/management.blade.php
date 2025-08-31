<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!--Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Styles -->
    @livewireStyles()

    <!--Scripts-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{-- Llamamos al template de navigation --}}
    @include('layouts.management.partials.navigation')
    {{-- Llamamos al template del sidebar --}}
    @include('layouts.management.partials.sidebar')



    {{-- contenido Principal --}}
    <!--Tiene que ser dinamico-->

    {{-- LE ponemos un margin left de 64 donde iria el sidebar --}}
    <div class="p-4 sm:ml-64">
        <div class="mt-14">

            <div class="flex items-center justify-between">
                <!-- Breadcrumbs -->
                {{--             @include('layouts.management.partials.breadcrumbs')
 --}}
                @isset($action)
                    <div>
                        {{ $action }}
                    </div>
                @endisset
            </div>
            <div>
            </div>
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                {{ $slot }}
            </div>

        </div>

        @livewireScripts

        @stack('js')


    </div>

    <div class="fixed bottom-0 w-full sm:ml-64">
        {{-- Llamamos al template del footer --}}
        @include('layouts.management.partials.footer')

    </div>

</body>

</html>
