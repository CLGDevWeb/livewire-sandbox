<tr wire:key="{{ $post->id }}" @class(['bg-red-500 bg-opacity-10' => $post->deleted_at !== null])>
    <td class="font-semibold p-1">{{ $post->id }}</td>
    <td class="p-1">{{ str($post->title)->words(4) }}</td>
    <td class="p-1">{{ str($post->content)->words(8) }}</td>
    <td class="p-1">
        @foreach ($post->tags as $tag)
            <span class="px-1 bg-teal-800 text-white rounded text-xs leading-tight">{{ $tag }}</span>
        @endforeach
    </td>
    <td class="p-1 text-xs text-slate-700">{{ $post->created_at?->format('d/m/Y') }}</td>
    <td class="flex justify-end items-center gap-1">
        @if ($post->deleted_at === null)
            <button type="button" wire:click="archivePost" wire:confirm="Are you sure ?" title="Archive" class="p-1 bg-blue-600 rounded-md place-items-center text-white text-base leading-none">
                <span>🗃️</span>
            </button>
        @else
            <button type="button" wire:click="restorePost" wire:confirm="Are you sure ?" title="Archive" class="p-1 bg-green-600 rounded-md place-items-center text-white text-base leading-none">
                <span>↩</span>
            </button>
            <button type="button" wire:click="$parent.deletePost({{ $post->id }})" wire:confirm="Are you sure ?" title="Delete" class="p-1 bg-red-600 rounded-md place-items-center text-white text-base leading-none">
                <span>🗑️</span>
            </button>
        @endif
    </td>
</tr>
