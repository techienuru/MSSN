<style>
    .btn-add-pq {
        background-color: #03a9f3;
        border: none;
        color: white;
        font-size: 18px;
        padding: 10px 30px;
        border-radius: 30px;
        transition: background-color 0.3s ease;
    }

    .btn-add-pq:hover {
        background-color: #0288d1;
    }

    .exco-card {
        border: none;
        border-radius: 15px;
        background-color: #e8e9ef;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .exco-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .exco-image {
        border-radius: 15px 15px 0 0;
        object-fit: cover;
    }

    .card-body {
        padding: 20px;
    }

    .modal-header {
        background-color: #03a9f3;
        color: white;
        border-bottom: none;
    }

    .modal-body {
        background-color: #f5f5f5;
    }

    .modal-footer {
        border-top: none;
    }

    .btn-secondary {
        background-color: rgba(153, 171, 180, 0.8);
        color: #333;
    }
</style>
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">

                <!-- /Widgets -->
                <!--  Traffic  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Islamic E-books</h4>
                                <small>Add and manage all Islamic E-books</small>
                            </div>

                            <div class="card-body">
                        <!-- Content fall here -->
                        <div class="text-center mb-4">
                            <button class="btn btn-add-pq" data-toggle="modal" data-target="#addEbookModal">
                                Add New Ebook
                            </button>
                        </div>

                    

                        <div id="process" data-name="ebook"></div>
                        <section class="section mt-2">
                            <div class="card">

                                <div class="card-body">
                                    <table class="table table-striped" id="dataTable" data-filter="All">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                                <th>Date</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </section>


                    </div>
                        </div>
                    </div><!-- /# column -->
                </div>
                <!--  /Traffic -->

            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>

    
    <!-- Modal for Adding PQ -->
    <div class="modal fade" id="addEbookModal" tabindex="-1" aria-labelledby="addEbookModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="modal-title" id="addEbookModalLabel">Add E-book</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="modalform" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="ebookLabel" class="form-label">E-book Name</label>
                            <input type="text" class="form-control" name="title" id="ebookLabel" placeholder="Ex: Jurisprudence of Islamic Nations" required>
                        </div>
                        <div class="mb-3">
                            <label for="pqPreview" class="form-label">Image Preview</label>
                            <input type="file" name="image" class="form-control" id="pqPreview" accept=".jpg, .png" required>
                        </div>
                        <div class="mb-3">
                            <label for="pqFile" class="form-label">File</label>
                            <input type="file" name="file" class="form-control" id="pqFile" accept=".jpg, .pdf, .png, .doc" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-add-pq">Add E-book</button>
                            <input type="hidden" name="action" value="add">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for Editing PQ -->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editPqModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="modal-title" id="editPqModalLabel">Edit Ebook</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="modalform">
                      
                        <div class="mb-3">
                            <label for="pqLabel" class="form-label">Ebook title</label>
                            <input type="text" name="title" class="form-control" id="title" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-add-pq">Update</button>
                            <input type="hidden" name="ebook_id" id="ebook_id" />
                            <input type="hidden" name="action" value="edit" />
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
