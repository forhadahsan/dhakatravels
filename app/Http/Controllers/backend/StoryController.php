<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Story;

class StoryController extends Controller
{
    
    public function index() {
        $storypage = Story::all();
        return view ('backend.story.index', compact('storypage'));
    }
    public function create() {
        return view ('backend.story.create');
    }
    public function store(Request $request) {
        $storypage = new Story;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/story/', $filename);
            $storypage->image = $filename;
        }
        $storypage->title = $request->input('title');
        $storypage->sub_title = $request->input('sub_title');
        $storypage->save();
        return redirect()->route('stories.index');
    }
    public function edit(string $id) {
        $storypage = Story::find($id);
        return view ('backend.story.edit', compact('storypage'));
    }
    public function update(Request $request, string $id) {
        $storypage = Story::find($id);
        if ($request->hasFile('image')) {
            // Check if there's an old image and delete it
            if ($storypage->image) {
                $oldImagePath = public_path('uploads/story/' . $storypage->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            // Upload the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/story/', $filename);
    
            // Update the image field in the database
            $storypage->image = $filename;
        }
        $storypage->title = $request->input('title');
        $storypage->sub_title = $request->input('sub_title');
        $storypage->update();
        return redirect()->route('stories.index');
    }
    public function destroy($id){
        $storypage = Story::find($id);
        $storypage->delete();
        return redirect()->route('stories.index');
    }
}
