@extends('layouts.main_layout')

@section('content')

        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card border-light mb-3">
                        <div class="card-header"><h2>{{ $post->title }}</h2></div>
                        <div class="card-body">
                            <p class="card-text">{!! $post->text !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
