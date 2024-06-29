// public/js/dashboard.js

$(document).ready(function() {
    // Handle the search functionality
    $('#newssearch').on('keyup', function() {
        let query = $(this).val();
        $.ajax({
            url: "/admin/news/search",
            type: "GET",
            data: {'query': query},
            success: function(data) {
                $('#news-table tbody').empty();
                data.forEach(function(news) {
                    let row = `<tr>
                        <td>
                            <div class="notice-title">${news.news_title}</div>
                            <div class="action-container">
                                <div>
                                    <a href="/admin/news/${news.id}/edit" class="action-edit">Edit</a>
                                </div>
                                <div class="action-delete" data-toggle="modal" data-target="#modal-danger" data-id="${news.id}">
                                    <a href="#">Hapus</a>
                                </div>
                                <a href="#" class="action-show">Lihat</a>
                            </div>
                        </td>
                        <td>taufik</td>
                        <td>Telah Terbit<br>${news.created_at}</td>
                    </tr>`;
                    $('#news-table tbody').append(row);
                });
            }
        });
    });

    // Set up the delete modal
    $('#modal-danger').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget); // Button that triggered the modal
        let id = button.data('id'); // Extract info from data-* attributes
        let action = `/newss/${id}`;
        let modal = $(this);
        modal.find('#deleteNews').attr('action', action);
    });
});
