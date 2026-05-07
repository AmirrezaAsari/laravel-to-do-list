<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                My Todos
            </h2>

            <a href="{{ route('todos.create') }}"
               class="bg-blue-500 hover:bg-blue-600 text-black px-4 py-2 rounded text-lg">
                +
            </a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-black shadow-sm sm:rounded-lg p-6">

                @forelse($todos as $todo)

                    <div class="border-b py-4 flex justify-between items-center">

                        <div>
                            <h3 class="text-lg font-bold">
                                {{ $todo->title }}
                            </h3>

                            <p class="text-gray-600">
                                {{ $todo->description }}
                            </p>

                            <p class="text-sm mt-1">
                                Status:
                                <span class="{{ $todo->is_completed ? 'text-green-600' : 'text-yellow-600' }}">
                                    {{ $todo->is_completed ? 'Completed' : 'Pending' }}
                                </span>
                            </p>
                        </div>

                        <a href="{{ route('todos.edit', $todo) }}"
                           class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded">
                            Edit
                        </a>

                    </div>

                @empty

                    <p class="text-gray-500">No todos yet.</p>

                @endforelse

            </div>

        </div>
    </div>
</x-app-layout>
