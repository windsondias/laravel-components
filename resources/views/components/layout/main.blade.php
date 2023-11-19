<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{--    With Laravel Modules--}}
    {{--    {{ Vite::withEntryPoints(['Resources/assets/css/app.css', 'Resources/assets/js/app.js'])->useBuildDirectory('build-module-name')  }}--}}

    @stack('styles')

    <script data-navigate-track>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-600 dark:text-white">

<div class="antialiased h-auto min-h-screen">
    <x-components::app.navbar/>

    <x-components::app.sidebar/>

    <main id="main" class="p-4 h-auto pt-20 relative">
        {{ $slot }}
    </main>
</div>

<script>
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.getElementById('theme-toggle-light-icon').classList.remove('hidden');
    } else {
        document.getElementById('theme-toggle-dark-icon').classList.remove('hidden');
    }

    document.getElementById('theme-toggle').addEventListener('click', function () {
        document.getElementById('theme-toggle-dark-icon').classList.toggle('hidden');
        document.getElementById('theme-toggle-light-icon').classList.toggle('hidden');

        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }
    });
</script>

@stack('scripts')

</body>
</html>
