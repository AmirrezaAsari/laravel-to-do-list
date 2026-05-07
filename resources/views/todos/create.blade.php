<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Todo
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-black shadow-sm sm:rounded-lg p-6">

                <form method="POST" action="{{ route('todos.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">
                            Title
                        </label>

                        <input type="text"
                               name="title"
                               value="{{ old('title') }}"
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
                                  rows="4">{{ old('description') }}</textarea>
                    </div>

                    <button type="submit"
                            class="bg-green-500 hover:bg-green-600 text-black px-4 py-2 rounded">
                        Store Todo
                    </button>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>
