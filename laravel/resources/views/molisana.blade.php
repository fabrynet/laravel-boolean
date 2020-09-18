@extends('layouts.main-layout')

@section('content')

  @isset($data)

    <h1>LE LUNGHE</h1>
    <div class="products">
      @foreach ($data as $pasta)
        @if ($pasta['tipo'] === 'lunga')
          @include('partials.product')
        @endif
      @endforeach
    </div>
    <div class="clearfix"></div>

    <h1>LE CORTE</h1>
    <div class="products">
      @foreach ($data as $pasta)
        @if ($pasta['tipo'] === 'corta')
          @include('partials.product')
        @endif
      @endforeach
    </div>
    <div class="clearfix"></div>

    <h1>LE CORTISSIME</h1>
    <div class="products">
      @foreach ($data as $pasta)
        @if ($pasta['tipo'] === 'cortissima')
          @include('partials.product')
        @endif
      @endforeach
    </div>
    <div class="clearfix"></div>

  @endisset

  @empty ($data)
    <h1>Non ci sono prodotti da visualizzare</h1>
  @endempty

@endsection
