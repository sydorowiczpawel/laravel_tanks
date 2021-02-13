@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Zalogowany:
                    <p>ID: {{ Auth::user()->pass_number }}</p>
                    <p>{{ Auth::user()->rank }} {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
                    <p>Pluton {{ Auth::user()->platoon }}</p>
                    <p>E-mail: {{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add a tank') }}</div>

                <div class="card-body">
                    <form method="POST" action="/tankStore">
                        @csrf
<!-- Type pass number -->
                        <div class="form-group row">
                            <label for="pass_number" class="col-md-4 col-form-label text-md-right">{{ __('Pass number') }}</label>

                            <div class="col-md-6">
                                <input id="pass_number" type="text" class="form-control @error('pass_number') is-invalid @enderror" name="pass_number" value="{{ old('pass_number') }}" required autocomplete="pass_number" autofocus>

                                @error('pass_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type tank model -->
                        <div class="form-group row">
                            <label for="model" class="col-md-4 col-form-label text-md-right">{{ __('Model') }}</label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control @error('model') is-invalid @enderror" name="model" value="{{ old('model') }}" required autocomplete="model" autofocus>

                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type tank number -->
                        <div class="form-group row">
                            <label for="tank_number" class="col-md-4 col-form-label text-md-right">{{ __('Number') }}</label>

                            <div class="col-md-6">
                                <input id="tank_number" type="text" class="form-control @error('tank_number') is-invalid @enderror" name="tank_number" value="{{ old('tank_number') }}" required autocomplete="tank_number" autofocus>

                                @error('tank_number')
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
                                    {{ __('Add') }}
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