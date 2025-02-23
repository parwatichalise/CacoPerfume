<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('Admin.Blog.index', compact('blogs'));
    }
    public function create()
    {
        return view('Admin.Blog.create');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('Admin.Blog.index', compact('blog'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:blogs,slug|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'published' => 'required|boolean',
        ]);

        $data = $request->only(['title', 'slug', 'content', 'published']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        Blog::create($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post created successfully!');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('Admin.Blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:blogs,slug,' . $id . '|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'published' => 'required|boolean',
        ]);

        $blog = Blog::findOrFail($id);

        $data = $request->only(['title', 'slug', 'content', 'published']);

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::delete('public/' . $blog->image);
            }
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post updated successfully!');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted!');
    }
}
