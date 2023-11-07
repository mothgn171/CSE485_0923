@extends('layouts.base')

@section('title')
    Major
@endsection

@section('page_active')
    <li class="nav-item">
        <a class="nav-link" href="">Home Page</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('majors.index') }}">Major</a>
    </li>
    
@endsection

@section('content')
    <main class="container vh-100 mt-5">
        <div>
            <form action="{{ route('majors.store') }}" method="post">
                @csrf
                <h3 class="text-center">ADD Majors</h3>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text" id="basic-addon1">Name</span>
                    <input type="text" class="form-control" aria-describedby="basic-addon1" name="name">
                </div>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text" id="basic-addon1">Description</span>
                    <input type="text" class="form-control" aria-describedby="basic-addon1" name="description">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Duration</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="duration">
                        <option selected>Open this select Duration</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>   
                </div>
               
                
                
                  
                <div class="d-flex gap-3 justify-content-end ">
                    <input type="submit" name="btnAdd" value="Add" class="btn btn-success"></input>
                    <a href="{{route('majors.index')}}" class="btn btn-warning">Back</a>
                </div>
            </form>
        </div>
    </main>
@endsection