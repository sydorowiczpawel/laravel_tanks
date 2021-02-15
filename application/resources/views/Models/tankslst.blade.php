@extends('layouts.app')

@section('content')
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
@endsection
