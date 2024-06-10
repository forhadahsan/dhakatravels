<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contect;

class ContactController extends Controller
{
    public function index()
    {
        $contactpage = Contect::all();
        return view ('backend.contact.index', compact('contactpage'));
    }

    public function create()
    {
        return view('backend.contact.create');
    }

    public function store(Request $request)  
    {
         
        $contactpage = new Contect;
        $contactpage->sub_title = $request->input('sub_title');
        $contactpage->address = $request->input('address');
        $contactpage->email = $request->input('email');
        $contactpage->phone = $request->input('phone');
        $contactpage->save();
        return redirect()->route('contacts.index');
        // return redirect('topheader.index')->with('status',' Added Successfully');
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
        $contactpage = Contect::find($id);
        return view('backend.contact.edit', compact('contactpage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contactpage = Contect::find($id);
        $contactpage->sub_title = $request->input('sub_title');
        $contactpage->address = $request->input('address');
        $contactpage->email = $request->input('email');
        $contactpage->phone = $request->input('phone');
        $contactpage->update();
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contactpage = Contect::find($id);
        $contactpage->delete();
        return redirect()->route('contacts.index');
    }

}
