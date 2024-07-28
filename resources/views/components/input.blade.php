@props(['label', 'type', 'name'])
<div class="input-container">
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    <label for={{$name}}>{{$label}}:</label>  
    <input type={{$type}} name={{$name}} value="{{ old($name)}}">

    @error($name)
    <p>{{ $message }}</p>
    @enderror
</div>