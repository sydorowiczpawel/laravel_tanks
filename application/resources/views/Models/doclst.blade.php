@extends('layouts.app')

@section('content')
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
@endsection
