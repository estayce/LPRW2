@extends('layouts.main')

@section('content')
@foreach($teste as $testes)
    <p>{{ $testes->campoteste1 }} -- {{ $testes->campoteste2 }}<p>
@endforeach
@endsection