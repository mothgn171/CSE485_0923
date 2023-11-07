<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class majorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   
        $majors = Major::orderBy("created_at", "desc")->paginate(8);
        

        return view('majors.index', compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('majors.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required',
            
        ]);
        $major = new major();
        $major->name = $validateData['name'];
        $major->description = $validateData['description'];
        $major->duration = $validateData['duration'];
        
        

        $major->save();
        Session::flash('success', 'Add New major Successfully');
        return redirect()->route('majors.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(major $major)
    {
        //
        return view('majors.show', compact('major'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(major $major)
    {
        //
        return view('majors.edit', compact('major'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required',
        ]);

        $major = major::find($id);
        $major->name = $validateData['name'];
        $major->description = $validateData['description'];
        $major->duration = $validateData['duration'];

        
        $major->save();
        return redirect()->route('majors.index')->with('success', 'Major updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(major $major)
    {
        //
        $major->delete();
        return redirect()->route('majors.index')->with('success', 'Major deleted successfully');
    }
}
