<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Page') }}
        </h2>
    </x-slot>

    <script src="https://cdn.tiny.cloud/1/c2rvwzuv2g1h71xkg4jk4aud468n3cmkelgz5013srfrdqo7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <div class="flex flex-col lg:flex-row gap-6 p-6">
        <!-- Sidebar -->
        <div class="w-full lg:w-1/4 bg-gray-900 p-6 rounded-lg shadow-lg">
            <h3 class="text-white text-lg font-bold mb-4">Drag & Drop Elements</h3>
            <div class="grid grid-cols-3 gap-4">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/book-open-reader.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/book-open-reader.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/euro-sign.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/euro-sign.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/icto version imprimable.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/icto version imprimable.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/insta.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/insta.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/magnifying-glass.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/magnifying-glass.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto bars menu burger.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto bars menu burger.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto boussole.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto boussole.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto calendrier.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto calendrier.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto checked.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto checked.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto convaincre.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto convaincre.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto dev act lib.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto dev act lib.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto dev act lib2.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto dev act lib2.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto dev activité libérale.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto dev activité libérale.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto envoi demande.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto envoi demande.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto formation bilan année.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto formation bilan année.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto newsletter.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto newsletter.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto smiley.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto smiley.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto user.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto user.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_elearning_sfp.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_elearning_sfp.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_enveloppe_sfp.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_enveloppe_sfp.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_euro_sfp.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_euro_sfp.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_fb_SFP.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_fb_SFP.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_fleche_sfp.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_fleche_sfp.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_heures_sfp.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_heures_sfp.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_insta_sfp.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_insta_sfp.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_linkedin_sfp.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_linkedin_sfp.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_localisation_sfp.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_localisation_sfp.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_loupe.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_loupe.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_poignéemain_sfp.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_poignéemain_sfp.png') }}">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/sablier.png') }}" 
                     class="draggable fixed-size-image cursor-pointer" 
                     draggable="true" 
                     data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/sablier.png') }}">
            </div>
        </div>

        <!-- Main Content -->
        <div class="w-full lg:w-3/4 bg-white p-6 rounded-lg shadow-lg">
            <form action="{{ route('pages.update', $page->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Title Input -->
                <div>
                    <label class="block text-lg font-semibold text-gray-700">Page Title:</label>
                    <input type="text" name="title" value="{{ $page->title }}" class="w-full border border-gray-300 p-3 rounded-lg focus:ring focus:ring-blue-300" required>
                </div>

                <!-- Content Input -->
                <div>
                    <label class="block text-lg font-semibold text-gray-700">Page Content:</label>
                    <textarea id="editor" name="content" class="w-full border border-gray-300 p-3 rounded-lg">
                        {{ $page->content }}
                    </textarea>
                </div>

                <!-- Buttons -->
                <div class="flex justify-between">
                    <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        Save Changes
                    </button>
                    <a href="{{ route('pages.index') }}" class="px-6 py-3 bg-gray-600 text-white rounded-lg hover:bg-gray-700">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Initialize TinyMCE
        tinymce.init({
            selector: '#editor',
            height: 600,
            plugins: 'advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
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
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }
    </style>

</x-app-layout>
