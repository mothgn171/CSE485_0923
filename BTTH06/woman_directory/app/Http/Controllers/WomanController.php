<?php

namespace App\Http\Controllers;

use App\Models\Woman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; 
use Illuminate\Support\Facades\Storage; // Add this line


class WomanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $showSearchForm = true;
        $search = $request->input('search');
        $women = Woman::where('name', 'like', '%' . $search . '%')->get();
        

        return view('women.index', ['women' => $women]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $types = ['Music', 'Writer', 'Model'];
        return view('women.add', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'name' => 'required',
            'biography' => 'required',
            'field_of_work' => 'required',
            'image' => 'required',
            'birth_date' => 'required',
        ]);
        $woman = new Woman();
        $woman->name = $validateData['name'];
        $woman->biography = $validateData['biography'];
        $woman->field_of_work = $validateData['field_of_work'];
        $woman->image = $validateData['image'];
        $woman->birth_date = $validateData['birth_date'];

        $woman->save();
        Session::flash('success', 'Add New woman Successfully');
        return redirect()->route('women.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Woman $woman)
    {
        //
        return view('women.show', compact('woman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Woman $woman)
    {
        //
        return view('women.edit', compact('woman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       

        $validator = $request->validate([
            'name' => 'required',
            'field_of_work' => 'required',
            'birth_date' => 'required',
            'biography' => 'required',
        ]);

        $woman = Woman::find($id);
        $woman->name = $validator['name'];
        $woman->field_of_work = $validator['field_of_work'];
        $woman->birth_date = $validator['birth_date'];
        $woman->biography = $validator['biography'];

        // Kiểm tra nếu có tệp hình ảnh được tải lên
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Lưu hình ảnh vào thư mục 'images' trong storage/app/public
            // Xóa hình ảnh cũ nếu có
            if (strpos($woman->image, 'images') === 0) {
                Storage::disk('public')->delete($woman->image);
            }
            $woman->image = $imagePath; // Lưu đường dẫn hình ảnh vào cột 'image'
        }

        $woman->save();
        return redirect()->route('women.index')->with('success', 'Woman updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Woman $woman)
    {
        //
        $woman->delete();
        return redirect()->route('women.index')->with('success', 'Deleted successfully');
    }
}
