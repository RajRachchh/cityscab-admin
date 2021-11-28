$(document).ready(function ()
{
	
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
	
});

		function Status_Active(id)
		{
			
			Swal.fire({
			title: "Default Status",
			text: "Are you sure Do You Want To Chage Status ?",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#007bff",
			confirmButtonText: "Yes, Chage",
			reverseButtons: true
			}).then((result) => {
	
				if (result.value)  // Brfore  Chk Result 
				{
				
					$.ajax({
						url: base_url+"admin/category/Status_Active/"+id,	
						type : "POST",
						data: { id: id},
						success: function(data) 
						{
							//alert(data);
							
							// load_data();
							location.reload();
							// Swal.fire("Update!", "Your Status has been Update", "success");
							// toastr.success('Status Update Successfully.')	
						}
					});
				}
				else 
				{
					Swal.fire("Cancelled", "No Chages", "error");
				}
		
			})
		}
		
		
		
		function Status_Deactive(id)
		{
			
			Swal.fire({
			title: "Default Status",
			text: "Are you sure Do You Want To Chage Status ?",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#007bff",
			confirmButtonText: "Yes, Chage",
			reverseButtons: true
			}).then((result) => {
	
				if (result.value)  // Brfore Delete Chk Result 
				{
				
					$.ajax({
						url: base_url+"admin/category/Status_Deactive/"+id,	
						type : "POST",
						data: { id: id},
						success: function(data) 
						{
							//alert(data);
							
							// load_data();
							location.reload();
							// Swal.fire("Update!", "Your Status has been Update", "success");
							// toastr.success('Status Update Successfully.')	
						}
					});
				}
				else 
				{
					Swal.fire("Cancelled", "No Chages", "error");
				}
		
			})
		}
		

	function previewFile1(input)
		{
			var file = $("#image1").get(0).files[0];
			if(file)
			{
				var reader = new FileReader();
				reader.onload = function()
				{
					$("#previewImg1").attr("src", reader.result);
				}
				reader.readAsDataURL(file);
			}
		}
		
		
			
		function previewFile2(input)
		{
			var file = $("#image2").get(0).files[0];
			if(file)
			{
				var reader = new FileReader();
				reader.onload = function()
				{
					$("#previewImg2").attr("src", reader.result);
				}
				reader.readAsDataURL(file);
			}
		}


			
		function previewFile3(input)
		{
			var file = $("#image3").get(0).files[0];
			if(file)
			{
				var reader = new FileReader();
				reader.onload = function()
				{
					$("#previewImg3").attr("src", reader.result);
				}
				reader.readAsDataURL(file);
			}
		}
		
			
		function previewFile4(input)
		{
			var file = $("#image4").get(0).files[0];
			if(file)
			{
				var reader = new FileReader();
				reader.onload = function()
				{
					$("#previewImg4").attr("src", reader.result);
				}
				reader.readAsDataURL(file);
			}
		}


	
		function previewFile5(input)
		{
			var file = $("#image5").get(0).files[0];
			if(file)
			{
				var reader = new FileReader();
				reader.onload = function()
				{
					$("#previewImg5").attr("src", reader.result);
				}
				reader.readAsDataURL(file);
			}
		}


	
	$(document).on('click', '#fileSubmit', function() 
	{ 
		
		
		if($("#cname").val() === "")
		{
			$("#TitleErrorMsg").text("Enter Title").addClass("red");
			$(window).scrollTop(0);
			return false;
		}
		else if($("#price").val() === "")
		{
			$("#PriceErrorMsg").text("Enter Price").addClass("red");
			$(window).scrollTop(0);
			return false;
		}
		else if($("#from_place").val() === "")
		{
			$("#FromPlaceErrorMsg").text("Enter From Place").addClass("red");
			$(window).scrollTop(0);
			return false;
		}
		else if($("#to_place").val() === "")
		{
			$("#ToPlaceErrorMsg").text("Enter To Place").addClass("red");
			$(window).scrollTop(0);
			return false;
		}
		else if($("#from_day").val() === "")
		{
			$("#FromDayErrorMsg").text("Enter Day").addClass("red");
			$(window).scrollTop(0);
			return false;
		}
		else if($("#to_day").val() === "")
		{
			$("#ToDayErrorMsg").text("Enter Night").addClass("red");
			$(window).scrollTop(0);
			return false;
		}
		else if($("#places").val() === "")
		{
			$("#PlaceErrorMsg").text("Enter Place").addClass("red");
			$(window).scrollTop(0);
			return false;
		}
		
		else if($("#image1").val() === "" && ($("#hidden_img1").val() === "" || $("#hidden_img1").val()== undefined) )
		{
			$("#ImageErrorMsg1").text("Upload Image").addClass("red");
			$(window).scrollTop(0);
			return false;
		}
		
		else
		{
			//console.log($("#hidden_img1").val());
		//return false;
			 return true;
		}
	});

	$(function () {
		CKEDITOR.replace('ck_desc');
	});
	
	
	
	
	
	
	
	
	
	
	
	
	

/*
// Load Data Table Start
load_data();
function load_data()
{
    $.ajax({

        url: base_url + "admin/Category/Ajax_View_Table",
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
*/
// Load Data Table End



// Delete Record Start
function Delete(id)
{
    Swal.fire({
        title: "Are you sure to delete this Record ?",
        text: "You will not be able to recover this Data !!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it !!",
        reverseButtons: true
    }).then((result) => {

        if (result.value)  // Brfore Delete Chk Result 
        {

            $.ajax({
                url: base_url + "admin/category/delete/" + id,
                type: "POST",
                data: {id: id},
                success: function (data)
                {
                    //alert(data);
                 //   Swal.fire("Deleted!", "Your Record has been deleted.", "success");
                    // load_data();
                    toastr.error('Record Delete Successfully.')
							setTimeout(function () {
								window.location.reload(1);
							}, 2000);
					
                }
            });
        } else
        {
            Swal.fire("Cancelled", "Your record is safe :)", "error");
        }

    })
}
// Delete Record End






// Bulk Delete Start	
$(document).ready(function ()
{
    $('#bulk_delete_submit').on('click', function ()
    {
        if ($('.checkbox:checked').length > 0)
        {
            Swal.fire({
                title: 'Are you sure?',
                text: "Delete Selected Record",
                type: "warning",
                // icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) =>
            {

                if (result.value)  // Brfore Delete Chk Result 
                {
                    var users_arr = [];
                    $(".checkbox:checked").each(function ()
                    {
                        var id = $(this).val();
                        users_arr.push(id);
                        //alert(id);
                    });
                    var length = users_arr.length;

                    $.ajax({
                        url: base_url + "admin/category/Delete_Bulk/",
                        type: "POST",
                        //data : { id: id },
                        data: {id: users_arr},
                        success: function (data)
                        {
						/*
                            Swal.fire
                                    (
                                            'Deleted!',
                                            'Record has been deleted.',
                                            'success'
                                            )
						*/
                            $(function () {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000
                                });
                                toastr.error('Record Delete Successfully.')
                            });
                            //load_data(); // Load AJAX
							setTimeout(function () {
								window.location.reload(1);
							}, 2000);
                        }
                    });

                } else
                {
                    Swal.fire("Cancelled", "Your record is safe :)", "error");
                }
                //return false;
            })
        } else
        {
            Swal.fire("Info", "Select at least 1 record to delete", "info");
        }
    });
});
// Bulk Delete End	









