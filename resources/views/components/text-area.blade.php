@props(['disabled' => false, 'placeholder' => '', 'value' => ''])

<textarea {{ $disabled ? 'disabled' : '' }} placeholder="{{ $placeholder }}" {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
{{ $value }}
</textarea>