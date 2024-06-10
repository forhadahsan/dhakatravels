<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ourclient;

class OurClientController extends Controller
{
    public function index()
    {
        $clientpage = Ourclient::all();
        return view ('backend.client.index', compact('clientpage'));
    }

    public function create()
    {
        return view('backend.client.create');
    }
    public function store(Request $request)  
    {
       
         
        $clientpage = new Ourclient;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/client/', $filename);
            $clientpage->image = $filename;
        }
        $clientpage->title = $request->input('title');
        $clientpage->client_name = $request->input('client_name');
        $clientpage->profession = $request->input('profession');
        $clientpage->save();
        return redirect()->route('ourclients.index');
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
        $clientpage = Ourclient::find($id);
        return view('backend.client.edit', compact('clientpage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $clientpage = Ourclient::find($id);
        if ($request->hasFile('image')) {
            // Check if there's an old image and delete it
            if ($clientpage->image) {
                $oldImagePath = public_path('uploads/client/' . $clientpage->image);
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
            $clientpage->image = $filename;
        }
    
        $clientpage->title = $request->input('title');
        $clientpage->client_name = $request->input('client_name');
        $clientpage->profession = $request->input('profession');

        $clientpage->update();
        return redirect()->route('ourclients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $clientpage = Ourclient::find($id);
        $clientpage->delete();
        return redirect()->route('ourclients.index');
    }
}
