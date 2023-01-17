@extends('layouts.app')

@section('content')
    <h1>Статья</h1>
        <h2>{{$article->name}}</h2>
        <div>{{ $article->body }}</div>
@endsection