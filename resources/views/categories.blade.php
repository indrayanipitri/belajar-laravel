@extends('layouts.main')

@section('container')

    <h2 class="mt-3">{{ $title }}</h2>
    @foreach ($categories as $category)
        <ul>
            <li>
                <h3>
                    <a href="/categories/{{ $category->slug }}">
                        {{ $category->name }}
                    </a>
                </h3>
            </li>
        </ul>
            
            
            
        
    @endforeach

@endsection