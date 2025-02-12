<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('How to Use the CMS') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <h3 class="text-lg font-bold mb-4">Welcome to the CMS Guide</h3>
        
        <p>Here’s how you can create and edit pages:</p>

        <ul class="list-disc list-inside mt-2">
            <li>Click **"Create New Page"** to add a new page.</li>
            <li>Use the **rich text editor (TinyMCE)** to format your content.</li>
            <li>Click the **"Save"** button when you're done.</li>
            <li>To edit an existing page, go to the **CMS dashboard** and click "Edit".</li>
        </ul>

        <p class="mt-4"><strong>Formatting Options:</strong></p>
        <ul class="list-disc list-inside">
            <li><strong>B</strong> for Bold, <em>I</em> for Italic, <u>U</u> for Underline.</li>
            <li>Use the **text color & background color** options to highlight content.</li>
            <li>Click **"Insert Image"** to upload pictures.</li>
        </ul>

        <p class="mt-4">If you need more help, contact the admin.</p>

        <a href="{{ route('dashboard') }}" class="mt-6 inline-block bg-blue-500 text-black px-4 py-2 rounded hover:bg-blue-700">
            ⬅ Back to dashboard
        </a>
    </div>
</x-app-layout>
