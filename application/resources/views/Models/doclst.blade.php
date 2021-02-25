@extends('layouts.app')

@section('content')
<<<<<<< HEAD

    <h2>Teczka personalna</h2>

<table class="table table-striped">
    <tr>
        <th>Twoje dokumenty</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($docs as $doc)
    <tr>
        <td>{{$doc -> name }}</td>
        <td>{{$doc -> number }}</td>
        <td>{{$doc -> start_date}}</td>
        <td>{{$doc -> end_date}}</td>
<!-- Edytowanie użytkownika -->
        <a href="/editdoc/{{$doc->id}}"><button class="btn btn-outline-primary btn-lg">Edit</button></a>
<!-- Usuwanie użytkownika -->
        <a href="/deletedoc/{{$doc->id}}"><button class="btn btn-outline-danger btn-lg">Delete</button></a>
        </td>
    </tr>
    @endforeach
</table>
<table class="table table-striped">
    <tr>
        <th></th>
    </tr>
    <tr>
        <td><a href="/adddoc"><button class="btn btn-success btn-lg">Dodaj</button></a>
        <a href="/home"><button class="btn btn-primary btn-lg">Powrót</button></a></td>
    </tr>
</table>
=======
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Teczka personalna</div>
                @foreach($docs as $doc)
                <div class="row align-items-start">
                    <div class="col">{{$doc -> name }}</div>
                    <div class="col">{{$doc -> number }}</div>
                    <div class="col">
                    <!-- Edytowanie dokumentu -->
                        <a href="/editdoc/{{$doc->id}}"><button class="btn btn-outline-primary btn-sm">Edit</button></a>
                    <!-- Usuwanie dokumentu -->
                        <a href="/deletedoc/{{$doc->id}}"><button class="btn btn-outline-danger btn-sm">Delete</button></a>
                    </div>
                </div>
                @endforeach
                <div class="row align-items-end">
                    <div class="col">
                    </div>
                    <div class="col">
                        <a href="/adddoc"><button class="btn btn-success">Dodaj</button></a>
                        <a href="/home"><button class="btn btn-primary">Powrót</button></a>
                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
>>>>>>> f2d1457222b4d303e2248a8fb6eae5fb1d56d876
@endsection
