@extends('layouts.app')
@section('content')

<div class="container">
	<table class="table table-sm">
    <thead class="table-dark">
      <tr>
        @foreach($user as $object)
        <th>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }} </th>
        @endforeach
        <th>przepustka nr. {{ $object -> pass_number }} </th>
        <th>
          <?php
          echo date("l ") . date("d-m-Y");
          ?>
          </th>
			</tr>
    </thead>
    <tbody>
			@foreach($docs as $doc)

      <?php
      $today = new DateTime(date("Y-m-d"));
      $appt  = new DateTime($doc -> end_date);
      $days = $appt->diff($today)->days;
      ?>

      <tr>
        <td>{{$doc -> name }}</td>
        <td>ważne do {{$doc -> end_date}}</td>
        <td>upływa za {{$days}} dni</td>
        @endforeach
			</tr>
    </tbody>
  </table>
</div>
@endsection