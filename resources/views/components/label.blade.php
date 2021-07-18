@props(['value'])

<label {{ $attributes->merge(['class' => 'text-lg font-semibold']) }}>
    {{ $value ?? $slot }}
</label>
