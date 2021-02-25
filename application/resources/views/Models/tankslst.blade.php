@extends('layouts.app')

@section('content')
<<<<<<< HEAD

    <h2>Twoje pojazdy</h2>

<table class="table table-striped">
    <tr>
        <th>Kierowca</th>
        <th>Model</th>
        <th>Numer</th>
        <th>Opcje</th>
    </tr>
    @foreach($tanks as $tank)
    <tr>
        <td>{{$tank -> pass_number }}</td>
        <td>{{$tank -> model }}</td>
        <td>{{$tank -> tank_number }}</td>
        <td>
<!-- Lista rozkazów -->
        <a href="/exitorderslst/{{$tank->number}}"><button class="btn btn-outline-primary btn-lg">Rozkazy</button></a>
<!-- Lista obsług -->
        <a href="/deletedoc/{{$tank->number}}"><button class="btn btn-outline-warning btn-lg">Obsługi</button></a>
        </td>
    </tr>
    @endforeach
</table>
<table class="table table-striped">
    <tr>
        <th></th>
    </tr>
    <tr>
        <td><a href="/addTank"><button class="btn btn-success btn-lg">Dodaj</button></a>
        <a href="/home"><button class="btn btn-primary btn-lg">Powrót</button></a></td>
    </tr>
</table>
=======
<div class="container">
	<div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
      	<div class="card-header">Teczka personalna</div>
        @foreach($tanks as $tank)
        <div class="row align-items-start">
          <div class="col">{{$tank -> model }} <b>{{$tank -> tank_number }}</b></div>
          <div class="col">
						<!-- Nowy rozkaz wyjazdu -->
        		<a href="/addexitorder/{{$tank->number}}"><button class="btn btn-outline-success btn-sm">Nowy rozkaz</button></a>
						<!-- Nowy rozkaz wyjazdu -->
      			<a href="/finishexitorder/{{$tank->number}}"><button class="btn btn-outline-secondary btn-sm">Zakończ rozkaz</button></a>
						<!-- Lista obsług -->
      			<a href="/service/{{$tank->number}}"><button class="btn btn-outline-info btn-sm">Obsługi</button></a>
   				</div>
  			</div>
				@endforeach
  		</div>
  	</div>
  </div>
</div>
>>>>>>> f2d1457222b4d303e2248a8fb6eae5fb1d56d876
@endsection
