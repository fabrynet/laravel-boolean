@extends('layouts.main-layout')

@section('content')
  @isset($data)
    
  @endisset
  @empty ($data)
    <h1>Non ci sono prodotti da visualizzare</h1>
  @endempty
@endsection
