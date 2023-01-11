@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h3 class="text-center">La lista dei progetti</h3>
        <div class="text-end">
            <a class="btn btn-success" href="{{ route('admin.posts.create') }}">
                Nuovo progetto
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Data di creazione</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{ $post->title }}</th>
                                <td>{{ $post->created_at }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('admin.posts.show', $post->slug) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
