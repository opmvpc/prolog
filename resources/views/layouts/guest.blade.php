<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <x-meta />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/hl/github.css') }}">
        @livewireStyles
        {{-- @bukStyles --}}

        <!-- Scripts -->

        @stack('modals')
        @livewireScripts

        <script src="{{ asset('js/tau-prolog/modules/core.js') }}"></script>
        <script src="{{ asset('js/tau-prolog/modules/lists.js') }}"></script>
        <script src="{{ asset('js/tau-prolog/modules/random.js') }}"></script>
        <script src="{{ asset('js/tau-prolog/modules/statistics.js') }}"></script>
        <script src="{{ asset('js/tau-prolog/modules/dom.js') }}"></script>
        <script src="{{ asset('js/tau-prolog/modules/js.js') }}"></script>
        <script src="{{ asset('js/tau-prolog/modules/os.js') }}"></script>
        <script src="{{ asset('js/tau-prolog/modules/charsio.js') }}"></script>
        <script src="{{ asset('js/tau-prolog/modules/format.js') }}"></script>

        <script src="{{ asset('js/tau-prolog/draw-derivation-trees.js') }}"></script>

        <script src="{{ asset('js/app.js') }}" defer></script>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>
    <body class="antialiased min-h-screen flex flex-col">

        <div class="flex-none">
            <x-toaster :message="session('ok')" />

            @livewire('navigation-dropdown')
        </div>

        <div class="flex-grow font-sans text-gray-900 px-3 sm:px-6 lg:px-8 mt-8">
            <x-guest-alert />
            {{ $slot }}
        </div>

        <footer class="w-full flex-none px-3 sm:px-6 lg:px-8 mt-6">
            <div class="max-w-7xl mx-auto flex justify-between items-center ">
                <div></div>
                <div>
                    <span class="font-mono font-bold text-sm">app code on </span>
                    <a class="font-mono font-bold" href="https://github.com/opmvpc/prolog">GitHub</a>
                </div>
            </div>
        </footer>

        {{-- <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script> --}}
        {{-- @bukScripts --}}

    </body>
</html>
