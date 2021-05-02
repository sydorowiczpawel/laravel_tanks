@extends('layouts.app')
@section('content')

<div class="container">
  {{-- tabela z dokumentami --}}
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
  {{-- Tabela z czołgami --}}
  <table class="table table-sm">
    <thead class="table-dark">
      <tr>
        <th>nr. pojazdu</th>
        <th>licznik km</th>
        <th>mtgOG</th>
        <th>mtgOBC</th>
        <th>OO-1</th>
        <th>OO-2</th>
        <th>wymiana oleju</th>
      </tr>
    </thead>
    @foreach($tanks as $tank)
    <tbody>
      <tr>
        <td>{{ $tank->tank_number }}</td>
        <td>km</td>
        <td>OG</td>
        <td>OBC</td>
        <td>OO-1</td>
        <td>OO-2</td>
        <td>olej</td>
      </tr>
    </tbody>
    @endforeach
  </table>

  {{-- Tabela z rozkazami wyjazdu --}}
  <table class="table table-sm">
    <thead class="table-dark">
      <tr>
        <th>nr. rozkazu</th>
        <th>pojazd</th>
        <th>data rozpoczęcia</th>
        <th>data zakończenia</th>
        <th>kilometry</th>
        <th>mtg og</th>
        <th>mtg obc</th>
        <th></th>
      </tr>
    </thead>
    @foreach($eos as $eo)
    <tbody>
      <tr>
        <td>{{ $eo -> series }}</td>
        <td>{{ $eo -> tank_number }}</td>
        <td>{{ $eo -> start_date }}</td>
        <td>{{ $eo -> end_date }}</td>
        @if($eo -> geh_end === NULL)
        <td></td>
        <td></td>
        <td></td>
        <td>
          <button class="btn btn-warning btn-sm">
            <a href="/editexitorder/{{ $eo -> id }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-braces" viewBox="0 0 16 16"><path d="M2.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C3.25 2 2.49 2.759 2.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6zM13.886 7.9v.163c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456V7.332c-1.114 0-1.49-.362-1.49-1.456V4.352C13.51 2.759 12.75 2 11.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6z"/></svg>
            </a>
          </button>
        </td>
        @else
        <td>{{ $eo -> km_counter_end}}</td>
        <td>{{ $eo -> geh_end}}</td>
        <td>{{ $eo -> leh_end}}</td>
        <td>
          {{-- Zobacz szczegóły --}}
        <button class="btn btn-warning btn-sm">
          <a href="/eodetails/{{ $eo -> id }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
          </a>
        </button>
        </td>
        @endif
      </tr>
    </tbody>
    @endforeach
  </table>
</div>
@endsection