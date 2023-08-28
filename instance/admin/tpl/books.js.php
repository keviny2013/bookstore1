<script type="text/javascript">
  
    $(document).ready(function () {
        $("#books_tbl").DataTable({
            "language": {
             "lengthMenu": "Show _MENU_",
            },
            "searching": false,
            "paging": false,
            "bInfo": false,
            "dom":
             "<'row'" +
             "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
             "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
             ">" +
             "<'table-responsive'tr>" +
             "<'row'" +
             "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
             "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
             ">"
        });
    });
    
    $('.close').click(function() {
        $("#bookModal").modal('hide');
    });


    $(document).on("click","#bookAdd",function() {
        var formData = new FormData($('#addBook')[0]);
        $.ajax({
            type: "POST",
            url: "<?php echo _U ?>books",
            data: formData,
            beforeSend: function() {
              $("#loading-image").show();
              $('#addBook')[0].reset();
            },
            dataType: "json",
            processData: false,
            contentType: false,
            success: function(data) {
                if(data.code == 200) {
                    location.reload();
                } else {
                    $('.error').text('');
                    $("#loading-image").hide();
                    $.each(data, function (key, val) {
                        $("#addBook_"+key).text(val);
                    });
                }
            }
        });
    });

    $('.editCompanyDetails').click(function() {
        $('.error').text('');
        $("#addCompany")[0].reset();
        $('#modalTitle').text('Edit Company');
        $('#companyModal').modal('show');
        $('#company_id').val($(this).data("id"));
        $('#name').val($(this).data("name"));
        $('#city').val($(this).data("city"));
        $('#country').val($(this).data("country"));
        $('#address').val($(this).data("address"));
        $('#ceo_id').val($(this).data("ceo"));
    });

    function deleteCompanyID(companyID) {
        event.preventDefault();
        var form = event.target.form;
        swal({
            title: "Are you sure?",
            text: "You will not be able to retrive data!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, Delete it!",
            cancelButtonText: "No, Cancel!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo _U ?>company",
                    data: {
                        companyID: companyID
                    },
                    dataType:'JSON',
                    success: function() {
                        location.reload();
                    }
                });
            } else if (result.isDenied) {
                swal("Cancelled", "Your imaginary record is safe.", "error");
            }
        });
    }

    $('#openBookModal').click(function() {
        $('.error').text('');
        $("#addBook")[0].reset();
        $('#modalTitle').text('Add Book');
        $('#bookModal').modal('show');
    });
</script>