<div>
    <input type="text" wire:model.lazy="todo" placeholder="Todo...">

    <button wire:click="add">Add Todo</button>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
