

// Load Data Table Start
load_data();
function load_data()
{
    $.ajax({

        url: base_url + "admin/bookdata/Ajax_View_Table",
        method: "POST",
        success: function (data)
        {
            $('#Response').html(data);
            $('.MyTable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
            });
        }
    });
}
