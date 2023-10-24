@extends('layouts.base')

@section('title')
    Woman
@endsection

@section('page_active')
    <li class="nav-item">
        <a class="nav-link" href="">Home Page</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('women.index') }}">Women</a>
    </li>
    
@endsection

@section('content')
    <main class="container vh-100 mt-5">
        <div>
            <form action="{{ route('women.store') }}" method="post">
                @csrf
                <h3 class="text-center">ADD WOMEN</h3>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text" id="basic-addon1">Name</span>
                    <input type="text" class="form-control" aria-describedby="basic-addon1" name="artist_name">
                </div>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text" id="basic-addon1">Biography</span>
                    <input type="text" class="form-control" aria-describedby="basic-addon1" name="description">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Field of work</label>
                    <select class="form-select" name="field_of_work" id="inputGroupSelect01">
                        @foreach ($types as $type)
                            <option>{{$type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text" id="basic-addon1">Birth_Date</span>
                    <input type="date" class="form-control" aria-describedby="basic-addon1" name="birth_date">
                </div>
                  
                  
                <div class="d-flex gap-2 justify-content-end ">
                    <input type="submit" name="btnAdd" value="Add" class="btn btn-success"></input>
                    <a href="{{route('women.index')}}" class="btn btn-warning">Back</a>
                </div>
            </form>
        </div>
    </main>
@endsection