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
<body class="bg-gray-50 dark:bg-gray-900">
<section class="antialiased">
    <div class="flex flex-col items-center justify-center gap-3 px-6 mx-auto h-screen">
        <div class="flex items-center text-2xl font-semibold text-gray-900 dark:text-white">
            <img class="h-16" src="{{asset('images/logos/marcosoft.png')}}" alt="">
        </div>
        <div class="w-full bg-white rounded-lg shadow dark:border sm:max-w-md dark:bg-gray-800 dark:border-gray-700 dark:text-white">
            {{ $slot }}
        </div>
    </div>
</section>

@stack('scripts')

</body>
</html>
