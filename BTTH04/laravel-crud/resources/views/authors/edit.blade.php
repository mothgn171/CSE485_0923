@extends('layouts.app')
@section('content' )
<form action="{{route('authors.update', $author->id) }}" method="POST">
    @csrf
    @method('PUT')
    <form>
  <div class="row mb-3">
    <label for="input" class="col-sm-2 col-form-label">Tên tác giả: </label>
    <div class="col-sm-10">
      <input type="text" class="col-sm-10 col-form-label" value="{{$author->name}}" required>
    </div>
  </div>
  <div>
    <div class="d-flex justify-content-end  ">
    <button type="submit" class="btn btn-primary">Lưu</button>
    <a href="{{route('authors.index')}}" class="btn btn-warning">Quay lại</a>
    </div>
    </div>
</form>
@endsection
