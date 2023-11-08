@extends('layouts.base')

@section('title')
    Book
@endsection

@section('page_active')
    <li class="nav-item">
        <a class="nav-link" href="">Home Page</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('books.index') }}">Book</a>
    </li>
    
@endsection

@section('content')
    <main class="container vh-100 mt-5">
        <div>
            <form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h3 class="text-center">ADD BOOKS</h3>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text" id="basic-addon1">Tilte</span>
                    <input type="text" class="form-control" aria-describedby="basic-addon1" name="title">
                </div>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text" id="basic-addon1">author</span>
                    <input type="text" class="form-control" aria-describedby="basic-addon1" name="author">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Genre</label>
                    <select class="form-select" name="Genre" id="inputGroupSelect01">
                        @foreach ($types as $type)
                            <option>{{$type}}</option>
                        @endforeach
                    </select>
                </div>
               
                <div class="input-group mb-3">
                    <label for="media_link" class="input-group-text">Publication Year</label>
                    <input type="text" aria-describedby="basic-addon1" name="PublicationYear" id="media_link" class="form-control" placeholder="Enter ">
                    
                  </div>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text" id="basic-addon1">ISBN</span>
                    <input type="text" class="form-control" aria-describedby="basic-addon1" name="ISBN">
                </div>
                <div class="input-group mb-3">
                    <label class="fw-bold" for="CoverImageURL"></label>
                    <input type="file" name="CoverImageURL" class="form-control">
                </div>
                  
                <div class="d-flex gap-2 justify-content-end ">
                    <input type="submit" name="btnAdd" value="Add" class="btn btn-success"></input>
                    <a href="{{route('books.index')}}" class="btn btn-warning">Back</a>
                </div>
            </form>
        </div>
    </main>
@endsection