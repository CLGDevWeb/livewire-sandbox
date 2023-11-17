<div class="space-y-5">
    <h1 class="text-indigo-800 text-xl font-semibold">Posts :</h1>

    <div>
        <a href="{{ route('posts.create') }}" class="bg-indigo-800 text-white px-4 py-2 rounded-md">Create post</a>
    </div>

    <table class="text-sm w-full table-auto border-collapse border">
        <thead>
            <tr class="text-left">
                <th class="bg-indigo-100 p-1">#</th>
                <th class="bg-indigo-100 p-1">Title</th>
                <th class="bg-indigo-100 p-1">Content</th>
                <th class="bg-indigo-100 p-1">Tags</th>
                <th class="bg-indigo-100 p-1">Date</th>
                <th class="bg-indigo-100 p-1"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr wire:key="{{ $post->id }}">
                    <td class="font-semibold p-1">{{ $post->id }}</td>
                    <td class="p-1">{{ str($post->title)->words(4) }}</td>
                    <td class="p-1">{{ str($post->content)->words(8) }}</td>
                    <td class="p-1">
                        @foreach ($post->tags as $tag)
                            <span class="px-1 bg-teal-800 text-white rounded text-xs leading-tight">{{ $tag }}</span>
                        @endforeach
                    </td>
                    <td class="p-1 text-xs text-slate-700">{{ $post->created_at?->format('d/m/Y') }}</td>
                    <td class="p-1">
                        <button type="button" wire:click="deletePost({{ $post->id }})" wire:confirm="Are you sure ?" title="Delete" class="px-1 bg-red-600 rounded-md place-items-center text-white w-full text-base">
                            <span class="font-mono">&times;</span>
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td> - No Posts - </td>
                    <td> --- </td>
                    <td> --- </td>
                    <td> --- </td>
                    <td> --- </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="text-sm text-center">
        ... pagination ...
    </div>
</div>
