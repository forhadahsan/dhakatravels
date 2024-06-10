<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function index() {
        $packagepage = Package::all();
        return view ('backend.package.index', compact('packagepage'));
    }
    public function create() {
        return view ('backend.package.create');
    }
    public function store(Request $request) {
        $packagepage = new Package;
        $packagepage->location = $request->input('location');
        $packagepage->duration = $request->input('duration');
        $packagepage->person = $request->input('person');
        $packagepage->area = $request->input('area');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/package/', $filename);
            $packagepage->image = $filename;
        }
        $packagepage->rating = $request->input('rating');
        $packagepage->price = $request->input('price');
        $packagepage->save();
        return redirect()->route('packages.index');
    }
    public function edit(string $id) {
        $packagepage = Package::find($id);
        return view ('backend.package.edit', compact('packagepage'));
    }
    public function update(Request $request, string $id) {
        $packagepage = Package::find($id);
        $packagepage->location = $request->input('location');
        $packagepage->duration = $request->input('duration');
        $packagepage->person = $request->input('person');
        $packagepage->area = $request->input('area');
        if ($request->hasFile('image')) {
            // Check if there's an old image and delete it
            if ($packagepage->image) {
                $oldImagePath = public_path('uploads/package/' . $packagepage->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            // Upload the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/package/', $filename);
    
            // Update the image field in the database
            $packagepage->image = $filename;
        }
        $packagepage->rating = $request->input('rating');
        $packagepage->price = $request->input('price');
        $packagepage->update();
        return redirect()->route('packages.index');
    }
    public function destroy($id)
    {
        $packagepage = Package::find($id);
        $packagepage->delete();
        return redirect()->route('packages.index');
    }
    

}
