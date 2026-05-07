<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Todo
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <form method="POST" action="{{ route('todos.update', $todo) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">
                            Title
                        </label>

                        <input type="text"
                               name="title"
                               value="{{ old('title', $todo->title) }}"
                               class="w-full border rounded px-3 py-2 mt-1">

                        @error('title')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">
                            Description
                        </label>

                        <textarea name="description"
                                  class="w-full border rounded px-3 py-2 mt-1"
                                  rows="4">{{ old('description', $todo->description) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="flex items-center">
                            <input type="checkbox"
                                   name="is_completed"
                                   value="1"
                                {{ $todo->is_completed ? 'checked' : '' }}>
                            <span class="ml-2">Completed</span>
                        </label>
                    </div>

                    <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-black px-4 py-2 rounded">
                        Save Changes
                    </button>
`
                </form>

            </div>

        </div>
    </div>
</x-app-layout>
