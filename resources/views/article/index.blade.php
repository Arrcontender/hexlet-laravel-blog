@extends('layouts.app')

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <h1>Articles</h1>
    <a class="text-decoration-none" href="{{ route('articles.create') }}">Create Article</a>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td><a class="text-decoration-none" href="{{route('articles.show', $article->id)}}">{{$article->name}}</a></td>
                        <td><a class="text-decoration-none" href="{{route('articles.edit', $article->id)}}">Edit</td>
                        <td><form action="{{ route('articles.destroy', $article->id) }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <button type="submit">Delete</button></form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{$articles->links()}}
    <div>
@endsection