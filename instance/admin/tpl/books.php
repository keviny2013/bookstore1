<style type="text/css">
    .form-select-solid {
        margin-left: 2rem;
    }
</style>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content" style="min-height: 670px;">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card mb-5 mb-xl-10">
                <div class="card-header cursor-pointer">
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">Books</h3>
                    </div>

                    <div class="d-flex align-items-center gap-2 gap-lg-3 float-end">
                        <button type="button" id="openBookModal" style="width:160px;margin: 10px;" class="btn btn-primary float-right" data-toggle="modal" data-target="#bookModal">Add Book</button>
                    </div>
                </div>
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="books_tbl">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th width="15%" style="padding-left: 20px;">Title</th>
                                    <th width="25%">Auther</th>
                                    <th width="20%">Description</th>
                                    <!-- <th width="15%">Cover</th>
                                    <th width="15%">Book</th> -->
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($result)) {
                                    foreach ($result as $arr_key => $value) { 
                                        ?>
                                        <tr id="id_<?= $value['id'] ?>">
                                            <td style="padding-left: 20px;"><?= $value['title'] ?></td>
                                            <td><?= $value['auther'] ?></td>
                                            <td><?= $value['description'] ?></td>
                                            <!-- <td><?= $value['cover_img_path'] ?></td>
                                            <td><?= $value['file_path'] ?></td> -->
                                            <td>
                                                <div class="btn-group btn-group-sm">
                                                    <!-- <a href="javascript:void(0)" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 editCompanyDetails" data-id="<?= $value['id'] ?>" data-name="<?= $value['name'] ?>" data-address="<?= $value['address'] ?>" data-city="<?= $value['city'] ?>" data-country="<?= $value['country'] ?>" data-ceo="<?= $value['ceo_id'] ?>"><i class="fas fa-edit text-primary"></i></a>
                                                    <a href="javascript:void(0)" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" onclick="deleteCompanyID('<?= $value['id'] ?>')"><i class="fas fa-trash text-danger"></i></a> -->

                                                    <a href="javascript:void(0)" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"><i class="fas fa-edit text-primary"></i></a>
                                                    <a href="javascript:void(0)" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" onclick=""><i class="fas fa-trash text-danger"></i></a>

                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else { ?>
                                    <tr><td colspan="6" style="color: red"><center>No Books Found!</center></td></tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="padding: 1rem !important;">
                    <h5 class="modal-title" id="modalTitle" style="font-size: 1.25rem;">Add Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background: none;border: none;">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 1rem!important;">
                    <form method="post" id="addBook">
                        <input type="hidden" name="addBookRecord" value="1">
                        <input type="hidden" name="book_id" id="book_id">
                        <div class="form-group" style="margin-bottom: 1rem!important;">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Book Title" required />
                            <span class="error text-danger" id="addBook_name"></span>
                        </div>
                        <div class="form-group" style="margin-bottom: 1rem!important;">
                            <label>Auther <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="auther" name="auther" placeholder="Enter Book Auther Name" required/>
                            <span class="error text-danger" id="addAuther_name"></span>
                        </div>
                        <div class="form-group" style="margin-bottom: 1rem!important;">
                            <label>Short Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="description" name="description" placeholder="Enter Short Description" required> </textarea>
                            <span class="error text-danger" id="description_name"></span>
                        </div>

                        <!-- <div class="form-group" style="margin-bottom: 1rem!important;">
                            <label>Cover Image</label>
                            <input type="file" class="form-control" id="cover_file" name="cover_file"/>
                            <span class="error text-danger" id="cover_file_name"></span>
                        </div>

                        <div class="form-group" style="margin-bottom: 1rem!important;">
                            <label>Book PDF File</label>
                            <input type="file" class="form-control" id="book_file" name="book_file"/>
                            <span class="error text-danger" id="book_file_name"></span>
                        </div> -->

                        <div class="modal-footer">
                            <!-- <button type="button" id="bookAdd" class="btn btn-primary">Save</button> -->
                            <button type="button" name="bookAdd" id="bookAdd" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>