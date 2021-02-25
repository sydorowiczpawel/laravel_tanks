@extends('layouts.app')

@section('content')
<h2>Rozkazy wyjazdu</h2>

<table class="table table-hover table-bordered">
	<thead>
    <tr>
<<<<<<< HEAD
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
=======
      <th scope="col">Wóz</th>
      <th scope="col">R-z nr.</th>
      <th scope="col">Ważny od</th>
      <th scope="col">Ważny do</th>
      <th scope="col">km_PW</th>
      <th scope="col"></th>
      <th scope="col">km_PU</th>
      <th scope="col"></th>
      <th scope="col">mtgOG</th>
      <th scope="col">mtgOG</th>
      <th scope="col">mtgOBC</th>
      <th scope="col">mtgOBC</th>
      <th scope="col">Podgrzewacz (min.)</th>
      <th scope="col">PKT</th>
      <th scope="col">NSWT</th>
      <th scope="col">2A46</th>
      <th scope="col"></th>
>>>>>>> f2d1457222b4d303e2248a8fb6eae5fb1d56d876
    </tr>
  </thead>
  <tbody>
  @foreach($eos as $eo)
    <tr>
<<<<<<< HEAD
        <td>{{$eo -> tank_number }}</td>
        <td>{{$eo -> series }}</td>
        <td>{{$eo -> km_end }}</td>
        <td>{{$eo -> geh_end }}</td>
        <td>{{$eo -> leh_end }}</td>
        <td>
<!-- Edycja rozkazu wyjazdu -->
        <a href="/editexitorder/{{$eo->id}}"><button type="button" class="btn btn-warning">Zakończ rozkaz</button></a>
        <a href="/eodetails/{{$eo->id}}"><button class="btn btn-outline-primary">Szczegóły</button></a>
        </td>
=======
      <td>{{$eo -> tank_number }}</td>
      <td>{{$eo -> series }}</td>
      <td>{{$eo -> start_date }}</td>
      <td>{{$eo -> end_date }}</td>
      <td>{{$eo -> km_counter_start }}<td>
      <td>{{$eo -> km_counter_end }}<td>
      <td>{{$eo -> geh_start }}</td>
      <td>{{$eo -> geh_end }}</td>
      <td>{{$eo -> leh_start }}</td>
      <td>{{$eo -> leh_end }}</td>
      <td>{{$eo -> heater_min }}</td>
      <td>{{$eo -> PKT }}</td>
      <td>{{$eo -> NSWT }}</td>
      <td>zmienic nazwe w tabeli na bezcyfrową</td>
      <!-- Edycja rozkazu wyjazdu -->
      <td><a href="/finishexitorder/{{$eo->id}}"><button class="btn btn-outline-warning btn-sm">Zakończ</button></a></td>
>>>>>>> f2d1457222b4d303e2248a8fb6eae5fb1d56d876
    </tr>
  @endforeach
  </tbody>
</table>
<<<<<<< HEAD
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
=======
<table class="table">
	<thead><tr><th></th></tr></thead>
	<tr>
		<th>
			<a href="/addexitorder"><button type="button" class="btn btn-success">Nowy rozkaz</button></a>
      <a href="/home"><button type="button" class="btn btn-primary">Powrót</button></a>
		</th>
	</tr>
	<thead><tr><th></th></tr></thead>
>>>>>>> f2d1457222b4d303e2248a8fb6eae5fb1d56d876
</table>
@endsection
