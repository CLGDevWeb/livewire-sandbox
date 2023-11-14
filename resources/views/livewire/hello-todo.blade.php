<div class="text-sm">
    <form wire:submit="addTodo">
        <input wire:model="todo" type="text" name="todo" id="todo" class="text-gray-900 border border-indigo-800 rounded px-1 py-0.5" />

        <button type="submit" class="bg-indigo-800 text-white rounded px-4 py-1 ">Add Todo</button>
    </form>

    <ul class="mt-3">
        @forelse ($todos as $todo)
            <li class="list-disc list-inside">{{ $todo }}</li>
        @empty
            <li class="italic">No todos ...</li>
        @endforelse
    </ul>
</div>
