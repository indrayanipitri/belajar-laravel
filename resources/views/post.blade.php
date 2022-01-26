
@extends('layouts.main')

@section('container')
<article class="mt-5"> 
    <h3>
        {{ $article->title }}
    </h3>
    <p>By. <a href="/authors/{{ articles -> user -> username }}"></a> in <a href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a></p>
    {!! $article->body !!}
    <div>
        <button class="btn btn-danger"><a href="/blog" style="color:white; text-decoration:none;"> Back </a>  </button>
    </div>
</article>
@endsection