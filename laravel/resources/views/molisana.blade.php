@extends('layouts.main-layout')

@section('content')
  @isset($data)
    <h1>LE LUNGHE</h1>
    @foreach ($data as $pasta)
      @if ($pasta['tipo'] === 'lunga')
        <img src="{{ $pasta['src'] }}" alt="">
      @endif
    @endforeach
    <h1>LE CORTE</h1>
    @foreach ($data as $pasta)
      @if ($pasta['tipo'] === 'corta')
        <img src="{{ $pasta['src'] }}" alt="">
      @endif
    @endforeach
    <h1>LE CORTISSIME</h1>
    @foreach ($data as $pasta)
      @if ($pasta['tipo'] === 'cortissima')
        <img src="{{ $pasta['src'] }}" alt="">
      @endif
    @endforeach
  @endisset
  @empty ($data)
    <h1>Non ci sono prodotti da visualizzare</h1>
  @endempty
@endsection
