@extends('layouts/base')

@section('title', $artwork->artist_name)

@section('content')
<div class="container mt-3">
    <div class="team-single">
        <div class="row">
            <div class="col-lg-4 col-md-5 xs-margin-30px-bottom">
                <div class="team-single-img rounded overflow-hidden">

                    @if(strpos($artwork->cover_image, 'http') === 0)
                    <img style="width: 300px; max-height: 300px;object-fit:cover;" class="w-100 rounded" src="{{ $artwork->cover_image }}" alt="Hình ảnh">
                    @else
                    <img style="width: 300px; max-height: 300px;object-fit:cover;" class="w-100 rounded" src="{{ asset('storage/' . $artwork->cover_image) }}" alt="Image is not exists">
                    @endif

                </div>
                <div class="bg-light-gray padding-30px-all md-padding-25px-all sm-padding-20px-all text-center">
                    <h2 class="margin-10px-bottom font-size24 md-font-size22 sm-font-size20 font-weight-600 mt-3">{{$artwork->artist_name}}</h2>
                </div>
            </div>

            <div class="col-lg-8 col-md-7">
                <h3>Information ...</h3>
                <p class="sm-width-95 sm-margin-auto"><span class="fw-bold">Description: </span>{{$artwork->description}}</p>
                <p class="sm-width-95 sm-margin-auto"><span class="fw-bold">Art Type: </span>{{$artwork->art_type}}</p>
                <p class="sm-width-95 sm-margin-auto"><span class="fw-bold">Media Link: </span>{{$artwork->media_link}}</p>
            </div>
            <div class="form-group mt-3">
                <a href="{{ route('artworks.index') }}"><button type="button" class="btn btn-warning">Back</button></a>
            </div>
        </div>
    </div>
</div>

@endsection