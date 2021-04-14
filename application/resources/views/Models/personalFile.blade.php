@extends('layouts.app')
@section('content')

<div class="container">
	<table class="table table-sm">
    <thead class="table-dark">
      <tr>
        <th>{{ Auth::user()->rank }} {{ Auth::user()->name }} {{ Auth::user()->surname }}</th>
        <th>przepustka nr. {{ Auth::user()->pass_number }}</th>
        <th></th>
			</tr>
    </thead>
    <tbody>
			@foreach($docs as $doc)
      <tr>
        <td>{{$doc -> name }}</td>
        <td>ważne do {{$doc -> end_date}}</td>
        <td>upływa za 100 dni</td>
			</tr>
			@endforeach
    </tbody>
  </table>
</div>
@endsection