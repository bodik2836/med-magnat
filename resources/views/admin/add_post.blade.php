@extends('layouts.admin_layout')

@section('content')

<div class="container mt-3">
    <h3>Додати новину</h3>
    <hr>
    <form action="" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="description">Опис</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="text">Стаття</label>
            <textarea class="form-control" name="text" id="text" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Додати статтю</button>
    </form>
</div>

@endsection
