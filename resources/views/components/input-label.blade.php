@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-lg text-black text-center']) }}>
    {{ $value ?? $slot }}
</label>
