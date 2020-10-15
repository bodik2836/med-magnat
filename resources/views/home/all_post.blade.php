@extends('layouts.main_layout')

@section('content')

    <div class="container">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-12">
                    <a href="/post/show/{{ $post->id }}">
                        <div class="card news-card mt-3">
                            <img src="{{ asset($post->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->description }}</p>
                                <div class="row">
                                    <h6 class="card-subtitle text-muted col-6">{{ $post->updated_at->format('d.m.Y') }}</h6>
                                    <h6 class="card-subtitle text-muted text-right col-6">{{ $post->updated_at->format('H:i') }}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
