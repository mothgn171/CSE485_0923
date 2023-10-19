<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>


@extends('layouts.app')
@section('content' )

    <div class="container mt-3">
        <h2>Tên Tác Giả</h2>
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($authors as $author)
                
                <tr>
                    <th scope="row">{{$author->id}}</th>
                    <td>{{$author->name}}</td>
                    <td><a href="{{route ('authors.show', $author->id) }}">
                        <button type="button" class="btn btn-info"><i class="bi bi-eye"></i></button></a></td>
                    <td> <a href="{{route ('authors.edit', $author->id) }}">
                        <button type="button" class="btn btn-warning"><i class="bi bi-pen-fill"></i></button></a></td>
                        
                        <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$author->id}}"><i class="bi bi-trash3"></i></button>
                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal-{{$author->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure want to delete this author?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                        
                        
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
</body>

</html>