@props(['title'])
<option {{ $attributes->merge(['class' => 'px-2 py-2']) }}>{{ $title ?? $slot }}</option>
