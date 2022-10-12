<div wire:poll='UpdateUserList'>
    <div class="container mt-4">
        <button wire:click="decrement"> - </button> <span> {{ $number }} </span> <button wire:click="increment"> + </button>
    </div>

    <ul>
        @foreach ($users as $user)
            <li> {{ $user->name }} </li>
        @endforeach
    </ul>
    Username :  <input placeholder="Username" type="text" wire:model.debounce.100ms="username"> {{ $username }} 
    <div>
        Current time: {{ now() }}
    </div>
    <div>
        Slug Generater : <input placeholder="Slug Generater" wire:model="slug"> {{ $slug }}
    </div>
</div>
