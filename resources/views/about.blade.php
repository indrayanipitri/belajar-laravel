@extends('layouts.main')

@section('container')
    <h2>Biodata</h2>
    <hr>
    <h3>{{ $name }} </h3>
    <h3>{{ $email }} </h3>
    <img src="img/{{ $image }}" alt="{{ $name }} >" width="200">
@endsection
    
   
