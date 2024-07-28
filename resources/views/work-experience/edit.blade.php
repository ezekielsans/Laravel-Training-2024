<x-common.layout>
    <x-common.title title="Edit Work Experience"/>

    @if(session('success'))
        <p style="color: green">
            {{ session('success') }}
        </p>
    @endif

    <form class="form" method="post" action="{{ route('work-experience.update', ['model' => $experience->id]) }}">
        @csrf
        @method('put')

        <x-forms.field label="Company" name="company" value="{{ $experience->company }}"/>

        <br>
        <br>

        <x-forms.field label="From" name="from" type="date" :value="$experience->from"/>

        <br>
        <br>

        <x-forms.field label="To" name="to" type="date" value="{{ $experience->to }}"/>

        <br>
        <br>

        <x-forms.field label="Position" name="position" value="{{ $experience->position }}"/>

        <br>
        <br>

        <x-common.button message="Update"/>
    </form>
</x-common.layout>
