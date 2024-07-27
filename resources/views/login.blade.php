<x-auth-page>
    <x-common.title title="Login"/>

    <form class="form" action="{{ route('user.authenticate') }}" method="post">
        @csrf

        <x-forms.field label="Email" type="email" name="email"/>

        <br>
        <br>

        <x-forms.field label="Password" type="password" name="password"/>

        <br>
        <br>

        <x-common.button type="submit" message="Login"/>
    </form>
</x-auth-page>
