@props([
    'name',
    'label' => '',
    'icon' => 'isax isax-arrow-down-1',
])

<label
    class="form-label"
    for="select-{{ Str::slug($name) }}"
>
    {{ Str::title($label ?: $name) }}
</label>

<div class="input-icon">
    <span class="input-icon-addon">
        <i class="{{ $icon }}"></i>
    </span>

    <select
        {{ $attributes->merge([
            'class' => 'form-control',
            'name' => $name,
            'id' => 'select-' . Str::slug($name),
        ]) }}
    >
        <option value="">-- Pilih {{ Str::title($label ?: $name) }} --</option>
        {{ $slot }}
    </select>
</div>

@error($name)
    <code class="text-danger fs-12">{{ $message }}</code>
@enderror
