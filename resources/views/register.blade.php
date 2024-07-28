
<x-auth-page>
    <form class='container' action="{{ route('user.register') }}" method="post">
        @csrf
        <x-title>REGISTER PAGE</x-title>

        <x-input type='text' name='name' label='Name'/>
        <x-input type='email' name='email' label='Email'/>
        <x-input type='password' name='password' label='Password'/>
        <x-input type='password' name='confirm_password' label='Confirm Password'/>

        <x-submit-button type='submit' text='Submit'/>
    </form>

</x-auth-page>