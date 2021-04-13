@extends('layouts.app')

@section('content')
<h2>Rozkazy wyjazdu</h2>

<table class="table table-hover table-bordered">
	<thead>
    <tr>
        <th>Pojazd</th>
        <th>Seria/Numer</th>
        <!-- <th>Data rozpoczęcia</th> -->
        <!-- <th>Data zakończenia</th> -->
        <!-- <th>km - przed wyjazdem</th> -->
        <th>km - po użyciu</th>
        <!-- <th>mtg OG - przed wyjazdem</th> -->
        <th>mtg OG - po użyciu</th>
        <!-- <th>mtg OBC - przed wyjazdem</th> -->
        <th>mtg OBC - po użyciu</th>
        <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($eos as $eo)
    <tr>
        <td>{{$eo -> tank_number }}</td>
        <td>{{$eo -> series }}</td>
        <td>{{$eo -> km_counter_end }}</td>
        <td>{{$eo -> geh_end }}</td>
        <td>{{$eo -> leh_end }}</td>
        <td>
<!-- Edycja rozkazu wyjazdu -->
        <a href="/editexitorder/{{$eo->id}}"><button type="button" class="btn btn-warning">Zakończ rozkaz</button></a>
        <a href="/eodetails/{{$eo->id}}"><button class="btn btn-outline-primary">Szczegóły</button></a>
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
                <a href="/addexitorder/{{ Auth::user() -> pass_number}}"><button type="button" class="btn btn-success">Nowy rozkaz</button></a>
                <a href="/home"><button type="button" class="btn btn-primary">Powrót</button></a>
            </div>
        </td>
    </tr>
</table>
@endsection
