@props([
    'label' => 'Label',
    'type' => 'text',
    'name' => '',
    'value' => null,
    'required' => true
    ])

<label>
    <strong>{{ $label }}:</strong>
</label>
<br>
<input
    type="{{ $type }}"
    class="input"
    name="{{ $name }}"
    required="{{ $required }}"
    value="{{ $value ?? old($name) }}"
>

@error($name)
    <p>{{ $message }}</p>
@enderror
