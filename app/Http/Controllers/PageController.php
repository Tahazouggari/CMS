<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    // Show list of pages
    public function index()
    {
        $pages = Page::all();
        return view('pages.index', compact('pages'));
    }

    // ✅ Show page selection form (Start from scratch or choose a template)
    public function chooseType()
    {
        return view('pages.choose_type');
    }

    // ✅ Show template selection page
    public function selectTemplate()
    {
        $templates = ['business', 'blog', 'portfolio', 'landing'];
        return view('pages.select_template', compact('templates'));
    }

    // ✅ Show create page form (Handles optional template parameter)
    public function create(Request $request)
    {
        $template = $request->query('template', 'default'); // Default is blank
        return view('pages.create', compact('template'));
    }

    // ✅ Store new page in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'template' => 'nullable|string|max:50'
        ]);

        Page::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'template' => $request->template ?? 'default',
        ]);

        return redirect()->route('pages.index')->with('success', 'Page created successfully.');
    }

    // Show edit form
    public function edit(Page $page)
    {
        return view('pages.edit', compact('page'));
    }

    // Update page
    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $page->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
        ]);

        return redirect()->route('pages.index')->with('success', 'Page updated successfully.');
    }

    // Delete a page
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'Page deleted successfully.');
    }

    // Display a specific page
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('pages.show', compact('page'));
    }

    public function showTemplate($template)
{
    // Check if template exists
    if (!view()->exists("templates.$template")) {
        abort(404, "Template not found");
    }

    return view("templates.$template");
}

}
