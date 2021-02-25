@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/updateexitorder/{{$eo->id}}">
    @csrf
<!-- Type km_counter_end-->
                        <div class="form-group row">
                            <label for="km_counter_end" class="col-md-4 col-form-label text-md-right">{{ __('Końcowy licznik kilometrów') }}</label>
                            <div class="col-md-6">
                                <input id="km_counter_end" type="text" class="form-control @error('km_counter_end') is-invalid @enderror" name="km_counter_end" value="0000,00">
                                @error('km_counter_end')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type geh_end-->
                        <div class="form-group row">
                            <label for="geh_end" class="col-md-4 col-form-label text-md-right">{{ __('Końcowy licznik motogodzin ogólnych') }}</label>
                            <div class="col-md-6">
                                <input id="geh_end" type="text" class="form-control @error('geh_end') is-invalid @enderror" name="geh_end" value="0000,00">
                                @error('geh_end')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type leh_end-->
                        <div class="form-group row">
                            <label for="leh_end" class="col-md-4 col-form-label text-md-right">{{ __('Końcowy licznik motogodzin obciążonych') }}</label>
                            <div class="col-md-6">
                                <input id="leh_end" type="text" class="form-control @error('leh_end') is-invalid @enderror" name="leh_end" value="0000,00">
                                @error('leh_end')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type heater_min-->
                        <div class="form-group row">
                            <label for="heater_min" class="col-md-4 col-form-label text-md-right">{{ __('Czas pracy podgrzewacza') }}</label>
                            <div class="col-md-6">
                                <input id="heater_min" type="text" class="form-control @error('heater_min') is-invalid @enderror" name="heater_min" value="czas pracy podaj w minutach">
                                @error('heater_min')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type 7,62mm_ammo-->
                        <div class="form-group row">
                            <label for="PKT" class="col-md-4 col-form-label text-md-right">{{ __('PKT wystrzelono') }}</label>
                            <div class="col-md-6">
                                <input id="PKT" type="text" class="form-control @error('PKT') is-invalid @enderror" name="PKT" value="podaj liczbę wystrzelonych pocisków">
                                @error('PKT')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type 12,7mm_ammo-->
                        <div class="form-group row">
                            <label for="NSWT" class="col-md-4 col-form-label text-md-right">{{ __('NSWT wystrzelono') }}</label>
                            <div class="col-md-6">
                                <input id="NSWT" type="text" class="form-control @error('NSWT') is-invalid @enderror" name="NSWT" value="podaj liczbę wystrzelonych pocisków">
                                @error('NSWT')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type 125mm_ammo-->
                        <div class="form-group row">
                            <label for="2A46" class="col-md-4 col-form-label text-md-right">{{ __('2A46 wystrzelono') }}</label>
                            <div class="col-md-6">
                                <input id="2A46" type="text" class="form-control @error('2A46') is-invalid @enderror" name="2A46" value="podaj liczbę wystrzelonych pocisków">
                                @error('2A46')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Register Button -->
                    </div>
                            <div>
                                <button type="submit" class="btn btn-success">{{ __('Dodaj') }}</button>
                    </form>
                                <a href="/exitorderslst"><button class="btn btn-primary">{{ __('Powrót') }}</button></a>
                            </div>
                </div>
<div class="card">
@endsection