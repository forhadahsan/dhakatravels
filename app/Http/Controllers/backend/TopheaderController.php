<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tophead;
use Illuminate\Http\RedirectResponse;

class TopheaderController extends Controller
{
    
     public function index()
    {
        $topindex = Tophead::all();
        return view ('backend.tophead.index', compact('topindex'));
    }

    public function create()
    {
        return view('backend.tophead.create');
    }

    public function store(Request $request)  
    {
         
        $topheadstore = new Tophead;
        $topheadstore->email = $request->input('email');
        $topheadstore->phone = $request->input('phone');
        $topheadstore->save();
        return redirect()->route('topheader.index');
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
        $topheadedit = Tophead::find($id);
        return view('backend.tophead.edit', compact('topheadedit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $topheadedit = Tophead::find($id);
        $topheadedit->email = $request->input('email');
        $topheadedit->phone = $request->input('phone');
        $topheadedit->update();
        return redirect()->route('topheader.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $topheadedit = Tophead::find($id);
        $topheadedit->delete();
        return redirect()->route('topheader.index');
    }
   
}
