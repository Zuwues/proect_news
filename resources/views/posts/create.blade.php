@extends('layouts.app')

@section('content')
    <!-- Form-->
    <div class="form">
        <div class="form-toggle"></div>
        <div class="form-panel one">


                <div class="container3">
                <h1 class="named">Создать пост</h1>
                <form action="{{ route('posts.store') }}" method="post">
                @csrf
                    <label for="fname">Название</label>
                    <input class="text34" id="title" type="text" name="title" placeholder="Ваше название..">
                    @error('title')
                        <span style="color: red">{{$message}}</span>
                        @enderror

                    

                    <label for="subject">Описание</label>
                    <textarea class="textar" id="description" name="description" placeholder="Описание.." style="height:200px"></textarea>
                    @error('description')
                        <span style="color: red">{{$message}}</span>
                        @enderror

                        <input class="subm" type="submit" value="Создать">
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
