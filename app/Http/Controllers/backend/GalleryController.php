<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleripage = Gallery::all();
        return view ('backend.gallery.index', compact('galleripage'));
    }

    public function create()
    {
        return view('backend.gallery.create');
    }
    public function store(Request $request)  
    {
       
         
        $galleripage = new Gallery;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/gallery/', $filename);
            $galleripage->image = $filename;
        }
        $galleripage->title = $request->input('title');
        $galleripage->sub_title = $request->input('sub_title');
        $galleripage->save();
        return redirect()->route('galleries.index');
    }
    
    
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $galleripage = Gallery::find($id);
        return view('backend.gallery.edit', compact('galleripage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $galleripage = Gallery::find($id);
        $galleripage->title = $request->input('title');

        if ($request->hasFile('image')) {
            // Check if there's an old image and delete it
            if ($galleripage->image) {
                $oldImagePath = public_path('uploads/client/' . $galleripage->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            // Upload the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/client/', $filename);
    
            // Update the image field in the database
            $galleripage->image = $filename;
        }
    
        $galleripage->sub_title = $request->input('sub_title');
        $galleripage->update();
        return redirect()->route('galleries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $galleripage = Gallery::find($id);
        $galleripage->delete();
        return redirect()->route('galleries.index');
    }
}
