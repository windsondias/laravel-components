@props([
    'items' => '',
])

<aside
        id="sidebar"
        @mouseleave="mouseHover = false"
        @mouseover="mouseHover = true"
        class="fixed top-0 left-0 z-40 h-screen hidden sm:block duration-150 pt-14 overflow-x-hidden bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700"
>
    <div
            class="flex flex-col py-5 px-3 justify-between overflow-x-hidden h-full overflow-y-auto bg-white dark:bg-gray-800">
        <div>
            {{$items}}
        </div>
    </div>
</aside>

@push('scripts')
    <script>
        function collapse() {
            document.getElementById('main').classList.add("md:ml-14");
            document.getElementById('sidebar').classList.add("md:w-14");
            document.getElementById('main').classList.remove("md:ml-64");
            document.getElementById('sidebar').classList.remove("md:w-64");
        }

        function expand() {
            document.getElementById('main').classList.add("md:ml-64");
            document.getElementById('sidebar').classList.add("md:w-64");
            document.getElementById('main').classList.remove("md:ml-14");
            document.getElementById('sidebar').classList.remove("md:w-14");
        }

        function mouseOverExpand() {
            document.getElementById('main').classList.add("md:ml-14");
            document.getElementById('sidebar').classList.add("md:w-64");
        }

        if (!localStorage.getItem('collapsed'))
            localStorage.setItem('collapsed', 'false');

        if (localStorage.getItem('collapsed') === 'true') {
            collapse();
        } else {
            expand();
        }

        document.getElementById('sidebar').addEventListener('mouseover', function () {
            if (localStorage.getItem('collapsed') === 'true')
                mouseOverExpand();
        })

        document.getElementById('sidebar').addEventListener('mouseout', function () {
            if (localStorage.getItem('collapsed') === 'true')
                collapse();
        })

        document.getElementById('sidebar_toggle').addEventListener('click', function () {
            let width = window.innerWidth;

            if (width <= 640) {
                mouseOverExpand();
                document.getElementById('sidebar').classList.toggle("hidden");
            } else {
                if (localStorage.getItem('collapsed') === 'true') {
                    expand();
                    localStorage.setItem('collapsed', 'false');
                } else {
                    collapse();
                    localStorage.setItem('collapsed', 'true');
                }
            }
        });
    </script>
@endpush
