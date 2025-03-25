<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('How to Use CMSEnsi') }}
        </h2>
    </x-slot>

    <div class="max-w-6xl mx-auto p-8 bg-white shadow-md rounded-lg">
        <!-- Introduction Section -->
        <div class="mb-8">
            <h3 class="text-xl font-bold text-gray-800">Welcome to CMSEnsi</h3>
            <p class="text-gray-600 mt-2">
                This guide will help you navigate and use CMSEnsi effectively to create, edit, and manage your web pages.
            </p>
        </div>

        <!-- Step-by-Step Instructions -->
        <div class="space-y-6">
            <div class="p-6 bg-gray-100 rounded-lg shadow-sm">
                <h4 class="text-lg font-semibold text-gray-800">1. Create a New Page</h4>
                <p class="text-gray-600 mt-2">
                    To create a new page, click on the <strong>"Create New Page"</strong> button in the dashboard. You can either start from scratch or choose a template.
                </p>
            </div>

            <div class="p-6 bg-gray-100 rounded-lg shadow-sm">
                <h4 class="text-lg font-semibold text-gray-800">2. Use the Rich Text Editor</h4>
                <p class="text-gray-600 mt-2">
                    CMSEnsi includes a powerful editor (TinyMCE) that allows you to format text, insert images, and customize your content with ease.
                </p>
            </div>

            <div class="p-6 bg-gray-100 rounded-lg shadow-sm">
                <h4 class="text-lg font-semibold text-gray-800">3. Save and Preview</h4>
                <p class="text-gray-600 mt-2">
                    Once you're done editing, click <strong>"Save"</strong> to store your changes. You can preview the page to see how it looks before publishing.
                </p>
            </div>

            <div class="p-6 bg-gray-100 rounded-lg shadow-sm">
                <h4 class="text-lg font-semibold text-gray-800">4. Edit Existing Pages</h4>
                <p class="text-gray-600 mt-2">
                    To edit an existing page, go to the <strong>"Manage Pages"</strong> section, find the page you want to edit, and click the <strong>"Edit"</strong> button.
                </p>
            </div>

            <div class="p-6 bg-gray-100 rounded-lg shadow-sm">
                <h4 class="text-lg font-semibold text-gray-800">5. Delete Pages</h4>
                <p class="text-gray-600 mt-2">
                    If you no longer need a page, you can delete it by clicking the <strong>"Delete"</strong> button in the <strong>"Manage Pages"</strong> section. Be cautious, as this action is irreversible.
                </p>
            </div>
        </div>

        <!-- Additional Resources -->
        <div class="mt-8 p-6 bg-gray-50 rounded-lg shadow-sm">
            <h4 class="text-lg font-semibold text-gray-800">Additional Resources</h4>
            <ul class="list-disc list-inside text-gray-600 mt-3 space-y-2">
                <li>Use the <strong>drag-and-drop</strong> feature to insert images or elements into your page.</li>
                <li>Refer to the <strong>video tutorial</strong> below for a step-by-step walkthrough.</li>
                <li>Contact the administrator if you encounter any issues.</li>
            </ul>
        </div>

        <!-- Video Tutorial -->
        <div class="mt-8">
            <h4 class="text-lg font-semibold text-gray-800">Video Tutorial</h4>
            <div class="relative w-full mt-4" style="padding-bottom: 56.25%; position: relative; height: 0; overflow: hidden;">
                <iframe class="absolute top-0 left-0 w-full h-full rounded-lg shadow-lg"
                        src="https://www.youtube.com/embed/nq4IxPW5bdM?rel=0"
                        title="CMSEnsi Tutorial"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                </iframe>
            </div>
        </div>

        <!-- Back to Dashboard -->
        <div class="mt-8 flex justify-end">
            <a href="{{ route('dashboard') }}" 
               class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Back to Dashboard
            </a>
        </div>
    </div>
</x-app-layout>
