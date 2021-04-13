@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
		<div class="col-md-6">
      <div class="card">
				@foreach($eos as $eo)
				<div class="card-header">Rozkaz wyjazdu nr {{ $eo -> series }}</div>
				<div class="row">
          <div class="col-md-5 col-md-push-3">Kierowca</div>
					<div class="col-md-4 col-md-pull-9">{{ Auth::user()-> rank }} {{ Auth::user()-> name }} {{ Auth::user()-> surname }}</div>
				</div>
				<div class="row">
					<div class="col-md-5 col-md-push-3">Numer pojazdu</div>
          <div class="col-md-4 col-md-pull-9">{{ $eo -> tank_number }}</div>
				</div>
        <div class="row">
          <div class="col-md-5 col-md-push-3">Ważność rozkazu</div>
					<div class="col-md-5 col-md-pull-9">od {{$eo -> start_date}} do {{$eo -> end_date}}</div>
        </div>
        <div class="row">
          <div class="col-md-5 col-md-push-3">Licznik kilometrów</div>
          <div class="col-md-5 col-md-pull-9">{{$eo -> km_counter_start}}km -> {{$eo -> km_counter_end}}km</div>
        </div>
        <div class="row">
          <div class="col-md-5 col-md-push-3">Licznik motogodzin ogólnych</div>
          <div class="col-md-5 col-md-pull-9">{{$eo -> geh_start}} -> {{$eo -> geh_end}}</div>
        </div>
        <div class="row">
					<div class="col-md-5 col-md-push-3">Licznik motogodzin obciążonych</div>
          <div class="col-md-5 col-md-pull-9">{{$eo -> leh_start}} -> {{$eo -> leh_end}}</div>
        </div>
        <div class="row">
          <div class="col-md-5 col-md-push-3">Czas pracy podgrzewacza</div>
          <div class="col-md-5 col-md-pull-9">{{$eo -> heater_min}} min.</div>
        </div>
        <div class="row">
          <div class="col-md-5 col-md-push-3">Wystrzelono PKT</div>
          <div class="col-md-5 col-md-pull-9">{{$eo -> PKT}} poc.</div>
        </div>
        <div class="row">
          <div class="col-md-5 col-md-push-3">Wystrzelono NSWT</div>
          <div class="col-md-5 col-md-pull-9">{{$eo -> NSWT}} poc.</div>
				</div>
        <div class="row">
          <div class="col-md-5 col-md-push-3">Wystrzelono z armaty</div>
          <div class="col-md-5 col-md-pull-9">{{$eo -> armata}} poc.</div>
        </div>
				@endforeach
			</div>
			<?php
			$km = ($eo->km_counter_end - $eo->km_counter_start);
      $mtgog = $eo -> geh_end - $eo -> geh_start;
      $mtgobc = $eo -> leh_end - $eo -> leh_start;
      $fuel = ($km * 3.1) + (($mtgog - $mtgobc) * 19);
			?>
			<table class="table table-bl">
        <thead>
          <tr>Podsumowanie</tr>
        </thead>
        <tbody>
          <tr>
            <td class="table-active">Przejechano</td>
            <td>{{ $km }}km</td>
          </tr>
          <tr>
            <td class="table-active">Przepracowano</td>
            <td>{{ $mtgog }} motogodzin ogólnych</td>
          </tr>
          <tr>
            <td class="table-active">Przepracowano</td>
            <td>{{ $mtgobc }} motogodzin pod obciążeniem</td>
          </tr>
          <tr>
            <td class="table-active">Do zatankowania</td>
            <td>{{ $fuel }} litrów</td>
          </tr>
        </tbody>
      </table>
		</div>
	</div>
</div>
@endsection
