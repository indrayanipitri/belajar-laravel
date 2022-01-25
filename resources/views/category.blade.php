@extends('layouts.main')

@section('container')

    <h2 class="mt-3">Article Category : {{ $category }}</h2>
    @foreach ($articles as $article)
        <article class="mt-5"> 
            
            <h3>
                <a href="/post/{{ $article->slug }}">
                    {{ $article->title }}
                </a>
            </h3>
            <p>{{ $article->excerpt }}</p>
        </article>
    @endforeach

@endsection