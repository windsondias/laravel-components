## Laravel's components with TailwindCss and AlpineJs

#### To use this package, you must have TailwindCss and AlpineJs installed in the project.

### Installation

Use the composer command:

    composer require windsondias/laravel-components

Include the code below in your tailwind.config.js:

    safelist: [
        {
            pattern: /(bg|border|text)-(primary|secondary|tertiary|success|error|warning|info)-(100|200|300|400|500)/,
            variants: ['sm', 'md', 'lg', 'xl', 'dark', 'hover', 'focus'],
        },
    ],

    theme: {
        extend: {
            colors: {
                primary: {
                    100: '#bfdbfe',
                    200: '#93c5fd',
                    300: '#60a5fa',
                    400: '#3b82f6',
                    500: '#2563eb',
                },
                secondary: {
                    100: '#e5e7eb',
                    200: '#d1d5db',
                    300: '#9ca3af',
                    400: '#6b7280',
                    500: '#4b5563',
                },
                tertiary: {
                    100: '#a1a1aa',
                    200: '#71717a',
                    300: '#52525b',
                    400: '#3f3f46',
                    500: '#27272a',
                },
                success: {
                    100: '#bbf7d0',
                    200: '#86efac',
                    300: '#4ade80',
                    400: '#4ade80',
                    500: '#16a34a',
                },
                error: {
                    100: '#fecaca',
                    200: '#fca5a5',
                    300: '#f87171',
                    400: '#ef4444',
                    500: '#dc2626',
                },
                warning: {
                    100: '#fef08a',
                    200: '#fde047',
                    300: '#facc15',
                    400: '#eab308',
                    500: '#ca8a04',
                },
                info: {
                    100: '#a5f3fc',
                    200: '#67e8f9',
                    300: '#22d3ee',
                    400: '#06b6d4',
                    500: '#0891b2',
                },
            }
        },
    },

After this configuration, only the sidebar and navbar components will not work, as they depend on the use of the layout available with the components.

To use the layout, first publish the package files using the command:

    php artisan vendor:publish

Search for the provider:

    Provider: WindsonDias\Components\ComponentServiceProvider

The files will be published in the folder: resources/views/vendor/components/components

Copy the layout folder into your structure, necessarily in the blade components folder, usually resources/views/components

Change the path to the navbar and sidebar components in the main file for the two components copied to your structure

### Example

From

    <x-components::app.navbar/>
    <x-components::app.sidebar/>

To

    <x-app.navbar/>
    <x-app.sidebar/>

Within these components you will find a basis for how they work. After that, simply install the main file as a layout for your application and use