@extends('layouts.app')

@section('content')
    @foreach($posts as $post)


        <div class="card">
        <img src="../imeg/2.jpg" alt="John" style="width:80%">
        <h1>{{ $post->title }}</h1>
        <p class="title">{{ $post->created_at }}</p>
        <p>{{ $post->description }}</p>

        <p><button class="bpod">Подробнее</button></p>
        </div>
    @endforeach
@endsection
