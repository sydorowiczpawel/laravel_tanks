@extends('layouts.app')

@section('content')

    <h2>Edytuj wybrany dokument</h2>

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
        <td>
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
        <td><a href="/home"><button class="btn btn-primary btn-lg">Powrót</button></a></td>
    </tr>
</table>
@endsection
