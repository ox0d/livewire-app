<div class="flex flex-col items-center justify-center">
    <h1 class="text-3xl font-bold mb-3">
        Current time is: {{ now() }}
    </h1>
    <button wire:click="$refresh" class="py-2 px-4 bg-blue-500 hover:bg-blue-600 rounded-lg">
        Refresh time
    </button>
</div>