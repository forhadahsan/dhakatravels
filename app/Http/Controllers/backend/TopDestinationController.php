<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topdestination;

class TopDestinationController extends Controller
{
    public function index() {
        $distinationpage = Topdestination::all();
        return view ('backend.topdestination.index', compact('distinationpage'));
    }
    public function create() {
        return view ('backend.topdestination.create');
    }
    public function store(Request $request) {
        $distinationpage = new Topdestination;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/topdestination/', $filename);
            $distinationpage->image = $filename;
        }
        $distinationpage->country_name = $request->input('country_name');
        $distinationpage->town = $request->input('town');
        $distinationpage->save();
        return redirect()->route('topdestination.index');
    }
    public function edit(string $id) {
        $distinationpage = Topdestination::find($id);
        return view ('backend.topdestination.edit', compact('distinationpage'));
    }
    public function update(Request $request, string $id) {
        $distinationpage = Topdestination::find($id);
        if ($request->hasFile('image')) {
            // Check if there's an old image and delete it
            if ($distinationpage->image) {
                $oldImagePath = public_path('uploads/topdestination/' . $distinationpage->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            // Upload the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/topdestination/', $filename);
    
            // Update the image field in the database
            $distinationpage->image = $filename;
        }
        $distinationpage->country_name = $request->input('country_name');
        $distinationpage->town = $request->input('town');
        $distinationpage->update();
        return redirect()->route('topdestination.index');
    }
    public function destroy($id){
        $distinationpage = Topdestination::find($id);
        $distinationpage->delete();
        return redirect()->route('topdestination.index');
    }
}
