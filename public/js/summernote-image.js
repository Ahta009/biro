$(document).ready(function() {
    $('.summernote').summernote({
        callbacks: {
            onImageUpload: function(images) {
                for (let i = 0; i < images.length; i++) {
                    uploadImage(images[i]);
                }
            }
        }
    });

    function uploadImage(image) {
        console.log(image);
        let data = new FormData();
        data.append('file', image);

        $.ajax({
            url: '/notice/store', // Your Laravel route for storing content and uploading images
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
            },
            success: function(url) {
                console.log('Uploaded image URL:', url);
                $('.summernote').summernote('insertImage', url);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error uploading image:', textStatus, errorThrown);
            }
        });
    }
});
