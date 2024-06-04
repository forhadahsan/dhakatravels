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
        $aboutpage->mid_header = $request->input('mid_header');
        $aboutpage->mid_content = $request->input('mid_content');
        if ($request->hasFile('image1')) {
            $file = $request->file('image1'); 
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            $extension = $file->getClientOriginalExtension();

            if (in_array($extension, $allowedExtensions)) { 
                $filename = time() . '.' . $extension; 
                $path = $file->storeAs('uploads/about', $filename, 'public'); 
                $aboutpage->image1 = $filename;
            } else {
                return back()->withErrors(['image1' => 'Invalid file type. Only jpg, jpeg, png, and gif are allowed.']);
            }
        }
        if ($request->hasFile('image2')) {
            $file = $request->file('image2'); 
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            $extension = $file->getClientOriginalExtension();

            if (in_array($extension, $allowedExtensions)) { 
                $filename = time() . '.' . $extension; 
                $path = $file->storeAs('uploads/about', $filename, 'public'); 
                $aboutpage->image2 = $filename;
            } else {
                return back()->withErrors(['image2' => 'Invalid file type. Only jpg, jpeg, png, and gif are allowed.']);
            }
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
        $aboutpage->mid_header = $request->input('mid_header');
        $aboutpage->mid_content = $request->input('mid_content');
        $aboutpage->image1 = $request->input('image1');
        $aboutpage->image2 = $request->input('image2');
        $aboutpage->update();
        return redirect()->route('abouts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $aboutpage = About::all();
        $aboutpage->destroy();
        return redirect()->route('abouts.index');
    }
}
