@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-grid gap-2">
    <a href="a_soldiers"><button class="button btn-primary" type="button">Soldiers</button></a>
    <a href=""><button class="button btn-primary btn-sm">Tanks</button></a>
    <a href=""><button class="button btn-primary btn-sm">Documents</button></a>
    {{-- <a href="/addSoldier"><button>Add a Soldier</button></a> --}}
    {{-- <a href="/addTank"><button>Add a Tank</button></a> --}}
  </div>
  <h2>26kzs - wykaz żołnierzy</h2>

<table class="table table-striped table-hover">
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
    <td>
      <a href="personalFile/{{ $object -> pass_number }}">
        <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></button>
      </a>
    </td>
    @endforeach
  </tr>
  <tr>
    @foreach($boss as $object)
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td>
      <a href="personalFile/{{ $object -> pass_number }}">
        <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></button>
      </a>
    </td>
    @endforeach
  </tr>
  <tr>
    @foreach($technician as $object)
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td><a href="personalFile/{{ $object -> pass_number }}">
      <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </a></td>
    @endforeach
  </tr>
  <tr>
    @foreach($gun_technician as $object)
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td><a href="personalFile/{{ $object -> pass_number }}">
      <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </a></td>
    @endforeach
  </tr>
  @foreach($p1_c as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td><a href="personalFile/{{ $object -> pass_number }}">
      <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </a></td>
  </tr>
  @endforeach
  @foreach($p1_pdp as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td><a href="personalFile/{{ $object -> pass_number }}">
      <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </a></td>
  </tr>
  @endforeach
  @foreach($p1_od as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td><a href="personalFile/{{ $object -> pass_number }}">
      <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </a></td>
  </tr>
  @endforeach
  @foreach($p1_d as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td><a href="personalFile/{{ $object -> pass_number }}">
      <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </a></td>
  </tr>
  @endforeach
  @foreach($p2_c as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td><a href="personalFile/{{ $object -> pass_number }}">
      <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </a></td>
  </tr>
  @endforeach
  @foreach($p2_pdp as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td><a href="personalFile/{{ $object -> pass_number }}">
      <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </a></td>
  </tr>
  @endforeach
  @foreach($p2_od as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td>
      <a href="personalFile/{{ $object -> pass_number }}">
      <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </a>
  </td>
  </tr>
  @endforeach
  @foreach($p2_d as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td><a href="personalFile/{{ $object -> pass_number }}">
      <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </a></td>
  </tr>
  @endforeach
  @foreach($p3_c as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td><a href="personalFile/{{ $object -> pass_number }}">
      <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </a></td>
  </tr>
  @endforeach
  @foreach($p3_pdp as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td><a href="personalFile/{{ $object -> pass_number }}">
      <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </a></td>
  </tr>
  @endforeach
  @foreach($p3_od as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td><a href="personalFile/{{ $object -> pass_number }}">
      <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </a></td>
  </tr>
  @endforeach
  @foreach($p3_d as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td><a href="personalFile/{{ $object -> pass_number }}">
      <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </a></td>
  </tr>
  @endforeach
  @foreach($p4_c as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td><a href="personalFile/{{ $object -> pass_number }}">
      <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </a></td>
  </tr>
  @endforeach
  @foreach($p4_pdp as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td><a href="personalFile/{{ $object -> pass_number }}">
      <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </a></td>
  </tr>
  @endforeach
  @foreach($p4_od as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td><a href="personalFile/{{ $object -> pass_number }}">
      <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </a></td>
  </tr>
  @endforeach
  @foreach($p4_d as $object)
  <tr>
    <td>{{ $object -> pass_number }}</td>
    <td>{{ $object -> rank }} {{ $object -> name }} {{ $object -> surname }}</td>
    <td>{{ $object -> function }}</td>
    <td>{{ $object -> platoon }}</td>
    <td><a href="personalFile/{{ $object -> pass_number }}">
      <button class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </a></td>
  </tr>
  @endforeach
</table>
</div>
@endsection
