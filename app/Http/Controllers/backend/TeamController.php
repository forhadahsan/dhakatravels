<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    
    public function index() {
        $teampage = Team::all();
        return view ('backend.team.index', compact('teampage'));
    }
    public function create() {
        return view ('backend.team.create');
    }
    public function store(Request $request) {
        $teampage = new Team;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/team/', $filename);
            $teampage->image = $filename;
        }
        $teampage->name = $request->input('name');
        $teampage->designation = $request->input('designation');
        $teampage->save();
        return redirect()->route('ourteams.index');
    }
    public function edit(string $id) {
        $teampage = Team::find($id);
        return view ('backend.team.edit', compact('teampage'));
    }
    public function update(Request $request, string $id) {
        $teampage = Team::find($id);
        if ($request->hasFile('image')) {
            // Check if there's an old image and delete it
            if ($teampage->image) {
                $oldImagePath = public_path('uploads/team/' . $teampage->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            // Upload the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/team/', $filename);
    
            // Update the image field in the database
            $teampage->image = $filename;
        }
        $teampage->name = $request->input('name');
        $teampage->designation = $request->input('designation');
        $teampage->update();
        return redirect()->route('teams.index');
    }
    public function destroy($id){
        $teampage = Team::find($id);
        $teampage->delete();
        return redirect()->route('teams.index');
    }

}
