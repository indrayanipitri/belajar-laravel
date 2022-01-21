@extends('layouts.main')

@section('container')

    @foreach ($articles as $article)
        <article class="mt-5"> 
            <h3>
                <a href="/post/{{ $article["slug"] }}">
                    {{ $article["judul"] }}
                </a>
            </h3>
            <h4>By: {{ $article["author"] }}</h4>
            <p>{{ $article["text"] }}</p>
        </article>
    @endforeach

@endsection