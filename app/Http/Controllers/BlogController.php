<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index ()
    {
        $blogs = Blog::where('status', 1)->latest()->get();
        return view('admin.blogs.index',[
            'blogs' => $blogs
        ]);
    }

    public function add () {
        return view('admin.blogs.add');
    }

    public function store(Request $request)
    {
        $blogAttribute = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'author' => ['required'],
            'image' => ['required', File::types(['png', 'jpg', 'webp'])],
            'status' => ['required'],
        ]);

        $imagePath = $request->image->store('Blogs');

        $blog = Blog::create([
            'user_id' => Auth::user()->id,
            'title' => $blogAttribute['title'],
            'description' => $blogAttribute['description'],
            'author' => $blogAttribute['author'],
            'image' => $imagePath,
            'status' => $blogAttribute['status']
        ]);

        return redirect()->route('admin.blogs');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit',[
            'blog' => $blog
        ]);
    }

    public function update(Blog $blog )
    {
        $blogAttribute = request()->validate([
            'title' => ['required'],
            'description' => ['required'],
            'author' => ['required'],
            'image' => [ File::types(['png', 'jpg', 'webp'])],
            'status' => ['required'],
        ]);

        if(request()->image)
        {
            Storage::disk('public')->delete($blog->image);
            $imagePath = request()->image->store('Blogs');
            $blog = $blog->update([
                'user_id' => Auth::user()->id,
                'title' => $blogAttribute['title'],
                'description' => $blogAttribute['description'],
                'author' => $blogAttribute['author'],
                'image' => $imagePath,
                'status' => $blogAttribute['status']
            ]);
            
            return redirect()->route('admin.blogs');
        }
        

        $blog = $blog->update([
            'user_id' => Auth::user()->id,
            'title' => $blogAttribute['title'],
            'description' => $blogAttribute['description'],
            'author' => $blogAttribute['author'],
            'status' => $blogAttribute['status']
        ]);

        return redirect()->route('admin.blogs');
    }
}
