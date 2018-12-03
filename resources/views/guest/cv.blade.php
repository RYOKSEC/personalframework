@extends('layouts.guest')
@section('cv')
@if(count($cvg) < 1)
<br>
<h2>No cv has been inserted by the admin yet</h2>
@else
  @foreach($cvg as $cv)
    @include('guest.cvinc.cvdata')
  @endforeach
@endif
@endsection
