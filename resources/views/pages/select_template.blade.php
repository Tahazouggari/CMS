<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Choose a Template') }}
        </h2>
    </x-slot>

    <div class="max-w-5xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <h3 class="text-lg font-semibold mb-4">Select a template to start with:</h3>

        <div class="grid grid-cols-3 gap-6">
            @foreach($templates as $template)
                <a href="{{ route('pages.create', ['template' => $template]) }}" 
                   class="block px-6 py-4 bg-gray-200 rounded-lg hover:bg-gray-300 transition text-center">
                    {{ ucfirst($template) }} Template
                </a>
            @endforeach
        </div>

        <div class="mt-6">
            <a href="{{ route('pages.chooseType') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                ← Back
            </a>
        </div>
    </div>
</x-app-layout>
