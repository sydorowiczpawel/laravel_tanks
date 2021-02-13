@extends('layouts.app')

@section('content')

    <h2>Twoje pojazdy</h2>

<table class="table table-striped">
    <tr>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    @foreach($tanks as $tank)
    <tr>
        <td>{{$tank -> name }}</td>
        <td>{{$tank -> number }}</td>
        <td>
<!-- Lista rozkazów -->
        <a href="/exitorderslst/{{$tank->number}}"><button class="btn btn-outline-primary btn-lg">Rozkazy</button></a>
<!-- Lista obsług -->
        <a href="/deletedoc/{{$tank->number}}"><button class="btn btn-outline-warning btn-lg">Obsługi</button></a>
        </td>
    </tr>
    @endforeach
</table>
<table class="table table-striped">
    <tr>
        <th></th>
    </tr>
    <tr>
        <td><a href="/addTank"><button class="btn btn-success btn-lg">Dodaj</button></a>
        <a href="/home"><button class="btn btn-primary btn-lg">Powrót</button></a></td>
    </tr>
</table>
@endsection
