<x-common.layout>
    <x-common.title title="Create Work Experience"/>

    @if(session('success'))
        <p style="color: green">
            {{ session('success') }}
        </p>
    @endif

    <form class="form" method="post" action="{{ route('work-experience.store') }}">
        @csrf

        <x-forms.field label="Company" name="company" />

        <br>
        <br>

        <x-forms.field label="From" name="from" type="date"/>

        <br>
        <br>

        <x-forms.field label="To" name="to" type="date"/>

        <br>
        <br>

        <x-forms.field label="Position" name="position"/>

        <br>
        <br>

        <x-common.button message="Save"/>
    </form>
</x-common.layout>
