@extends('layouts.app')

@section('content')
<div class="container">
	<h2>Rozkazy wyjazdu</h2>

	<table class="table table-striped table-sm">
    <tr>
			<th>Pojazd</th>
      <th>Seria/Numer</th>
      <th>km - po użyciu</th>
      <th>mtg OG - po użyciu</th>
      <th>mtg OBC - po użyciu</th>
      <th></th>
    </tr>
  @foreach($eos as $eo)
    <tr>
      <td>{{ $eo -> tank_number }}</td>
      <td>{{ $eo -> series }}</td>
      <td>{{ $eo -> km_counter_end }}</td>
      <td>{{ $eo -> geh_end }}</td>
      <td>{{ $eo -> leh_end }}</td>
      <td>
				@if($eo -> leh_end === NULL)
					<a href="/editexitorder/{{$eo->id}}"><button type="button" class="btn btn-warning btn-sm">Zakończ rozkaz</button></a>
				@else
				<a href="/eodetails/{{$eo->id}}"><button class="btn btn-outline-primary btn-sm">Szczegóły</button></a>
				@endif
			</td>
    </tr>
  @endforeach
</table>

<table class="table table-striped">
  <tr>
    <td>
			<div>
        <a href="/addexitorder/{{ Auth::user() -> pass_number}}"><button type="button" class="btn btn-success btn-sm">Nowy rozkaz</button></a>
        <a href="/personalFile/{{Auth::user() -> pass_number }}"><button type="button" class="btn btn-primary btn-sm">Powrót</button></a>
      </div>
    </td>
  </tr>
</table>
</div>
@endsection
