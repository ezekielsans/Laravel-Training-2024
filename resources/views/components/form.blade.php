@props(['action'])
<form class='container' action={{ $action }} method="POST">
    @csrf
    {{$slot}}
</form>