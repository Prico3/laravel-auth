@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        @if ($post->cover_image)
            <img src="{{ asset('storage/' . $post->cover_image) }}" alt="{{ 'Cover image di ' . $post->title }}">
        @else
            <div class="w-50 bg-secondary py-4 text-center">
                No image yet
            </div>
        @endif

        <p>{{ $post->content }}</p>


    </div>
@endsection
