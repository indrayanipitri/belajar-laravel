
@extends('layouts.main')

@section('container')
<article class="mt-5"> 
    <h3>
        {{ $article["judul"] }}
    </h3>
    <h4>By: {{ $article["author"] }}</h4>
    <p>{{ $article["text"] }}</p>
    <div>
        <button class="btn btn-danger"><a href="/blog" style="color:white; text-decoration:none;"> Back </a>  </button>
    </div>
</article>
@endsection