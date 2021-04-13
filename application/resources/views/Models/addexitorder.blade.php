@extends('layouts.app')

@section('content')
<div class="container">
	<form method="POST" action="/exitorderstore/{{ Auth::user()->pass_number}}">
		@csrf
		<!-- </fieldset> -->
		<!-- Tank tank_number -->
		<div class="form-group row">
			<label for="tank_number" class="col-md-4 col-form-label text-md-right">{{ __('Tank number') }}</label>
			<div class="col-md-6">
        <select id="tank_number" name="tank_number" type="text" class="form-control" >
					@foreach ($tanks as $tank)
						<option>{{ $tank -> tank_number }}</option>
					@endforeach
        </select>
      </div>
		</div>
<!-- Type series -->
        <div class="form-group row">
            <label for="series" class="col-md-4 col-form-label text-md-right">{{ __('Seria i numer rozkazu') }}</label>
            <div class="col-md-6">
                <input id="series" type="text" class="form-control @error('series') is-invalid @enderror" name="series">
                @error('series')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
<!-- Type start_date -->
        <div class="form-group row">
            <label for="start_date" class="col-md-4 col-form-label text-md-right">{{ __('Data rozpoczęcia') }}</label>
            <div class="col-md-6">
                <input id="start_date" type="text" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="YYYY-MM-DD">
                @error('start_date')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
<!-- Type end_date -->
        <div class="form-group row">
            <label for="end_date" class="col-md-4 col-form-label text-md-right">{{ __('Data wygaśnięcia') }}</label>
            <div class="col-md-6">
                <input id="end_date" type="text" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="YYYY-MM-DD">
                @error('end_date')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
<!-- Type km_start-->
        <div class="form-group row">
            <label for="km_start" class="col-md-4 col-form-label text-md-right">{{ __('Początkowy licznik kilometrów') }}</label>
            <div class="col-md-6">
                <input id="km_start" type="text" class="form-control @error('km_start') is-invalid @enderror" name="km_start">
                @error('km_start')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
<!-- Type km_counter_end-->
                        <!-- <div class="form-group row">
                            <label for="km_counter_end" class="col-md-4 col-form-label text-md-right">{{ __('Końcowy licznik kilometrów') }}</label>
                            <div class="col-md-6">
                                <input id="km_counter_end" type="text" class="form-control @error('km_counter_end') is-invalid @enderror" name="km_counter_end">
                                @error('km_counter_end')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
<!-- Type geh_start-->
                        <div class="form-group row">
                            <label for="geh_start" class="col-md-4 col-form-label text-md-right">{{ __('Początkowy licznik motogodzin ogólnych') }}</label>
                            <div class="col-md-6">
                                <input id="geh_start" type="text" class="form-control @error('geh_start') is-invalid @enderror" name="geh_start" value="0000,00">
                                @error('geh_start')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type geh_end-->
                        <!-- <div class="form-group row">
                            <label for="geh_end" class="col-md-4 col-form-label text-md-right">{{ __('Końcowy licznik motogodzin ogólnych') }}</label>
                            <div class="col-md-6">
                                <input id="geh_end" type="text" class="form-control @error('geh_end') is-invalid @enderror" name="geh_end" value="0000,00">
                                @error('geh_end')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
<!-- Type leh_start-->
                        <div class="form-group row">
                            <label for="leh_start" class="col-md-4 col-form-label text-md-right">{{ __('Początkowy licznik motogodzin obciążonych') }}</label>
                            <div class="col-md-6">
                                <input id="leh_start" type="text" class="form-control @error('leh_start') is-invalid @enderror" name="leh_start" value="0000,00">
                                @error('leh_start')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type leh_end-->
                        <!-- <div class="form-group row">
                            <label for="leh_end" class="col-md-4 col-form-label text-md-right">{{ __('Końcowy licznik motogodzin obciążonych') }}</label>
                            <div class="col-md-6">
                                <input id="leh_end" type="text" class="form-control @error('leh_end') is-invalid @enderror" name="leh_end" value="0000,00">
                                @error('leh_end')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
<!-- Type heater_min-->
                        <!-- <div class="form-group row">
                            <label for="heater_min" class="col-md-4 col-form-label text-md-right">{{ __('Czas pracy podgrzewacza') }}</label>
                            <div class="col-md-6">
                                <input id="heater_min" type="text" class="form-control @error('heater_min') is-invalid @enderror" name="heater_min" value="czas pracy podaj w minutach">
                                @error('heater_min')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
<!-- Type 7,62mm_ammo-->
                        <!-- <div class="form-group row">
                            <label for="7,62mm_ammo" class="col-md-4 col-form-label text-md-right">{{ __('7,62mm PKT') }}</label>
                            <div class="col-md-6">
                                <input id="7,62mm_ammo" type="text" class="form-control @error('7,62mm_ammo') is-invalid @enderror" name="7,62mm_ammo" value="podaj liczbę wystrzelonych pocisków">
                                @error('7,62mm_ammo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
<!-- Type 12,7mm_ammo-->
                        <!-- <div class="form-group row">
                            <label for="end_date" class="col-md-4 col-form-label text-md-right">{{ __('Data wygaśnięcia') }}</label>
                            <div class="col-md-6">
                                <input id="end_date" type="text" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="YYYY-MM-DD">

                                @error('end_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
<!-- Type 125mm_ammo-->
                        <!-- <div class="form-group row">
                            <label for="end_date" class="col-md-4 col-form-label text-md-right">{{ __('Data wygaśnięcia') }}</label>

                            <div class="col-md-6">
                                <input id="end_date" type="text" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="YYYY-MM-DD">

                                @error('end_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
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