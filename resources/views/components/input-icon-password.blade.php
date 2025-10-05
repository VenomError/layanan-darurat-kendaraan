@props(['name', 'label' => '', 'icon' => 'ri-lock-line'])

<label
    class="form-label"
    for="input-{{ Str::slug($name) }}"
>
    {{  Str::title($label ?: $name) }}
</label>

<div
    x-data="{ show: false }"
    class="input-icon relative"
>
    <span class="input-icon-addon">
        <i class="{{ $icon }}"></i>
    </span>

    <input
        x-bind:type="show ? 'text' : 'password'"
        {{ $attributes->merge([
            'class' => 'form-control',
            'placeholder' => 'Enter ' .  Str::title($label ?: $name),
            'value' => old($name),
            'name' => $name,
            'id' => 'input-' . Str::slug($name),
        ]) }}
    >

    <span
        class="input-icon-addon toggle-password cursor-pointer select-none"
        @click="show = !show"
    >
        <i :class="show ? 'isax isax-eye' : 'isax isax-eye-slash'"></i>
    </span>
</div>

@error($name)
    <code class="text-danger fs-12">{{ $message }}</code>
@enderror
