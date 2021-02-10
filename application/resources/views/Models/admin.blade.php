@extends('layouts.app')

@section('content')
    <a href="/addSoldier"><button>Add a Soldier</button></a>
    <a href="/addTank"><button>Add a Tank</button></a>

    <h2>Lista klientów banku</h2>

<table>
  <tr>
    <th>ID</th>
    <th>stopień imie i Nazwisko</th>
    <th>Pluton</th>
    <th>Action</th>
  </tr>
  @foreach($users as $user)
  <tr>
    <td>{{$user -> pass_number }}</td>
    <td>{{$user -> rank }} {{$user -> name }} {{$user -> surname }}</td>
    <td>{{$user -> platoon }}</td>
    <td>
      <!-- Edytowanie użytkownika -->
      <a href="/editSoldier/{{$user->id}}"><button class="button button1">Edit</button></a>

      <!-- Usuwanie użytkownika -->
      <form action="deleteSoldier/{{ $user->id }}" method="POST">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <button type="submit" class="button button2">DELETE</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>
@endsection
