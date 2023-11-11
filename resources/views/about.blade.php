@extends('layouts.main')
 

@section('container')
    <h1>Halaman About</h1>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="100px">
    <h3>{{ $name }}</h2>
    <h5>{{ $email }}</h3>
@endsection