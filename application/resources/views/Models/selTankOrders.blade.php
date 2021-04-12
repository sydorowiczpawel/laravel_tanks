@extends('layouts.app')

@section('content')
@foreach($tank as $element)
<h2>{{ $element -> model }} {{ $element -> tank_number }}</h2>
@endforeach
<table class="table table-hover table-bordered">
	<thead>
    <tr>
        <th>Seria/Numer</th>
        <th>km - po użyciu</th>
        <th>mtg OG - po użyciu</th>
        <th>mtg OBC - po użyciu</th>
        <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($tank as $element)
    <tr>
@endforeach
@foreach($orders as $order)
        <td>{{$order -> series }}</td>
        <td>{{$order -> km_counter_end }}</td>
        <td>{{$order -> geh_end }}</td>
        <td>{{$order -> leh_end }}</td>
        <td>
<!-- Edycja rozkazu wyjazdu -->
        <a href="/editexitorder/{{$order->id}}"><button type="button" class="btn btn-warning">Zakończ rozkaz</button></a>
        <a href="/eodetails/{{$order->id}}"><button class="btn btn-outline-primary">Szczegóły</button></a>
        </td>
    </tr>
  @endforeach
  </tbody>
</table>
<table class="table table-striped">
    <tr>
        <th></th>
    </tr>
    <tr>
        <td>
            <div>
                <a href="/addexitorder"><button type="button" class="btn btn-success">Nowy rozkaz</button></a>
                <a href="/home"><button type="button" class="btn btn-primary">Powrót</button></a>
            </div>
        </td>
    </tr>
</table>
@endsection
