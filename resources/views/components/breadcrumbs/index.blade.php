<nav class="flex">
    <ol
        {{ $attributes->class([
              'inline-flex items-center md:text-2xl text-sm font-medium mb-3',
           ]) }}
    >
        <i class="ri-home-3-line mr-2"></i>
        {{$slot}}
    </ol>
</nav>
