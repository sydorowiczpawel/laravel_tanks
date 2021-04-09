@extends('layouts.app')

@section('content')

    <h2>Twoje dokumentu</h2>

<table class="table table-striped">
    <tr>
        <th>Nazwa domumentu</th>
        <th>Numer dokumentu</th>
        <th>Data rozpoczęcia</th>
        <th>Data zakończenia</th>
    </tr>
    @foreach($docs as $doc)
    <tr>
        <td>{{$doc -> name }}</td>
        <td>{{$doc -> number }}</td>
        <td>{{$doc -> start_date }}</td>
        <td>{{$doc -> end_date }}</td>
        <td>
    </tr>
    @endforeach
</table>
<table class="table table-striped">
    <tr>
        <th></th>
    </tr>
    <tr>
        <a href="/adddoc/{{Auth::user()->pass_number}}"><button class="btn btn-success">Dodaj dokument</button></a></td>
        <a href="/home"><button class="btn btn-primary">Powrót</button></a></td>
    </tr>
</table>
@endsection
