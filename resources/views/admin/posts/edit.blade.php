@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="text-center">Modifica {{ $post->title }}</h2>
        <div class="row justify-content-center">
            <div class="col-8">
                @include('partials.errors')
                <form action="{{ route('admin.posts.update', $post->slug) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" id="title" name="title" class="form-control"
                            value="{{ old('title', $post->title) }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="cover_image">Immagine</label>
                        <input type="file" name="cover_image" id="cover_image" class="form-control">

                        {{-- Preview dell'immagine esistente --}}
                        <div class="mt-3" style="max-height: 200px">
                            <img id="image_preview" src="{{ asset('storage/' . $post->cover_image) }}"
                                alt="{{ 'Cover image di ' . $post->title }}">
                        </div>
                    </div>

                    <div class="form-group mt-3 mb-3">
                        <label for="content">Descrizione</label>
                        <textarea name="content" id="content" rows="10" class="form-control">{{ old('content', $post->content) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-warning">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
