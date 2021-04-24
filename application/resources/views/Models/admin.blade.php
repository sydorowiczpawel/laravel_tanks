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
</div>
@endsection
