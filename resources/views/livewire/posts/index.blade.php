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
                <livewire:post-row :key="$post->id" :$post />
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
