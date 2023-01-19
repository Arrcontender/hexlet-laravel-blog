@extends('layouts.app')

@section('content')
    <h1>Article</h1>
        <h2>{{$article->name}}</h2>
        <div>{{ $article->body }}</div>
        <a href="{{ route('articles.edit', $article->id) }}">Edit article</a>
        <form action="{{ route('articles.destroy', $article->id) }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            <button type="submit">Delete</button>
        </form>
@endsection