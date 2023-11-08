@extends('layouts.base')

@section('content')
    <main class="container vh-100 mt-5">
    <h3 class="text-center">BOOK MANAGEMENT</h3>
        <div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <a href="{{ route('books.create') }}" class="btn btn-success">Add</a>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">#</th>
                        <th class="text-center" scope="col">Title</th>
                        <th class="text-center" scope="col">Aurhor</th>
                        <th class="text-center" scope="col">Genre</th>
                        <th class="text-center" scope="col">Publication Year</th> 
                        <th class="text-center" scope="col">ISBN</th> 
                        <th class="text-center" scope="col">Image</th> 
                        <th class="text-center" scope="col">Details</th>
                        <th class="text-center" scope="col">Edit</th>
                        <th class="text-center" scope="col">Delete</th>
                    </tr>
                </thead>
                @foreach ($books as $book)
                    <tbody> 
                        <tr>
                            <th class="text-center" scope="row">{{ $book->id }}</th>
                            <td >{{ $book->title }}</td>
                            <td >{{ $book->author }}</td>
                            <td >{{ $book->Genre }}</td>
                            <td>{{$book->PublicationYear}}</td>
                            <td >{{ $book->ISBN }}</td>
                            <td >{{ $book->CoverImageURL }}</td>

                            
                            <td class="text-center">
                            <a href="{{ route('books.show', ['book' => $book]) }}" class="btn btn-sm btn-warning">
                            <i class="fa-solid fa-eye"></i>
                            </a>
                            </td>
                            <td class="text-center">
                            <a href="{{ route('books.edit', ['book' => $book]) }}" class="btn btn-sm btn-primary">
                            <i class="fa-solid fa-pen-to-square"></i>
                             </a>
                            </td>
                            
                            <td class="text-center">
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $book->id }}">
                    <i class="fa-solid fa-trash"></i>
                  </button>
                  <div class="modal fade" id="deleteModal-{{ $book->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Confirmation</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Are you sure you want to delete the book has id: {{$book->id}}?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <form action="{{route('books.destroy', $book->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                                
                    </tbody>
                @endforeach
        </div>
    </main>
@endsection
        
             