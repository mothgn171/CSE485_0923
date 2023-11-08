@extends('layouts/base')

@section('title')

@section('content')
<div class="container mt-3">
    <div class="team-single">
        <div class="row">
            <div class="col-lg-4 col-md-5 xs-margin-30px-bottom">
                <div class="team-single-img rounded overflow-hidden">

                    @if(strpos($book->CoverImageURL, 'http') === 0)
                    <img style="width: 300px; max-height: 300px;object-fit:cover;" class="w-100 rounded" src="{{ $book->CoverImageURL }}" alt="Hình ảnh">
                    @else
                    <img style="width: 300px; max-height: 300px;object-fit:cover;" class="w-100 rounded" src="{{ asset('storage/' . $book->CoverImageURL) }}" alt="Image is not exists">
                    @endif

                </div>
                <div class="bg-light-gray padding-30px-all md-padding-25px-all sm-padding-20px-all text-center">
                    <h2 class="margin-10px-bottom font-size24 md-font-size22 sm-font-size20 font-weight-600 mt-3">{{$book->author}}</h2>
                </div>
            </div>

            <div class="col-lg-8 col-md-7">
                <h3>Information ...</h3>
                <p class="sm-width-95 sm-margin-auto"><span class="fw-bold">Title: </span>{{$book->title}}</p>
                <p class="sm-width-95 sm-margin-auto"><span class="fw-bold">Genre: </span>{{$book->Genre}}</p>
                <p class="sm-width-95 sm-margin-auto"><span class="fw-bold">PublicationYear : </span>{{$book->PublicationYear}}</p>
                <p class="sm-width-95 sm-margin-auto"><span class="fw-bold">ISBN : </span>{{$book->ISBN}}</p>

            </div>
            <div class="form-group mt-3">
                <a href="{{ route('books.index') }}"><button type="button" class="btn btn-warning">Back</button></a>
            </div>
        </div>
    </div>
</div>

@endsection