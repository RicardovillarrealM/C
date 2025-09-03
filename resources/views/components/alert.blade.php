@props(['type' => 'info'])

@php
  switch ($type) {
    case 'info':
        $class = 'text-blue-800 dark:bg-gray-800 dark:text-blue-400';
        break;
    case 'danger':
        $class = 'text-red-800 dark:bg-gray-800 dark:text-red-400';
        break;
    case 'success':
        $class = 'text-green-800 dark:bg-gray-800 dark:text-green-400';
        break;
    case 'warning':
        $class = 'text-yellow-800 dark:bg-gray-800 dark:text-yellow-400';

        break;
    case 'dark':
        $class = 'text-gray-800 dark:bg-gray-800 dark:text-gray-400';
        break;
    
    default:
        # code...
        break;
  }   
@endphp
{{-- Para usar directamente sin componente --}}
<div  {{ $attributes->merge(['class' => 'p-4  text-sm  rounded-lg'.$class ]) }}role="alert">
    <span class="font-medium">{{ $title }}</span> {{ $slot }}
</div>