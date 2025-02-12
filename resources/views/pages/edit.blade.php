<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Page') }}
        </h2>
    </x-slot>
    
    <div class="max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <form action="{{ route('pages.update', $page) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Title Input -->
            <label class="block text-lg font-semibold">Title:</label>
            <input type="text" name="title" value="{{ $page->title }}" class="w-full border p-2 rounded mt-1" required>

            <!-- Content Input with TinyMCE -->
            <label class="block mt-4 text-lg font-semibold">Content:</label>
            <textarea id="editor" name="content" class="w-full border p-2 rounded mt-1">{{ $page->content }}</textarea>

            <!-- Buttons -->
            <div class="mt-6 flex items-center justify-between">
                <button type="submit"
                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                    ✅ Update Page
                </button>

                <a href="{{ route('pages.index') }}"
                   class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">
                    ⬅ Back to CMS
                </a>
            </div>
        </form>
    </div>

    <!-- TinyMCE Script -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script><script src="https://cdn.tiny.cloud/1/c2rvwzuv2g1h71xkg4jk4aud468n3cmkelgz5013srfrdqo7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script >
    tinymce.init({
            selector: '#editor',
            height: 400,
            plugins: 'advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help | fontsizeselect forecolor backcolor',
            branding: false
        });
    </script>
</x-app-layout>
