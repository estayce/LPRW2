@extends('layouts.main')

@section('content')
@foreach($welcome as $welcome)
    <p>{{ $welcome->nome }} -- {{ $welcome->teste }}<p>
@endforeach
@endsection