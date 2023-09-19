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

    $('.close').click(function () {
        $("#bookModal").modal('hide');
    });


    $(document).on("click", "#bookAdd", function () {
        if ($("#addBook")[0].checkValidity()) {
            var formData = $("#addBook").serialize();
            var formData = new FormData($('#addBook')[0]);
            $.ajax({
                type: "POST",
                url: "<?php echo _U ?>books",
                data: formData,
                beforeSend: function () {
                    $("#loading-image").show();
                    $('#addBook')[0].reset();
                },
                dataType: "json",
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.code == 200) {
                        location.reload();
                    } else {
                        $('.error').text('');
                        $("#loading-image").hide();
                        $.each(data, function (key, val) {
                            $("#addBook_" + key).text(val);
                        });
                    }
                }
            });
        } else {
            // Form is invalid, show error messages or take appropriate action
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please fill out all required fields.',
        });
            
        }
    });

    // update book process
    $(document).on("click", "#bookEdit", function () {
        if ($("#editBook")[0].checkValidity()) {
            var formData = $("#editBook").serialize();
            var formData = new FormData($('#editBook')[0]);
            $.ajax({
                type: "POST",
                url: "<?php echo _U ?>books",
                data: formData,
                beforeSend: function () {
                    $("#loading-image").show();
                    $('#editBook')[0].reset();
                },
                dataType: "json",
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.code == 200) {
                        location.reload();
                    } else {
                        $('.error').text('');
                        $("#loading-image").hide();
                        $.each(data, function (key, val) {
                            $("#editBook_" + key).text(val);
                        });
                    }
                }
            });
        } else {
            // Form is invalid, show error messages or take appropriate action
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please fill out all required fields.',
        });
            
        }
    });


    function editBook(book_id = '', title = '', author = '', description = '') {
        $('.error').text('');
        
        $('#eidt_book_id').val(book_id);
        $('#eidt_title').val(title);
        $('#eidt_author').val(author);
        $('#eidt_description').val(description);

        $('#editbookModal').modal('show');
    }

    function viewBook(cover_image = '') {
        $('.error').text('');
        
        var image_url = "<?php echo _MEDIA_URL ?>cover_img/"+cover_image
        $('#view_image_modal').attr("src",image_url);

        $('#viewBookModal').modal('show');

    }

    function deleteBookID(bookID) {
        event.preventDefault();
        var form = event.target.form;
        swal({
            title: "Are you sure?",
            text: "But you will still be able to retrieve this file.",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, archive it!",
            cancelButtonText: "Cancel",
            closeOnConfirm: false,
            closeOnCancel: false

        }).then((isConfirm) => {
            console.log(isConfirm);
            if (isConfirm.value) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo _U ?>books",
                    data: {
                        bookID: bookID,
                        deleteBookID: '1'
                    },
                    dataType: 'JSON',
                    success: function () {
                        location.reload();
                    }
                });
            } else {
                swal("Cancelled", "Your imaginary file is safe.", "error");
            }
        });
    }

    
    function convertTextBook(bookID) {
        event.preventDefault();
        var form = event.target.form;
        $.ajax({
                    type: "POST",
                    url: "<?php echo _U ?>books",
                    data: {
                        bookID: bookID,
                        convertTextBookID: '1'
                    },
                    dataType: 'JSON',
                    success: function () {
                        location.reload();
                    }
                });
    }

    
    function summarizeTextBook(bookID) {
        event.preventDefault();
        var form = event.target.form;
        $.ajax({
                    type: "POST",
                    url: "<?php echo _U ?>abe_openai",
                    data: {
                        bookID: bookID,
                        summarizeTextBook: '1'
                    },
                    dataType: 'JSON',
                    success: function () {
                        location.reload();
                    }
                });
    }

    $('#openBookModal').click(function () {
        $('.error').text('');
        $("#addBook")[0].reset();
        $('#modalTitle').text('Add Book');
        $('#bookModal').modal('show');
    });
</script>