<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Carbon\Carbon; // make sure to import Carbon

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image'       => ['nullable', 'string', 'max:255'],
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'date'        => ['nullable', 'date'],
        ]);

        // Format the date if it is present
        if (!empty($data['date'])) {
            $data['date'] = Carbon::parse($data['date'])->format('Y-m-d');
        }

        Blog::create($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'image'       => ['nullable', 'string', 'max:255'],
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'date'        => ['nullable', 'date'],
        ]);

        // Format the date if it is present
        if (!empty($data['date'])) {
            $data['date'] = Carbon::parse($data['date'])->format('Y-m-d');
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted');
    }
}