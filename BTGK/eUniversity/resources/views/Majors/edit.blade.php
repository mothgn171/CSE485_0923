@extends('layouts.base')
@section('title', 'Edit Information')
@section('content')
<div class="container mt-3">
    <h1>Edit Information</h1>

    <form action="{{ route('majors.update', $major->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- @if(strpos($major->cover_image, 'http') === 0)
        <img style="width: 300px; max-height: 300px;object-fit:cover;" class="w-25 rounded" src="{{ $major->cover_image }}" alt="Hình ảnh">
        @else
        <img style="width: 300px; max-height: 300px;object-fit:cover;" class="w-25 rounded" src="{{ asset('storage/' . $major->cover_image) }}" alt="Image is not exists">
        @endif -->
        <!-- <div class="form-group mt-1">
            <label class="fw-bold" for="image">Avatar:</label>
            <input type="file" name="cover_image" class="form-control" enctype="multipart/form-data">
        </div> -->
        <div class="form-group mt-1">
            <label class="fw-bold" for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $major->name }}" required>
        </div>
        <div class="form-group mt-1">
            <label class="fw-bold" for="description">Description:</label>
            <textarea type="date" name="description" class="form-control" required>{{ $major->description}}</textarea>
        </div>
        <div class="form-group mt-1">
            <label class="fw-bold" for="duration">Duration:</label>
            <input type="text" name="duration" class="form-control" value="{{ $major->duration}}" required>
        </div>
        <!-- <div class="form-group mt-1">
            <label class="fw-bold" for="media_link">Media link:</label>
            <input type="text" name="media_link" class="form-control" value="{{ $major->media_link}}" required>
        </div> -->
        <div class="form-group mt-3">
            <a href="{{ route('majors.index') }}"><button type="button" class="btn btn-warning">Cancel</button></a>
            <button type="submit" class="btn btn-success ml-2">Save</button>
        </div>
    </form>
</div>
@endsection('content')