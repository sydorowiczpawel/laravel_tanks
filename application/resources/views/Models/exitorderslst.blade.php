@extends('layouts.app')

@section('content')
<h2>Rozkazy wyjazdu</h2>

<table class="table table-hover table-bordered">
	<thead>
    <tr>
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
    </tr>
  </thead>
  <tbody>
  @foreach($eos as $eo)
    <tr>
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
    </tr>
  @endforeach
  </tbody>
</table>
<table class="table">
	<thead><tr><th></th></tr></thead>
	<tr>
		<th>
			<a href="/addexitorder"><button type="button" class="btn btn-success">Nowy rozkaz</button></a>
      <a href="/home"><button type="button" class="btn btn-primary">Powrót</button></a>
		</th>
	</tr>
	<thead><tr><th></th></tr></thead>
</table>
@endsection
