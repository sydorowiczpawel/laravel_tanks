@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Register') }}</div>
          <div class="card-body">
            <form class="form group form-sm" method="POST" action="{{ route('register') }}">
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
                	<select id="rank" type="text" class="form-control" @error('rank') is-invalid @enderror" name="rank" value="{{ old('rank') }}" required autocomplete="rank" autofocus>
                  	<option>szer.</option>
                  	<option>st. szer.</option>
                  	<option>kpr.</option>
                  	<option>st. kpr.</option>
                  	<option>plut.</option>
                		<option>st. plut.</option>
                  	<option>sierż.</option>
                  	<option>st. sierż.</option>
                  	<option>mł. chor.</option>
                    <option>chor.</option>
                  	<option>st. chor.</option>
                    <option>st. chor. sztab.</option>
                  	<option>ppor.</option>
                  	<option>por.</option>
                  	<option>kpt.</option>
                  	<option>mjr.</option>
                  	<option>ppłk.</option>
                  	<option>płk.</option>
                	</select>
									@error('rank')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
							</div>
<!-- Type platoon -->
<div class="form-group row">
	<label for="platoon" class="col-md-4 col-form-label text-md-right">{{ __('Rank') }}</label>
	<div class="col-md-6">
		<select id="rank" type="text" class="form-control" @error('platoon') is-invalid @enderror" name="platoon" value="{{ old('platoon') }}" required autocomplete="platoon" autofocus>
			<option>I</option>
			<option>II</option>
			<option>III</option>
			<option>IV</option>
		</select>
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
