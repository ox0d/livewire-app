<div class="p-10 flex flex-col items-center justify-center">
    <h1 class="text-3xl font-bold">Posts</h1>
    <table class="w-1/2 mt-4 table-auto">
        <thead>
            <tr>
                <th class="border px-4 py-2">#</th>
                <th class="border px-4 py-2">Title</th>
                <th class="border px-4 py-2">Content</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <livewire:post-row wire:key="{{ $post->id }}" :post="$post" />
            @endforeach
        </tbody>
    </table>
</div>