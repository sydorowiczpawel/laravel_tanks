@extends('layouts.app')

@section('content')
@foreach($tank as $element)
<div class="container">
	<h2>{{ $element -> model }} {{ $element -> tank_number }}</h2>
	@endforeach
	<table class="table table-hover table-bordered table-sm">
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
					<a href="/editexitorder/{{$order->id}}"><button type="button" class="btn btn-warning btn-sm">Zakończ rozkaz</button></a>
					<a href="/eodetails/{{$order->id}}"><button class="btn btn-outline-primary btn-sm">Szczegóły</button></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<table class="table table-striped">
		<tr>
			<td>
				<div>
					@foreach ($tank as $element)
					<a href="/addexitorder/{{ $element -> tank_number }}"><button type="button" class="btn btn-success btn-sm">Nowy rozkaz</button></a>
					@endforeach
					<a href="/tankslst/{{ Auth::user() -> pass_number }}"><button type="button" class="btn btn-primary btn-sm">Powrót</button></a>
				</div>
			</td>
		</tr>
	</table>
</div>
@endsection
