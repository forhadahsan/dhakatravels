<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index() {
        $blogpage = Blog::all();
        return view ('backend.blog.index', compact('blogpage'));
    }
    public function create() {
        return view ('backend.blog.create');
    }
    public function store(Request $request) {
        $blogpage = new Blog;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/blog/', $filename);
            $blogpage->image = $filename;
        }
        $blogpage->subject = $request->input('subject');
        $blogpage->subject_details = $request->input('subject_details');
        $blogpage->save();
        return redirect()->route('blogs.index');
    }
    public function edit(string $id) {
        $blogpage = Blog::find($id);
        return view ('backend.blog.edit', compact('blogpage'));
    }
    public function update(Request $request, string $id) {
        $blogpage = Blog::find($id);
        if ($request->hasFile('image')) {
            // Check if there's an old image and delete it
            if ($blogpage->image) {
                $oldImagePath = public_path('uploads/blog/' . $blogpage->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            // Upload the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/blog/', $filename);
    
            // Update the image field in the database
            $blogpage->image = $filename;
        }
        $blogpage->subject = $request->input('subject');
        $blogpage->subject_details = $request->input('subject_details');
        $blogpage->update();
        return redirect()->route('blogs.index');
    }
    public function destroy($id){
        $blogpage = Blog::find($id);
        $blogpage->delete();
        return redirect()->route('blogs.index');
    }
}
