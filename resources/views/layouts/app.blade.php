<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="application-name" content="{{ config('app.name') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon-16x16.png') }}">
        {{-- <link rel="manifest" href="{{ asset('/site.webmanifest') }}"> --}}

        <title>{{ config('app.name') }}</title>

        <style>[x-cloak] { display: none !important; }</style>
        @wireUiScripts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        @stack('scripts')
        @laravelPWA
        {{-- @yield('layouts.pwa') --}}
    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @livewireScripts()

        @livewireChartsScripts
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

        <x-notifications />
        <x-dialog z-index="z-50" blur="md" align="center" />
        @livewire('notifications')

        {{-- <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function () {
                window.livewire.on('urlChange', (url) => {
                    history.pushState(null, null, url);
                });
            });
        </script> --}}
    </body>
</html>
