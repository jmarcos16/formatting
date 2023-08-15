@props(['status'])

@php
    $class = array();
    switch ($status) {
        case 'progress':
            $class = ['class' => 'bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300'];
            break;
        case 'finished':
            $class = ['class' => 'bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300'];
            break;
        default:
            $class = ['class' => 'bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300'];
            break;
    }
@endphp

<div>
    <span {{$attributes->merge($class)}}>{{ $status }}</span>
</div>
