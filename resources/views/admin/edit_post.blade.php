@extends('layouts.admin_layout')

@section('content')

    <div class="container mt-3 mb-3">
        <h3>Редагувати новину</h3>
        <hr>
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Заголовок</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="description">Опис</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $post->description }}</textarea>
            </div>
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="main_photo" oninput="input_filename();" required disabled>
                <input type="text" value="{{ $post->image }}" id="main_image_url" name="main_image_url" hidden>
                <label class="custom-file-label" id="main_photo_label" for="main_photo">Фото статті</label>
            </div>
            <div class="card mb-3" id="photo">
                <img src="{{ asset($post->image) }}" id="photo_img" class="card-img-top" alt="...">
                <div class="card-body">
                    <button type="button" class="btn btn-danger" onclick="deleteImage();">Видалити</button>
                </div>
            </div>
            <div class="form-group">
                <label for="text">Стаття</label>
                <textarea class="form-control" name="text" id="text" rows="3">{{ $post->text }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Додати статтю</button>
        </form>
    </div>

@endsection
