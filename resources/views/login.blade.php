<x-auth-page>
    <form class='container' action="{{ route('user.login') }}" method="post">
    @csrf
        <x-title>LOGIN PAGE</x-title>
        <x-input type='email' name='email' label='Email'/>
        <x-input type='password' name='password' label='Password'/>

        <x-submit-button type='submit' text='Submit'/>
    </form>
</x-auth-page>
