<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct()
    // {
    //     if (Auth::check() && auth()->user()->email !== 'agency@example.com') {
    //         echo "Error 403: Unauthorized Access, please go back...!";
    //         exit;
    //     }
    // }
    public function index()
    {
        $blogs = Blog::all();
        return view('blogsbyrankothcj.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogsbyrankothcj.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
            'youtube_video_link' => 'nullable|url',
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $customPath = '/var/www/html/motomarket/public/storage/blogs';
            $imageName = uniqid() . '_' . $image->getClientOriginalName();
            $image->move($customPath, $imageName);
            $imagePath = 'blogs/' . $imageName;
        }
        Blog::create([
            'title' => $request->title,
            'is_faq' => (int)$request->is_faq,
            'content' => $request->content,
            'image' => $imagePath,
            'youtube_video_link' => $request->youtube_video_link,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blog-detail', compact('blog'));
    }

    public function list()
    {
        $blogs = Blog::latest()->get();
        return view('blogs', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($blogId)
    {
        $blog = Blog::find($blogId);
        return view('blogsbyrankothcj.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $blogId)
    {
        $blog = Blog::find($blogId);
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
            'youtube_video_link' => 'nullable|url',
        ]);
        if ($request->file('image')) {
            $image = $request->file('image');
            $customPath = '/var/www/html/motomarket/public/storage/blogs';
            $imageName = uniqid() . '_' . $image->getClientOriginalName();
            $image->move($customPath, $imageName);
            $blog->image = 'blogs/' . $imageName;
        }

        // $blog->update($request->all());
        $blog->update([
            'title' => $request->title,
            'is_faq' => (int)$request->is_faq,
            'content' => $request->content,
            'youtube_video_link' => $request->youtube_video_link,
            'image' => $blog->image,
        ]);
        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($blogId)
    {
        Blog::find($blogId)->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
