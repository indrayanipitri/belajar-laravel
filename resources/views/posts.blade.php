@extends('layouts.main')

@section('container')

    <h2 class="mt-3">Halaman Blog</h2>
    @foreach ($articles as $article)
        <article class="mt-5 border-bottom pb-4"> 
            
            <h3>
                <a href="/post/{{ $article->slug }}" class="text-decoration-none">
                    {{ $article->title }}
                </a>
            </h3>

            <p>By. <a href="/authors/{{ $article->user->username }}">{{ $article->user->name }}</a> in <a href="/categories/{{ $article->category->slug }}" class="text-decoration-none">{{ $article->category->name }}</a></p>

            <p>{{ $article->excerpt }}</p>

            <a href="/post/{{ $article->slug }}"  class="text-decoration-none"> read more</a>
        </article>
    @endforeach

@endsection