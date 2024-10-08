<div class="p-10 flex flex-col items-center justify-center">

    <span x-text="$wire.title"></span>

    <button type="button" x-on:click="$wire.store() = ''">Clear title</button>

    <h1 class="text-3xl font-bold">Create Post</h1>
    <form class="space-y-4 flex flex-col items-center justify-center" wire:submit.prevent="store()">
        <div class="w-full flex flex-col">
            <label for="title" class="text-lg">Title</label>
            <input type="text" id="title" class="border p-2 rounded-md text-slate-700" wire:model="title">
            @error('title') <span class="text-red-500 text-sm py-2">{{ $message }}</span> @enderror
        </div>
        <div class="w-full flex flex-col">
            <label for="content" class="text-lg">Content</label>
            <textarea id="content" class="border p-2 rounded-md text-slate-700" wire:model="content"></textarea>
            <small>Characteres: <span x-text="$wire.content.length"></span></small>
            @error('content') <span class="text-red-500 text-sm py-2">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">Create
            Post</button>
    </form>
</div>