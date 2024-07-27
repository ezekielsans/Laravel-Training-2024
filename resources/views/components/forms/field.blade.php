@props([
    'label' => 'Label',
    'type' => 'text',
    'name' => ''
    ])

<label>
    <strong>{{ $label }}:</strong>
</label>
<br>
<input type="{{ $type }}" class="input" name="{{ $name }}">

@error($name)
    <p>{{ $message }}</p>
@enderror
