<div class="flex flex-col gap-5">
    <h2>Create Post</h2>

    <form wire:submit="store" class="flex flex-col gap-3 max-w-md">
        <label for="title" class="flex flex-col gap-1">
            <span>Title</span>
            <input type="text" wire:model="title" name="title" id="title" class="text-gray-900 border border-indigo-800 rounded px-1 py-0.5">
            @error('title')
                <em>{{ $message }}</em>
            @enderror
        </label>

        <label for="content" class="flex flex-col gap-1">
            <span>Content</span>
            <textarea wire:model="content" name="content" id="content" class="text-gray-900 border border-indigo-800 rounded px-1 py-0.5"></textarea>
            @error('content')
                <em>{{ $message }}</em>
            @enderror
        </label>

        <label for="tags" class="flex flex-col gap-1">
            <span>Content</span>
            <select wire:model="tags" name="tags" id="tags" multiple class="text-gray-900 border border-indigo-800 rounded px-1 py-0.5">
                @foreach ($tagList as $tag)
                    <option value="{{ $tag }}">{{ $tag }}</option>
                @endforeach
            </select>
            @error('tags')
                <em>{{ $message }}</em>
            @enderror
        </label>

        <button type="submit" title="Submit form">Create</button>
    </form>
</div>
