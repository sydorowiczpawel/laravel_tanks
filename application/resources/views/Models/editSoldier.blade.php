@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                <div class="container">

    {!! Form::open(['url' => '/updateSoldier/'.$user->id, 'method' => 'POST']) !!}
    {{ Form::token() }}

<table id="customers">
  <tr>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td>{{Form::label('id', 'ID')}}</td>
    <td>{{Form::label('id', Auth::user()->id, ['class' => 'form-control'])}}</td>
  </tr>
  <tr>
    <td>{{Form::label('pass_number', 'Imie i Nazwisko')}}</td>
    <td>{{Form::text('name', Auth::user()->name, ['class' => 'form-control'])}}</td>
  </tr>
  <tr>
    <td>{{Form::label('name', 'Imie i Nazwisko')}}</td>
    <td>{{Form::text('name', Auth::user()->name, ['class' => 'form-control'])}}</td>
  </tr>
  <tr>
    <td>{{Form::label('email', 'Adres e-mail')}}</td>
    <td>{{Form::text('email', Auth::user()->email, ['class' => 'form-control'])}}</td>
  </tr>
  <tr>
    <td>{{Form::label('account_number', 'Numer konta')}}</td>
    <td>{{Form::text('account_number', Auth::user()->account_number, ['class' => 'form-control'])}}</td>
  </tr>
  <tr>
    <td>{{Form::label('user_id', 'IDK użytkownika')}}</td>
    <td>{{Form::text('user_id', Auth::user()->user_id, ['class' => 'form-control'])}}</td>
  </tr>
  <tr>
    <td>{{Form::label('password', 'Hasło')}}</td>
    <td>{{Form::text('password', Auth::user()->password, ['class' => 'form-control'])}}</td>
  </tr>
  <tr>
    <td>{{Form::label('saldo', 'Stan konta')}}</td>
    <td>{{Form::text('saldo', Auth::user()->saldo, ['class' => 'form-control'])}}</td>
  </tr>
</table>

<div>
{{Form::submit('Submit', ['class' => 'button button_green'])}}
{!!Form::close() !!}
<a href="/home"><button class="button button_red">Cancel</button></a>
</div>
<div><td>
  <button class="button" onclick="accountNumberGenerator()">Generuj numer konta</button></td>
  <label type="text" id="numer_konta">
</div>
<div>
  <td><button class="button" onclick="idkGenerator()">Generuj numer IDK</button>
  <label type="text" id="numer_idk"></td>

</div>


                    <form method="POST" action="/updateSoldier/{id}">
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
<!-- Type name -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type surname -->
                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type rank -->
                        <div class="form-group row">
                            <label for="rank" class="col-md-4 col-form-label text-md-right">{{ __('Rank') }}</label>

                            <div class="col-md-6">
                                <input id="rank" type="text" class="form-control @error('rank') is-invalid @enderror" name="rank" value="{{ old('rank') }}" required autocomplete="rank" autofocus>

                                @error('rank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type platoon -->
                        <div class="form-group row">
                            <label for="platoon" class="col-md-4 col-form-label text-md-right">{{ __('Platoon') }}</label>

                            <div class="col-md-6">
                                <input id="platoon" type="text" class="form-control @error('platoon') is-invalid @enderror" name="platoon" value="{{ old('platoon') }}" required autocomplete="platoon" autofocus>

                                @error('platoon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type e-mail -->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Type Password -->
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- Confirm Password -->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
<!-- Register Button -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
