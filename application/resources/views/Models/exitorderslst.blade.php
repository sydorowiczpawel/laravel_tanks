@extends('layouts.app')

@section('content')

    <h2>Rozkazy wyjazdu</h2>

<table class="table table-striped">
    <tr>
        <th>Twoje dokumenty</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($eos as $eo)
    <tr>
        <td>{{$eo -> name }}</td>
        <td>{{$eo -> number }}</td>
        <td>
<!-- Edycja rozkazu wyjazdu -->
        <a href="/editexitorder/{{$eo->id}}"><button class="btn btn-outline-primary btn-lg">Edit</button></a>
<!-- Usunięcie rozkazu wyjazdu -->
        <a href="/deleteexitorder/{{$eo->id}}"><button class="btn btn-outline-danger btn-lg">Delete</button></a>
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
