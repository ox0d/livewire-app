<div class="flex flex-col items-center">
    <button wire:click.window.throttle.5000ms="increment(5)"
        class="py-2 px-4 bg-blue-500 hover:bg-blue-600 rounded-lg">Increment</button>
    <h1 class="text-3xl font-bold m-3">{{ $count }}</h1>
    <button wire:click="decrement(5)" class="py-2 px-4 bg-red-500 hover:bg-red-600 rounded-lg">Decrement</button>

    <button wire:click="$refresh" class="mt-10 py-2 px-4 bg-green-500 hover:bg-green-600 rounded-lg">Refresh</button>
</div>