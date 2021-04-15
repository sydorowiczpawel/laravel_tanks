@extends('layouts.app')

@section('content')
<div class="container">
  @foreach($eos as $eo)
  <table class="table table-sm">
    <thead class="table-dark">
      <tr>
        <th>Rozkaz wyjazdu nr {{ $eo -> series }}</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Kierowca</td>
        <td>{{ Auth::user()-> rank }} {{ Auth::user()-> name }} {{ Auth::user()-> surname }}</td>
      </tr>
      <tr>
        <td>Data ważności</td>
        <td>od {{$eo -> start_date}} do {{$eo -> end_date}}</td>
      </tr>
      <tr>
        <td>Licznik kilometrów</td>
        <td>{{$eo -> km_counter_start}}km -> {{$eo -> km_counter_end}}km</td>
      </tr>
      <tr>
        <td>Licznik mtgOg</td>
        <td>{{$eo -> geh_start}} -> {{$eo -> geh_end}}</td>
      </tr>
      <tr>
        <td>Licznik mtgObc</td>
        <td>{{$eo -> leh_start}} -> {{$eo -> leh_end}}</td>
      </tr>
      <tr>
        <td>Praca podgrzewacza</td>
        <td>{{$eo -> heater_min}} min.</td>
      </tr>
      <tr>
        <td>Wystrzelono 7,62 mm</td>
        <td>{{$eo -> PKT}} poc.</td>
      </tr>
      <tr>
        <td>Wystrzelono 12,7 mm</td>
        <td>{{$eo -> NSWT}} poc.</td>
      </tr>
      <tr>
        <td>Wystrzelono 125 mm</td>
        <td>{{$eo -> armata}} poc.</td>
      </tr>
    </tbody>
  </table>
  @endforeach

  <?php
$km = ($eo->km_counter_end - $eo->km_counter_start);
$mtgog = $eo -> geh_end - $eo -> geh_start;
$mtgobc = $eo -> leh_end - $eo -> leh_start;
$fuel = ($km * 3.1) + (($mtgog - $mtgobc) * 19);
?>

<table class="table table-sm">
  <thead class="table-dark">
    <tr>
      <th>Podsumowanie</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Przejechano</td>
      <td>{{ $km }} kilometrów</td>
    </tr>
    <tr>
      <td>Przepracowano</td>
      <td>{{ $mtgog }} motogodzin ogólnych</td>
    </tr>
    <tr>
      <td>Przepracowano</td>
      <td>{{ $mtgobc }} motogodzin pod obciążeniem</td>
    </tr>
    <tr>
      <td>Do zatankowania</td>
      <td>{{ $fuel }} litrów</td>
    </tr>
  </tbody>
</table>
</div>
@endsection
