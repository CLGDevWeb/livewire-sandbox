<div class="text-sm space-y-8">
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

    <div x-data="{ count: 0 }" class="border border-indigo-700 rounded-lg p-5 space-y-3">
        <p class="text-lg font-semibold">Test AlpineJS</p>

        <div class="space-x-3">
            <data x-text="count" class="font-mono bg-indigo-50 px-2 py-1 rounded-lg text-indigo-700 font-semibold"></data>
            <button x-on:click="count++" class="border border-indigo-800 rounded-lg px-2 py-1">+</button>
        </div>

        <p><span class="font-semibold underline">Current input</span> : <span x-text="$wire.todo" class="text-indigo-700"></span></p>
    </div>
</div>
