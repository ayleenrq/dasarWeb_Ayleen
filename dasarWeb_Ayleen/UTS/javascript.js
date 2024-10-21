// Fungsi untuk menampilkan pop-up
function showPopup() {
    document.getElementById("popup").style.display = "block";
    document.getElementById("popupOverlay").style.display = "block";
}

// Fungsi untuk menutup pop-up
function closePopup() {
    document.getElementById("popup").style.display = "none";
    document.getElementById("popupOverlay").style.display = "none";
}

// Ambil semua tombol "Add to Cart" dan tambahkan event listener
document.querySelectorAll('.btn-outline-primary').forEach(function(button) {
    button.addEventListener('click', showPopup);
});

$(document).ready(function() {
    $('#contact_form').on('submit', function(event) {
        event.preventDefault(); // Mencegah pengiriman form default

        // Ambil data dari form
        const formData = {
            fullName: $('#your_name').val(),
            email: $('#email').val(),
            subject: $('#subject').val(),
            message: $('#message').val()
        };

        // Kirim data menggunakan AJAX
        $.ajax({
            type: 'POST',
            url: 'YOUR_SERVER_ENDPOINT_HERE', // Ganti dengan URL endpoint server Anda
            data: formData,
            success: function(response) {
                // Tindakan setelah berhasil
                alert('Form submitted successfully!');
                $('#contact_form')[0].reset(); // Reset form setelah pengiriman
            },
            error: function(error) {
                // Tindakan jika terjadi kesalahan
                alert('Error submitting form: ' + error.responseText);
            }
        });
    });
});

