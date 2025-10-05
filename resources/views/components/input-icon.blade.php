@props(['name', 'label' => '', 'icon' => 'isax isax-message'])

<label
    class="form-label"
    for="input-{{ Str::slug($name) }}"
> {{  Str::title($label ?: $name) }}</label>
<div class="input-icon">
    <span class="input-icon-addon">
        <i class="{{ $icon }}"></i>
    </span>
    <input
        {{ $attributes->merge([
            'type' => 'text',
            'class' => 'form-control',
            'placeholder' => 'Enter ' . Str::title($label ?: $name),
            'value' => old($name),
            'name' => $name,
            'id' => 'input-' . Str::slug($name),
        ]) }}
    >
</div>
@error($name)
    <code class="text-danger fs-12">{{ $message }}</code>
@enderror
