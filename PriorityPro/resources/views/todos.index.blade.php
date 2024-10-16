<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold">Your Todos</h3>
                        <a href="{{ route('todos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Add New Todo
                        </a>
                    </div>
                    
                    @if ($todos->count() > 0)
                        <ul class="divide-y divide-gray-200">
                            @foreach ($todos as $todo)
                                <li class="py-4 flex items-center justify-between">
                                    <div class="flex items-center">
                                        <input type="checkbox" class="mr-2" {{ $todo->completed ? 'checked' : '' }} onChange="event.preventDefault(); document.getElementById('toggle-form-{{ $todo->id }}').submit();">
                                        <span class="{{ $todo->completed ? 'line-through text-gray-500' : '' }}">{{ $todo->title }}</span>
                                    </div>
                                    <div>
                                        <a href="{{ route('todos.edit', $todo) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                                        <form action="{{ route('todos.destroy', $todo) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this todo?')">Delete</button>
                                        </form>
                                    </div>
                                    <form id="toggle-form-{{ $todo->id }}" action="{{ route('todos.toggle-complete', $todo) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('PATCH')
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-gray-500">No todos yet. Create one to get started!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
