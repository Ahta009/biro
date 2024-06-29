// public/js/dashboard.js

$(document).ready(function() {
    // Handle the search functionality
    $('#agendasearch').on('keyup', function() {
        let query = $(this).val();
        $.ajax({
            url: "/admin/agenda/search",
            type: "GET",
            data: {'query': query},
            success: function(data) {
                $('#agenda-table tbody').empty();
                data.forEach(function(agenda) {
                    let row = `<tr>
                        <td>
                            <div class="notice-title">${agenda.agenda_title}</div>
                            <div class="action-container">
                                <div>
                                    <a href="/admin/agenda/${agenda.id}/edit" class="action-edit">Edit</a>
                                </div>
                                <div class="action-delete" data-toggle="modal" data-target="#modal-danger" data-id="${agenda.id}">
                                    <a href="#">Hapus</a>
                                </div>
                                <a href="#" class="action-show">Lihat</a>
                            </div>
                        </td>
                        <td>taufik</td>
                        <td>Telah Terbit<br>${agenda.created_at}</td>
                    </tr>`;
                    $('#agenda-table tbody').append(row);
                });
            }
        });
    });

    // Set up the delete modal
    $('#modal-danger').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget); // Button that triggered the modal
        let id = button.data('id'); // Extract info from data-* attributes
        let action = `/agendas/${id}`;
        let modal = $(this);
        modal.find('#deleteAgenda').attr('action', action);
    });
});
