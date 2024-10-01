<div class="flex flex-col-2 items-center">
    <div class="p-20 flex flex-col items-center">
        <h1 class="text-5xl font-bold mb-4 border-b border-slate-100">Todos</h1>
        <ul class="list-disc list-outside space-y-4">
            @foreach ($todos as $todo)
                <li class="text-xl">
                    {{ $todo['title'] . ' - ' . ($todo['completed'] ? 'Completed' : 'Not Completed') }}
                </li>
            @endforeach
        </ul>
        <button wire:click="popTodo"
            class="mt-5 w-full bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
            Remove Todo
        </button>
    </div>
    {{ $title . ' - ' . $state }}
    <div class="p-20 flex flex-col items-center">
        <form wire:submit.prevent="addTodo" class="space-y-4">
            <div class="flex items-center bg-slate-700 p-3 rounded-lg shadow-lg">
                <input wire:model="title" type="text" placeholder="Add a todo..."
                    class="flex-1 bg-transparent text-white placeholder-slate-400 border-0 outline-none" />
                <div class="flex items-center ml-4">
                    <input wire:model.live.throttle.1000ms="state" type="checkbox" id="state" class="hidden" />
                    <label for="state" class="flex items-center cursor-pointer text-sm text-slate-300">
                        <span class="w-5 h-5 mr-2 border rounded-md flex items-center justify-center border-slate-500">
                            <!-- SVG checkmark (hidden by default) -->
                            <svg class="w-3 h-3 text-white {{ $state ? 'block' : 'hidden' }}" id="checkmarkSVG"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        Completed
                    </label>
                </div>
            </div>
            <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                Add Todo
            </button>
        </form>
    </div>
</div>