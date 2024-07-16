// skpu_programs.js

$(document).ready(function () {
    $('#program_id_1').on('change', function () {
        var parentID = $(this).val();
        if (parentID) {
            $.ajax({
                url: '/get-child-programs/' + parentID,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $('#program_id_2').empty().append('<option value="">Select Program</option>');
                    $.each(data, function (key, value) {
                        $('#program_id_2').append('<option value="' + value.id + '">' + value.program_nama + '</option>');
                    });
                },
                error: function (xhr, status, error) {
                    console.error('Error fetching child programs:', error);
                    // Optionally handle errors here
                }
            });
        } else {
            $('#program_id_2').empty().append('<option value="">Select Program</option>');
            $('#program_id_3').empty().append('<option value="">Select Program</option>');
        }
    });

    $('#program_id_2').on('change', function () {
        var parentID = $(this).val();
        if (parentID) {
            $.ajax({
                url: '/get-child-programs/' + parentID,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $('#program_id_3').empty().append('<option value="">Select Program</option>');
                    $.each(data, function (key, value) {
                        $('#program_id_3').append('<option value="' + value.id + '">' + value.program_nama + '</option>');
                    });
                },
                error: function (xhr, status, error) {
                    console.error('Error fetching child programs:', error);
                    // Optionally handle errors here
                }
            });
        } else {
            $('#program_id_3').empty().append('<option value="">Select Program</option>');
        }
    });
});
