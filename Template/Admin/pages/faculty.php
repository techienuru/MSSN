
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">

                <!-- /Widgets -->
                <!--  Traffic  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Faculty</h4>
                                <small>Add and manage all Facultys</small>
                            </div>

                            <div class="card-body">
                                <!-- Content fall here -->
                                <form class="modalform" method="POST">
                                    <div class="mb-3">
                                        <label for="Faculty" class="form-label">Faculty</label>
                                        <input type="text" class="form-control" name="name" id="" placeholder="Eg: Natural and Applied Sciences" required>
                                    </div>
                                    <input type="hidden" name="action" value="add">
                                    <button type="submit" class="btn btn-info">Add Faculty</button>
                                </form>
                                <div id="process" data-name="faculty"></div>
                <section class="section mt-5">
                    <div class="card">
                      
                        <div class="card-body">
                            <table class="table table-striped" id="dataTable" data-filter="All">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
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

        <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editSessionModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="modal-title" id="editSessionModalLabel">Edit Faculty</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="modalform" method="POST">
                        <div class="mb-3">
                            <label for="Faculty" class="form-label">Faculty</label>
                            <input type="text" class="form-control" id="edit_faculty" required="" name="name">
                            <input type="hidden" id="ids" name="id" value="">
                            <input type="hidden" name="action" value="edit">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Update Faculty</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <!-- /.content -->
        <div class="clearfix"></div>