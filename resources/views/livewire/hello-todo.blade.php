<div>
    <form wire:submit="addTodo">
        <input wire:model="todo" type="text" name="todo" id="todo" class="text-gray-900" />

        <button type="submit" class="bg-white text-gray-900 rounded px-4">Add Todo</button>
    </form>

    <ul>
        @forelse ($todos as $todo)
            <li >{{ $todo }}</li>
        @empty
            <li>No todos ...</li>
        @endforelse
    </ul>
</div>
