<!doctype html>
<html lang="uk">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
    <title>ММ - {{ $title }}</title>
</head>
<body>



{{-- Content --}}
<div class="content">
    @yield('content')
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

{{--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="{{ asset('public/js/summernote-uk-UA.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#text').summernote({
            height: 300,
            lang: 'uk-UA',
            callbacks: {
                onImageUpload: function(files) {
                    var el = $(this);
                    sendFile(files[0],el);
                },

                onMediaDelete: function(target) {
                    // alert(target[0].src);
                    deleteFile(target[0].src);
                }
            }
        });
    });

    function sendFile(file, el) {
        var  data = new FormData();
        data.append("file", file);
        var url = '{{ route('upload') }}';

        $.ajax({
            data: data,
            type: "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: url,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                el.summernote('insertImage', response.imageUrl, function ($image) {
                    $image.css('max-width', '100%');
                });
            }
        });
    }

    function deleteFile(src) {

        $.ajax({
            data: {src : src},
            type: "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: '{{ route('delete') }}', // replace with your url
            cache: false,
            success: function(resp) {
                console.log(resp.status);
            }
        });
    }

</script>

</body>
</html>
