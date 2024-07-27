<x-auth-page>
    <x-common.title title="Register"/>

    <form class="form" action="{{ route('user.store') }}" method="post">
        @csrf

        <x-forms.field label="Name" type="text" name="name"/>

        <br>
        <br>

        <x-forms.field label="Email" type="email" name="email"/>

        <br>
        <br>

        <x-forms.field label="Password" type="password" name="password"/>

        <br>
        <br>

        <x-forms.field label="Confirm Password" type="password" name="password_confirmation"/>

        <br>
        <br>

        <x-common.button type="submit" message="Register"/>
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
