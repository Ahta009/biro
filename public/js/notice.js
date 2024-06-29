// public/js/dashboard.js

$(document).ready(function() {
    // Handle the search functionality
    $('#search').on('keyup', function() {
        let query = $(this).val();
        $.ajax({
            url: "/admin/notice/search",
            type: "GET",
            data: {'query': query},
            success: function(data) {
                $('#notice-table tbody').empty();
                data.forEach(function(notice) {
                    let row = `<tr>
                        <td>
                            <div class="notice-title">${notice.title}</div>
                            <div class="action-container">
                                <div>
                                    <a href="/admin/notice/${notice.id}/edit" class="action-edit">Edit</a>
                                </div>
                                <div class="action-delete" data-toggle="modal" data-target="#modal-danger" data-id="${notice.id}">
                                    <a href="#">Hapus</a>
                                </div>
                                <a href="#" class="action-show">Lihat</a>
                            </div>
                        </td>
                        <td>taufik</td>
                        <td>Telah Terbit<br>${notice.created_at}</td>
                    </tr>`;
                    $('#notice-table tbody').append(row);
                });
            }
        });
    });

    // Set up the delete modal
    $('#modal-danger').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget); // Button that triggered the modal
        let id = button.data('id'); // Extract info from data-* attributes
        let action = `/notices/${id}`;
        let modal = $(this);
        modal.find('#deleteForm').attr('action', action);
    });
});
