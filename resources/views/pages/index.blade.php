<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CMS - Manage Pages') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <!-- Create New Page Button -->
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-xl font-bold text-gray-700">Pages List</h3>
            <a href="{{ route('pages.chooseType') }}" class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700">
                + Create New Page
            </a>
        </div>

        <!-- Pages Table -->
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300 text-left">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 p-4 text-gray-700 font-semibold">Title</th>
                        <th class="border border-gray-300 p-4 text-gray-700 font-semibold text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pages as $page)
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 p-4">{{ $page->title }}</td>
                            <td class="border border-gray-300 p-4 text-center">
                                <!-- View Button -->
                                <a href="{{ route('pages.show', $page->slug) }}"
                                   class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                                    View
                                </a>

                                <!-- Edit Button -->
                                <a href="{{ route('pages.edit', $page) }}"
                                   class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 ml-2">
                                    Edit
                                </a>

                                <!-- Delete Button -->
                                <form action="{{ route('pages.destroy', $page) }}" method="POST" class="inline-block ml-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600"
                                            onclick="return confirm('Are you sure you want to delete this page?');">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="text-center p-6 text-gray-500">No pages found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>