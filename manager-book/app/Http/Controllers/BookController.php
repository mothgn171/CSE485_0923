<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        $books = Book::all();
        $books = Book::orderBy('created_at', 'desc')->paginate(10);
        
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $types = ['Detective', 'Romance', 'Comedy', 'Science'];
        return view('books.add', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'Genre' => 'required',
            'PublicationYear' => 'required',
            'ISBN' => 'required',
            'CoverImageURL' => 'required',

            
        ]);
        $book = new book();
        $book->title = $validateData['title'];
        $book->author = $validateData['author'];
        $book->Genre = $validateData['Genre'];
        $book->PublicationYear = $validateData['PublicationYear'];
        $book->ISBN = $validateData['ISBN'];
        $book->CoverImageURL = $validateData['CoverImageURL'];
      
        // Kiểm tra nếu có tệp hình ảnh được tải lên
        if ($request->hasFile('CoverImageURL')) {
            $imagePath = $request->file('CoverImageURL')->store('images', 'public'); // Lưu hình ảnh vào thư mục 'images' trong storage/app/public
            $book->CoverImageURL = $imagePath; // Lưu đường dẫn hình ảnh vào cột 'image'
        }
        $book->save();
        Session::flash('success', 'Add New Book Successfully');
        return redirect()->route('books.index');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
        return view('books.show', compact('book'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
        $genres = DB::table('books')->distinct()->pluck('genre');
        return view('books.edit', compact('book', 'genres'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        

        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'author' => 'required',
            'Genre' => 'required',
            'PublicationYear' => 'required',
            'ISBN' => 'required',
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name_file = $file->getClientOriginalName();
            $image = time() . '_' . $name_file;
            $file->move(public_path('image/book/'), $image);
        }
        $book = Book::find($id);
        $book->update([
            "title" => $request->title,
            "author" => $request->author,
            "Genre" => $request->Genre,
            "PublicationYear" => $request->PublicationYear,
            "ISBN" => $request->ISBN,
            "CoverImageUrl" => isset($image) ? $image : $book->CoverImageUrl,
        ]);
        
        return redirect()->route('books.index')->with('success', 'Book Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
        $book->delete();
        return redirect()->route('books.index')->with('success','Delete book successfully');
    }
}

