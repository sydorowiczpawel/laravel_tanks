@extends('layouts.app')

@section('content')
<div class="container">
	@foreach($tank as $element)
	<table class="table table-sm">
		<thead>
			<tr>
				<th>{{ $element -> model }} {{ $element -> tank_number }}</th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			@endforeach
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
					@if($order -> leh_end === NULL)
					<a href="/editexitorder/{{$order->id}}"><button type="button" class="btn btn-warning btn-sm">Zakończ rozkaz</button></a>
					@else
					<a href="/eodetails/{{$order->id}}"><button class="btn btn-outline-primary btn-sm">Szczegóły</button></a>
					@endif
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
					<a href="/addexitorder/{{ Auth::user() -> pass_number }}"><button type="button" class="btn btn-success btn-sm">Nowy rozkaz</button></a>
					@endforeach
					<a href="/tankslst/{{ Auth::user() -> pass_number }}"><button type="button" class="btn btn-primary btn-sm">Powrót</button></a>
				</div>
			</td>
		</tr>
	</table>
</div>
@endsection
