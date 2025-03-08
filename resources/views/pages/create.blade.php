<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Page') }}
        </h2>
    </x-slot>

    <script src="https://cdn.tiny.cloud/1/c2rvwzuv2g1h71xkg4jk4aud468n3cmkelgz5013srfrdqo7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <div class="flex">
        <!-- Sidebar containing Drag & Drop -->
        <div class="w-20 bg-gray-900 p-4 rounded-xl shadow-lg flex flex-col items-center gap-4">
            <p class="text-white text-sm font-semibold">Drag & Drop</p>
            <div class="space-y-4">
                <img src="https://s.hs-data.com/bilder/spieler/gross/13029.jpg" class="draggable fixed-size-image cursor-pointer" draggable="true" data-url="https://via.placeholder.com/100">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/book-open-reader.png') }}" 
     class="draggable fixed-size-image cursor-pointer" 
     draggable="true" 
     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/book-open-reader.png') }}">


                <img src="https://via.placeholder.com/100/00ff00" class="draggable fixed-size-image cursor-pointer" draggable="true" data-url="https://via.placeholder.com/100/00ff00">
            </div>
        </div>

        <!-- Main Content -->
        <div class="w-full max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg">
            <form action="{{ route('pages.store') }}" method="POST">
                @csrf

                <!-- Title Input -->
                <label class="block text-lg font-semibold">Title:</label>
                <input type="text" name="title" class="w-full border p-2 rounded mt-1" placeholder="Enter page title" required>

                <!-- Content Input with TinyMCE -->
                <label class="block mt-4 text-lg font-semibold">Content:</label>
                <textarea id="editor" name="content" class="w-full border p-2 rounded mt-1"></textarea>

                <!-- Buttons -->
                <div class="mt-6 flex items-center justify-between">
                    <button type="submit"
                            class="px-4 py-2 bg-green-500 text-black rounded hover:bg-green-600 transition">
                        Create Page
                    </button>

                    <a href="{{ route('pages.index') }}"
                    class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">
                        Back to CMS
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Initialize TinyMCE
        tinymce.init({
            selector: '#editor',
            height: 900,
            plugins: 'advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help | fontsizeselect forecolor backcolor',
            branding: false
        });

        // Drag and drop images
        document.querySelectorAll('.draggable').forEach(img => {
            img.addEventListener('dragstart', function (event) {
                event.dataTransfer.setData('text/plain', event.target.dataset.url);
            });
        });

        document.getElementById('editor').addEventListener('drop', function (event) {
            event.preventDefault();
            let imageUrl = event.dataTransfer.getData('text/plain');
            tinymce.activeEditor.execCommand('mceInsertContent', false, `<img src="${imageUrl}" alt="Dropped Image" width="150">`);
        });

        document.getElementById('editor').addEventListener('dragover', function (event) {
            event.preventDefault();
        });
    </script>

    <style>
        .fixed-size-image {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }
    </style>

</x-app-layout>
