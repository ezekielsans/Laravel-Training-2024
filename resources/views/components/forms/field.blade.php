@props(['label' => 'Label', 'type' => 'text'])

<label>
    <strong>{{ $label }}:</strong>
</label>
<br>
<input type="{{ $type }}" class="input">
