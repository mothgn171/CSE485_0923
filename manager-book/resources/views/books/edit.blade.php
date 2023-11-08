@extends('layouts.base')
@section('title', 'Edit Information')
@section('content')
<div class="container mt-3">
    <h1>Edit Information</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @if(strpos($book->CoverImageURL, 'http') === 0)
        <img style="width: 300px; max-height: 300px;object-fit:cover;" class="w-25 rounded" src="{{ $book->CoverImageURL }}" alt="Hình ảnh">
        @else
        <img style="width: 300px; max-height: 300px;object-fit:cover;" class="w-25 rounded" src="{{ asset('storage/' . $book->CoverImageURL) }}" alt="Image is not exists">
        @endif
        <div class="form-group mt-1">
            <label class="fw-bold" for="CoverImageURL">Avatar:</label>
            <input type="file" name="CoverImageURL" class="form-control" enctype="multipart/form-data">
        </div>
        <div class="form-group mt-1">
            <label class="fw-bold" for="author">Name:</label>
            <input type="text" name="author" class="form-control" value="{{ $book->author }}" required>
        </div>
        <div class="form-group mt-1">
            <label class="fw-bold" for="title">Title:</label>
            <textarea type="date" name="title" class="form-control" required>{{ $book->title}}</textarea>
        </div>
        <div class="form-group mt-1">
            <label class="fw-bold" for="Genre">Genre:</label>
            <input type="text" name="Genre" class="form-control" value="{{ $book->Genre}}" required>
        </div>
        <div class="form-group mt-1">
            <label class="fw-bold" for="PublicationYear">Publication Year:</label>
            <input type="text" name="PublicationYear" class="form-control" value="{{ $book->PublicationYear}}" required>
        </div>
        <div class="form-group mt-1">
            <label class="fw-bold" for="ISBN"> ISBN:</label>
            <input type="text" name="ISBN" class="form-control" value="{{ $book->ISBN}}" required>
        </div>
        <div class="form-group mt-3">
            <a href="{{ route('books.index') }}"><button type="button" class="btn btn-warning">Cancel</button></a>
            <button type="submit" class="btn btn-success ml-2">Save</button>
        </div>
    </form>
</div>
@endsection('content')