<x-auth-page>
    <x-common.title title="Register"/>

    <form class="form">
        <x-forms.field label="Name" type="text"/>

        <br>
        <br>

        <x-forms.field label="Email" type="email"/>

        <br>
        <br>

        <x-forms.field label="Password" type="password"/>

        <br>
        <br>

        <x-forms.field label="Confirm Password" type="password"/>

        <br>
        <br>

        <button type="submit" style="cursor: pointer; width: 50%; background: lightblue; border: none">
            Register
        </button>
    </form>
</x-auth-page>

{{-- <x-header/>
    <x-navigation/>

    <x-body>
        This is a body
    </x-body>
<x-footer/> --}}

{{-- @if()
        <p>Email is required!</p>
    @endif

    @foreach()
        <tr>Rows</tr>
    @endforeach

    @switch()
        @case()
            @break

        @default
            @break
    @endswitch --}}
