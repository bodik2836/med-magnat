const UPLOAD_URL = "http://" + document.location.host + "/upload";
const DELETE_URL = "http://" + document.location.host + "/delete";
const GET_POST_MAX_ID_URL = "http://" + document.location.host + "/getPostMaxId";

function uploadImage() {
    $.ajax({
        type: "POST",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: GET_POST_MAX_ID_URL,
        cache: false,
        contentType: false,
        processData: false,
        success: function(response) {
            uploadNewImage(response)
        }
    });
}

// ---------------------- Add Post ----------------------- //

function uploadNewImage(postId) {

    let path = '/uploads/posts/images/' + (parseInt(postId)+1) + "/";
    let main_photo_label = document.getElementById('main_photo_label');
    let input = document.getElementById('main_photo');
    main_photo_label.innerText = input.files[0].name;

    let data = new FormData();
    data.append("file", input.files[0]);
    data.append("path", path);

    $.ajax({
        data: data,
        type: "POST",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: UPLOAD_URL,
        cache: false,
        contentType: false,
        processData: false,
        success: function(response) {
            $('#main_photo').attr("disabled", true);
            $('#photo').removeClass('d-none');
            $('#photo_img').attr("src", response.imageUrl);
            $('#main_image_url').attr("value", response.serverImageUrl);
        }
    });
}

function deleteImage() {
    let src = $('#main_image_url').attr('value');
    console.log(src);
    $.ajax({
        data: {'src': src},
        type: "POST",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: DELETE_URL,
        cache: false,
        contentType: false,
        processData: false,
        success: function(resp) {
            $('#main_photo').attr("disabled", false);
            $('#photo').addClass('d-none');
            $('#main_photo_label').text('Фото статті');
            console.log(resp.a);
        },
        error: function (resp) {
            console.log(resp.a);
        }
    });
}

// ------------------------------------------------------- //
function sendNewFile(file, el) {
    let data = new FormData();
    // let path = '/uploads/posts/images/';
    data.append('file', file);

    $.ajax({
        data: data,
        type: "POST",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: UPLOAD_URL,
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
        data: {src: src},
        type: "POST",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: DELETE_URL,
        cache: false,
        success: function(resp) {
            console.log(resp.status);
        }
    });
}
