@extends('layouts.app')
@section('content')

<div class="container">
	<table class="table table-sm" style="max-width: 75%">
    <thead class="table-dark">
      <tr>
        <th>{{ Auth::user()->rank }} {{ Auth::user()->name }} {{ Auth::user()->surname }}</th>
        <th>przepustka nr. {{ Auth::user()->pass_number }}</th>
			</tr>
    </thead>
    <tbody>
			@foreach($docs as $doc)
      <tr>
        <td>{{$doc -> name }}</td>
        <td>{{$doc -> end_date}}</td> 
			</tr>
			@endforeach
    </tbody>
  </table>
</div>
@endsection