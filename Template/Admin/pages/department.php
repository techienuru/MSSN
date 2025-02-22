
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
                                <h4 class="box-title">Department</h4>
                                <small>Add and manage all Departments</small>
                            </div>

                            <div class="card-body">
                                <!-- Content fall here -->
                                <form class="modalform row" method="POST">
                                    <div class="col-md-6 mb-3">
                                        <label for="faculty" class="form-label">Faculty</label>
                                        <select name="faculty" class="form-control" required>
                                            <option value="">Select Faculty</option>
                                            <?php foreach($faculty as $row): ?>
                                            <option value="<?php echo $row['faculty_id'];?>"><?php echo $row['faculty_name'];?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="department" class="form-label">Department Name</label>
                                        <input type="text" class="form-control" id="" placeholder="Eg: Computer Science" name="name" required>
                                    </div>
                                    <div class="col-12"><button type="submit" class="btn btn-info">Add Department</button></div>
                                    <input type="hidden" name="action" value="add">
                                </form>
                                <div id="process" data-name="department"></div>

                <section class="section mt-5">
                    <div class="card">
                      
                        <div class="card-body">
                            <table class="table table-striped" id="dataTable" data-filter="All">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Faculty</th>
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
                    <h5 class="modal-title" id="editSessionModalLabel">Edit Department</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="modalform row" method="POST">
                    <div class="col-md-6 mb-3">
                                        <label for="faculty" class="form-label">Faculty</label>
                                        <select name="faculty" class="form-control" id="fac" required>
                                            <div id="fcc"></div>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="department" class="form-label" >Department Name</label>
                                        <input type="text" class="form-control" id="department" placeholder="Eg: Computer Science" name="name" required>
                                        <input type="hidden" name="action" value="edit">
                                        <input type="hidden" name="id" id="ids">

                                    </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Update Department</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <!-- /.content -->
        <div class="clearfix"></div>