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
@endsection
