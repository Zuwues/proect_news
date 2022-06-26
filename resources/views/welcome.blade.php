@extends('layouts.app')

@section('content')
    @foreach($posts as $post)
        <div class="content-posts">
        <p class="posts">Название: {{ $post->title }} </p>
        <p class="posts2">Текст: <br> {{ $post->description }}</p>
        <p class="posts3">{{ $post->created_at }}</p>
        </div>
    @endforeach
@endsection
