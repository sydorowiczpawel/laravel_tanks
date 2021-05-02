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
      @endforeach
    </tr>
    {{-- Dodaj plik --}}
    <tr>
      <td>
        <a href="/addexitorder/{{ Auth::user() -> pass_number}}">
          <button class="btn btn-warning btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16"><path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/><path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/></svg>
          </button>
        </a>
      </td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
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
