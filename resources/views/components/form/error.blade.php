@props([
    'input' => '',
    'text' => ''
])

@error($input)
<span class="text-red-500 text-sm">
    {{ !empty($text) ? $text : $message }}
</span>
@enderror
