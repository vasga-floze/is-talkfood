<x-app-layout>
    <x-slot name="header">
    </x-slot>
    @foreach ($usersArray as $user )
        <div  class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item active">{{ $user['name']}}</li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
            </ul>
        </div>
    @endforeach
    <x-jet-welcome />
</x-app-layout>