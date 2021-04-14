@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Twoje dokumenty</h2>
	<table class="table table-striped">

		<tr>
      <th>Nazwa domumentu</th>
      <th>Numer dokumentu</th>
      <th>Data rozpoczęcia</th>
      <th>Data zakończenia</th>
    </tr>
		@foreach($docs as $doc)

		<tr>
      <td>{{$doc -> name }}</td>
      <td>{{$doc -> number }}</td>
      <td>{{$doc -> start_date }}</td>
      <td>{{$doc -> end_date }}</td>
      <td>
    </tr>
    @endforeach
	</table>

	<table class="table table-striped">
    <tr>
      <a href="/adddoc/{{Auth::user()->pass_number}}"><button class="btn btn-success btn-sm">Dodaj dokument</button></a></td>
      <a href="/personalFile/{{ Auth::user() -> pass_number }}"><button class="btn btn-primary btn-sm">Powrót</button></a></td>
    </tr>
	</table>
</div>
@endsection
