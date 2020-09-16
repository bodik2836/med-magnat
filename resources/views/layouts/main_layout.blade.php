<!doctype html>
<html lang="uk">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
    <title>ММ - {{ $title }}</title>
</head>
<body>
{{-- Particles --}}
<div id="particles-js"></div>

<!-- Top menu -->
<section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Медовий Магнат</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link disabled" href="#">Новини</a>
                <a class="nav-link disabled" href="#">Магазин</a>
                <a class="nav-link disabled" href="#">Зв'язок</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a class="nav-link disabled" href="#">Sign Up</a>
                <a class="nav-link disabled" href="#">Login</a>
            </div>
        </div>
    </nav>
</section>

{{-- Content --}}
@yield('content')

{{-- Footer --}}
<footer class="footer mt-3">
    <div class="navbar-fixed-bottom row-fluid navbar-dark bg-dark">
        <div class="navbar-inner text-center p-3">
            <div class="container">
                &copy; Медовий Магнат {{ date('Y') }}
            </div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="{{ asset('public/js/app.js') }}"></script>
</body>
</html>
