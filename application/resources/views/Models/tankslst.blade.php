@extends('layouts.app')

@section('content')

    <h2>Twoje pojazdy</h2>

<table class="table table-striped table-sm">
    <tr>
        <th>Model</th>
        <th>Numer</th>
        <th>Opcje</th>
    </tr>
    @foreach($tanks as $tank)
    <tr>
        <td id="tank_model">{{$tank -> model }}</td>
        <td id="tank_number">{{$tank -> tank_number }}</td>
        <td>
<!-- Lista rozkazów -->
        <a href="/selTankOrders/{{$tank->tank_number}}"><button class="btn btn-outline-primary btn-sm">Rozkazy</button></a>
<!-- Lista obsług -->
        <a href="/deletedoc/{{$tank->tank_number}}"><button class="btn btn-outline-warning btn-sm">Delete??</button></a>
        </td>
    </tr>
    @endforeach
</table>
<table class="table table-striped">
    <tr>
        <th></th>
    </tr>
    <tr>
        <td><a href="/addTank"><button class="btn btn-success btn-sm">Dodaj</button></a>
        <a href="/home"><button class="btn btn-primary btn-sm">Powrót</button></a></td>
    </tr>
</table>
@endsection
