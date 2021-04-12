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
                    <div class="col-md-5 col-md-pull-9">{{$eo -> km_counter_start}} -> {{$eo -> km_counter_end}}</div>
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
                    <div class="col-md-5 col-md-pull-9">{{$eo -> heater_min}}</div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-md-push-3">Wystrzelono PKT</div>
                    <div class="col-md-5 col-md-pull-9">{{$eo -> PKT}}</div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-md-push-3">Wystrzelono NSWT</div>
                    <div class="col-md-5 col-md-pull-9">{{$eo -> NSWT}}</div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-md-push-3">Wystrzelono z armaty</div>
                    <div class="col-md-5 col-md-pull-9">{{$eo -> armata}}</div>
                </div>
                @endforeach
            </div>

            <table class="table">
                <thead>
                  <tr>Jakiś nagłówek</tr>
                </thead>
                <tbody>
                  <tr class="table-active">
                    <td>Przejechano km</td>
                    <td>{{ $eo -> km_counter_end }} - {{ $eo -> km_counter_start }}</td>
                  </tr>
                  <tr>
                    <td>Przepracowano mtgOg</td>
                    <td>{{ $eo -> geh_end }} - {{ $eo -> geh_start }}</td>
                  </tr>
                  <tr>
                    <td>Przepracowano mtgObc</td>
                    <td>{{ $eo -> leh_end }} - {{ $eo -> leh_start }}</td>
                  </tr>
                  <tr>
                    <td>Do zatankowania</td>
                    <td>obliczenia</td>
                  </tr>
                </tbody>
              </table>
        </div>
                <a href="/editexitorder/{{$eo->id}}"><button type="button" class="btn btn-warning">Zakończ rozkaz</button></a>
    </div>
</div>
@endsection
