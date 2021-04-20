@extends('layouts.app')

@section('content')
<div class="container">
  <a href="a_soldiers"><button class="button">Soldiers</button></a>
  <button class="button">Tanks</button>
  <button class="button">Documents</button>
    {{-- <a href="/addSoldier"><button>Add a Soldier</button></a> --}}
    {{-- <a href="/addTank"><button>Add a Tank</button></a> --}}

    <h2>26kzs - wykaz żołnierzy</h2>

<table class="table table-striped">
  <tr>
    <th>nr. przepustki</th>
    <th>stopień imie i Nazwisko</th>
    <th>funkcja</th>
    <th>Pluton</th>
    <th>Action</th>
  </tr>

  <tr>
    @foreach($commander as $object)
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td></td>
    @endforeach
  </tr>
  <tr>
    @foreach($boss as $object)
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td></td>
    @endforeach
  </tr>
  <tr>
    @foreach($technician as $object)
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td></td>
    @endforeach
  </tr>
  <tr>
    @foreach($gun_technician as $object)
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td></td>
    @endforeach
  </tr>
  @foreach($p1c as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td></td>
  </tr>
  @endforeach
  @foreach($p1 as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td></td>
  </tr>
  @endforeach
  @foreach($p2 as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td></td>
  </tr>
  @endforeach
  @foreach($p3 as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td></td>
  </tr>
  @endforeach
  @foreach($p4 as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td></td>
  </tr>
  @endforeach

</table>
</div>
@endsection
