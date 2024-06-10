<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $servicepage = Service::all();
        return view ('backend.service.index', compact('servicepage'));
    }

    public function create()
    {
        return view('backend.service.create');
    }
    public function store(Request $request)  
    {
       
         
        $servicepage = new Service;
        $servicepage->service_name = $request->input('service_name');
        $servicepage->service_content = $request->input('service_content');
        $servicepage->save();
        return redirect()->route('services.index');
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
        $servicepage = Service::find($id);
        return view('backend.service.edit', compact('servicepage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $servicepage = Service::find($id);
        $servicepage->service_name = $request->input('service_name');
        $servicepage->service_content = $request->input('service_content');
        $servicepage->update();
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $servicepage = Service::find($id);
        $servicepage->delete();
        return redirect()->route('services.index');
    }
}
