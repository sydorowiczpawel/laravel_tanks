@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->rank }} {{ Auth::user()->name }} {{ Auth::user()->surname }}</div>
                <div class="row">
                    <div class="col-md-9 col-md-push-3">Numer przepustki</div>
                    <div class="col-md-3 col-md-pull-9">{{ Auth::user()->pass_number }}</div>
                </div>
                <div class="row">
                    <div class="col-md-9 col-md-push-3">Pluton</div>
                    <div class="col-md-3 col-md-pull-9">{{ Auth::user()->platoon }}</div>
                </div>
                @foreach($docs as $doc)
                <div class="row">
                    <div class="col-md-9 col-md-push-3">{{$doc -> name }}</div>
                    <div class="col-md-3 col-md-pull-9">{{$doc -> end_date}}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
