<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4b50fceef6.js" crossorigin="anonymous"></script>
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-lora antialiased bg-base-200 text-sm">

    {{-- <div x-data="{ isLoading: true }" x-init="() => { setTimeout(() => { isLoading = false; }, 2000); }">
        <template x-if="isLoading">
            <div id="loading-spinner" class="fixed top-0 left-0 w-full h-full bg-gray-950 bg-opacity-90 flex items-center justify-center z-50">
                <div>
                    <img src="{{asset('../assets/images/loading1.gif')}}" alt="" class="w-56 h-56">
                </div>
            </div>
        </template>
    </div> --}}

    <div x-data="{ isOpen: true }" class="flex flex-col relative min-h-screen">
        <!-- Navbar -->
        @include('components.partials.navbar')
        
        <!-- Sidebar -->
        @include('components.partials.sidebar')
        
        <!-- Main Content -->
        <main :class="{'md:ml-48 lg:ml-64 pt-28': isOpen, 'md:ml-32 pt-24': !isOpen}" class="p-4 mb-12">
            <!-- Your page content here -->
            {{ $slot }}
            
        </main>

        <!-- Footer -->
        @include('components.partials.footer')
        
    </div>
    @livewire('wire-elements-modal')
    @livewireScripts
    @stack('scripts')
</body>
</html>
