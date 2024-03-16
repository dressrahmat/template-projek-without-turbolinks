<!DOCTYPE html>
<html data-theme="mytheme" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-lora text-gray-900 antialiased bg-base-100">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-base-100">

        <div class="hero bg-base-100">
            <div class="hero-content flex-col lg:flex-row-reverse gap-12">
                <div class="basis-1/2 text-center lg:text-left">
                    <h1 class="text-5xl font-bold">Simple Projek</h1>
                    <h2 class="text-2xl text-neutral font-bold mt-4">"Sistem Pelejit Potensi Ruang Objek"</h2>
                    <p class="py-6">Lejitkan potensi perusahaan dan instansi anda dengan sistem manajemen online.
                        Rasakan pertumbuhan perusahaan dengan sistem yang dirancang khusus untuk perusahaan/instansi
                        anda.</p>
                </div>
                <div class="card basis-1/2 shrink-0 w-full max-w-sm shadow-2xl bg-base-100 text-base-content">
                    {{{ $slot }}}
                </div>
            </div>
        </div>
    </div>
</body>

</html>
