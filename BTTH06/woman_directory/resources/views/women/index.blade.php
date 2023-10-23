@extends('layouts.base')

@section('content')
    <main class="container vh-100 mt-5">
    <h3 class="text-center">WOMEN MANAGEMENT</h3>
        <div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <a href="{{ route('women.create') }}" class="btn btn-success">Add</a>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">#</th>
                        <th class="text-center" scope="col">Name</th>
                        <th class="text-center" scope="col">Biography</th>
                        <th class="text-center" scope="col">Field of work</th>
                        <th class="text-center" scope="col">Birth of Date</th>
                        <th class="text-center" scope="col">Details</th>
                        <th class="text-center" scope="col">Edit</th>
                        <th class="text-center" scope="col">Delete</th>
                    </tr>
                </thead>
                @foreach ($woman as $woman)
                    <tbody> 
                        <tr>
                            <th class="text-center" scope="row">{{ $woman->id }}</th>
                            <td >{{ $woman->name }}</td>
                            <td >{{ $woman->biography }}</td>
                            <td >{{ $woman->field_of_work }}</td>
                            <td >{{ $woman->birth_date }} </td>
                            <td class="text-center">
                            <a href="{{ route('women.show', ['woman' => $woman]) }}" class="btn btn-sm btn-warning">
                            <i class="fa-solid fa-eye"></i>
                            </a>
                            </td>
                            <td class="text-center">
                            <a href="{{ route('women.edit', ['woman' => $woman]) }}" class="btn btn-sm btn-primary">
                            <i class="fa-solid fa-pen-to-square"></i>
                             </a>
                            </td>
                            
                            <td class="text-center">
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#woman{{ $woman->id }}"><i class="fa-solid fa-trash"></i>
                                </button>
                                <div class="modal fade" id="woman{{ $woman->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure?</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Delete the women has id: {{ $woman->id }}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('women.destroy', ['woman' => $woman]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">OK</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                    </tbody>
                @endforeach
        </div>
    </main>
@endsection
        
             