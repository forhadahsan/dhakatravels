<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Tophead;
use Illuminate\Support\Facades\Storage;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $aboutpage = About::all();
        return view ('backend.about.index', compact('aboutpage'));
    }

    public function create()
    {
        return view('backend.about.create');
    }

    public function store(Request $request)  
    {
       
         
        $aboutpage = new About;
        $aboutpage->top_content = $request->input('top_content');
        $aboutpage->services = $request->input('services');
        $aboutpage->service_content = $request->input('service_content');
        $aboutpage->mid_header = $request->input('mid_header');
        $aboutpage->mid_content = $request->input('mid_content');
        if($request->hasfile('image1'))
        {
            $file = $request->file('image1');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/gallery/', $filename);
            $aboutpage->image1 = $filename;
        }
        if($request->hasfile('image2'))
        {
            $file = $request->file('image2');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/gallery/', $filename);
            $aboutpage->image2 = $filename;
        }
        $aboutpage->save();
        return redirect()->route('abouts.index');
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
        $aboutpage = About::find($id);
        return view('backend.about.edit', compact('aboutpage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aboutpage = About::find($id);
        $aboutpage->top_content = $request->input('top_content');
        $aboutpage->services = $request->input('services');
        $aboutpage->service_content = $request->input('service_content');
        $aboutpage->mid_header = $request->input('mid_header');
        $aboutpage->mid_content = $request->input('mid_content');
        if ($request->hasFile('image1')) {
            // Check if there's an old image and delete it
            if ($aboutpage->image1) {
                $oldImagePath = public_path('uploads/team/' . $aboutpage->image1);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            // Upload the new image
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/team/', $filename);
    
            // Update the image field in the database
            $aboutpage->image1 = $filename;
        }
        if ($request->hasFile('image2')) {
            // Check if there's an old image and delete it
            if ($aboutpage->image2) {
                $oldImagePath = public_path('uploads/team/' . $aboutpage->image2);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            // Upload the new image
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/team/', $filename);
    
            // Update the image field in the database
            $aboutpage->image2 = $filename;
        }
        $aboutpage->update();
        return redirect()->route('abouts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {  
        $aboutpage = About::find($id);
        $aboutpage->delete();
        return redirect()->route('abouts.index');
    }
}
