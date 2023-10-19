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
   

        <h2>Tên Sách</h2>

        <div>
        <button type="button" class="btn btn-outline-success">Add a new Author</button>
        </div>
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
                @foreach($books as $book)
                
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->title}}</td>
                    <td><button type="button" class="btn btn-info"><i class="bi bi-eye"></i></button></td>
                    <td><button type="button" class="btn btn-warning"><i class="bi bi-pen-fill"></i></button></td>
                    <td><button type="button" class="btn btn-danger"><i class="bi bi-archive-fill"></i></button></button></td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection
</body>

</html>