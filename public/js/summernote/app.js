const URL_LANG_UA = 'http://' + document.location.host + '/public/js/summernote/langs/summernote-uk-UA.min.js';

$.getScript(URL_LANG_UA, function () {});

$(document).ready(function() {
    $('#text').summernote({
        height: 300,
        lang: 'uk-UA',
        callbacks: {
            onImageUpload: function(files) {
                let el = $(this);
                sendFile(files[0],el);
            },

            onMediaDelete: function(target) {
                deleteFile(target[0].src);
            }
        }
    });
});
