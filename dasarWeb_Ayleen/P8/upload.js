$(document).ready(function() {
    $("#upload-form").submit(function(e) {
        e.preventDefault();

        let data = document.getElementById("file").files

        var formData = new FormData();
        for (var i = 0; i < data.length; i++) {
            formData.append('files[]', data[i]);
        }

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                $("#status").html(response);
            },
            error: function() {
                $("#status").html("Terjadi kesalahan saat mengunggah file.");
            }
        });
    });
});