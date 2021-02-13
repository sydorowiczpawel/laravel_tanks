@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/docstore">
                        @csrf
<!-- Type pass_number -->
                        <div class="form-group row">
                            <label for="pass_number" class="col-md-4 col-form-label text-md-right">{{ __('Numer przepustki') }}</label>

                            <div class="col-md-6">
                                <input id="pass_number" type="text" class="form-control @error('pass_number') is-invalid @enderror" name="pass_number" value="{{ Auth::user()->pass_number }}" required autocomplete="pass_number" autofocus>

                                @error('pass_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Tank tank_number -->
                        <div class="form-group row">
                            <label for="tank_number" class="col-md-4 col-form-label text-md-right">{{ __('Numer czołgu') }}</label>

                            <div class="col-md-6">
                                <input id="tank_number" type="text" class="form-control @error('tank_number') is-invalid @enderror" name="tank_number" required autocomplete="tank_number" autofocus>

                                @error('tank_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type series -->
                        <div class="form-group row">
                            <label for="series" class="col-md-4 col-form-label text-md-right">{{ __('Seria i numer rozkazu') }}</label>

                            <div class="col-md-6">
                                <input id="series" type="text" class="form-control @error('series') is-invalid @enderror" name="series" required autocomplete="series" autofocus>

                                @error('series')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type start_date -->
                        <div class="form-group row">
                            <label for="start_date" class="col-md-4 col-form-label text-md-right">{{ __('Data rozpoczęcia') }}</label>

                            <div class="col-md-6">
                                <input id="start_date" type="text" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="YYYY-MM-DD" required autocomplete="start_date" autofocus>

                                @error('start_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type end_date -->
                        <div class="form-group row">
                            <label for="end_date" class="col-md-4 col-form-label text-md-right">{{ __('Data wygaśnięcia') }}</label>

                            <div class="col-md-6">
                                <input id="end_date" type="text" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="YYYY-MM-DD" required autocomplete="end_date" autofocus>

                                @error('end_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type km_counter_start-->
                        <div class="form-group row">
                            <label for="km_counter_start" class="col-md-4 col-form-label text-md-right">{{ __('Początkowy licznik kilometrów') }}</label>
                            <div class="col-md-6">
                                <input id="km_counter_start" type="text" class="form-control @error('km_counter_start') is-invalid @enderror" name="km_counter_start" required autocomplete="km_counter_start" autofocus>
                                @error('km_counter_start')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type km_counter_end-->
                        <div class="form-group row">
                            <label for="km_counter_end" class="col-md-4 col-form-label text-md-right">{{ __('Końcowy licznik kilometrów') }}</label>
                            <div class="col-md-6">
                                <input id="km_counter_end" type="text" class="form-control @error('km_counter_end') is-invalid @enderror" name="km_counter_end" required autocomplete="km_counter_end" autofocus>
                                @error('km_counter_end')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type geh_start-->
                        <div class="form-group row">
                            <label for="geh_start" class="col-md-4 col-form-label text-md-right">{{ __('Początkowy licznik motogodzin ogólnych') }}</label>
                            <div class="col-md-6">
                                <input id="geh_start" type="text" class="form-control @error('geh_start') is-invalid @enderror" name="geh_start" value="0000,00" required autocomplete="geh_start" autofocus>
                                @error('geh_start')
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
                                <input id="geh_end" type="text" class="form-control @error('geh_end') is-invalid @enderror" name="geh_end" value="0000,00" required autocomplete="geh_end" autofocus>
                                @error('geh_end')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type leh_start-->
                        <div class="form-group row">
                            <label for="leh_start" class="col-md-4 col-form-label text-md-right">{{ __('Początkowy licznik motogodzin obciążonych') }}</label>
                            <div class="col-md-6">
                                <input id="leh_start" type="text" class="form-control @error('leh_start') is-invalid @enderror" name="leh_start" value="0000,00" required autocomplete="leh_start" autofocus>
                                @error('leh_start')
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
                                <input id="leh_end" type="text" class="form-control @error('leh_end') is-invalid @enderror" name="leh_end" value="0000,00" required autocomplete="leh_end" autofocus>
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
                                <input id="heater_min" type="text" class="form-control @error('heater_min') is-invalid @enderror" name="heater_min" value="czas pracy podaj w minutach" required autocomplete="heater_min" autofocus>
                                @error('heater_min')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type 7,62mm_ammo-->
                        <div class="form-group row">
                            <label for="7,62mm_ammo" class="col-md-4 col-form-label text-md-right">{{ __('7,62mm PKT') }}</label>
                            <div class="col-md-6">
                                <input id="7,62mm_ammo" type="text" class="form-control @error('7,62mm_ammo') is-invalid @enderror" name="7,62mm_ammo" value="podaj liczbę wystrzelonych pocisków" required autocomplete="7,62mm_ammo" autofocus>
                                @error('7,62mm_ammo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type 12,7mm_ammo-->
                        <div class="form-group row">
                            <label for="end_date" class="col-md-4 col-form-label text-md-right">{{ __('Data wygaśnięcia') }}</label>
                            <div class="col-md-6">
                                <input id="end_date" type="text" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="YYYY-MM-DD" required autocomplete="end_date" autofocus>

                                @error('end_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type 125mm_ammo-->
<div class="form-group row">
                            <label for="end_date" class="col-md-4 col-form-label text-md-right">{{ __('Data wygaśnięcia') }}</label>

                            <div class="col-md-6">
                                <input id="end_date" type="text" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="YYYY-MM-DD" required autocomplete="end_date" autofocus>

                                @error('end_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Register Button -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Dodaj') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection