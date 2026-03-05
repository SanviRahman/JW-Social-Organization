<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Carbon\Carbon; // make sure to import Carbon

use Illuminate\Support\Facades\Storage;

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
            'image'       => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'date'        => ['nullable', 'date'],
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads/blogs', 'public');
            $data['image'] = 'storage/' . $path;
        }

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
            'image'       => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'date'        => ['nullable', 'date'],
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if it exists and is not a default asset
            if ($blog->image && str_contains($blog->image, 'storage/uploads/')) {
                Storage::disk('public')->delete(str_replace('storage/', '', $blog->image));
            }
            $path = $request->file('image')->store('uploads/blogs', 'public');
            $data['image'] = 'storage/' . $path;
        }

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