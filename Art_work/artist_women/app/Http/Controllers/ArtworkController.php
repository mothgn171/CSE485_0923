<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session; 
use Illuminate\Support\Facades\Storage;
use App\Models\Artwork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $artwork = Artwork::all();
        return view('artworks.index', compact('artwork'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $types = ['art','music','literature'];
        return view('artworks.add', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'artist_name' => 'required',
            'description' => 'required',
            'art_type' => 'required',
            'media_link' => 'required',
            'cover_image' => 'required',
        ]);
        $artwork = new Artwork();
        $artwork->artist_name = $validateData['artist_name'];
        $artwork->description = $validateData['description'];
        $artwork->art_type = $validateData['art_type'];
        $artwork->media_link = $validateData['media_link'];
        $artwork->cover_image = $validateData['cover_image'];

        $artwork->save();
        Session::flash('success', 'Add New ArtWork Successfully');
        return redirect()->route('artworks.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Artwork $artwork)
    {
        //
        return view('artworks.show', compact('artwork'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artwork $artwork)
    {
        //
        return view('artworks.edit', compact('artwork'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validateData = $request->validate([
            'artist_name' => 'required',
            'description' => 'required',
            'art_type' => 'required',
            'media_link' => 'required',
            'cover_image' => 'required',
        ]);
        $artwork = Artwork::findOrFail($id);
        $artwork->artist_name = $validateData['artist_name'];
        $artwork->description = $validateData['description'];
        $artwork->art_type = $validateData['art_type'];
        $artwork->media_link = $validateData['media_link'];

        // Kiểm tra nếu có tệp hình ảnh được tải lên
        if ($request->hasFile('cover_image')) {
            $imagePath = $request->file('cover_image')->store('images', 'public'); // Lưu hình ảnh vào thư mục 'images' trong storage/app/public
            // Xóa hình ảnh cũ nếu có
            if (strpos($artwork->cover_image, 'images') === 0) {
                Storage::disk('public')->delete($artwork->cover_image);
            }
            $artwork->cover_image = $imagePath; // Lưu đường dẫn hình ảnh vào cột 'image'
        }

        $artwork->save();
        return redirect()->route('artworks.index')->with('success', 'Artwork updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artwork $artwork)
    {
        //
        $artwork->delete();
        return redirect()->route('artworks.index')->with('success', 'Artwork deleted successfully');
    }
}
