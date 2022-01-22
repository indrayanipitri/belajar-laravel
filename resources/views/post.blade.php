
@extends('layouts.main')

@section('container')
<article class="mt-5"> 
    <h3>
        {{ $article->title }}
    </h3>
    {!! $article->body !!}
    <div>
        <button class="btn btn-danger"><a href="/blog" style="color:white; text-decoration:none;"> Back </a>  </button>
    </div>
</article>
@endsection