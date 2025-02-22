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
                        <h4 class="box-title">Past Questions</h4>
                        <small>Add and manage all past questions</small>
                    </div>

                    <div class="card-body">
                        <!-- Content fall here -->
                        <div class="text-center mb-4">
                            <button class="btn btn-add-pq" data-toggle="modal" data-target="#addPqModal">
                                Add New PQ
                            </button>
                        </div>

                        <div class="row my-5">
                            <div class="col-sm-4">
                                <div class="page-header float-left">
                                    <div class="page-title">
                                        <h1>All Past Questions</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <form action="" class="row" method="POST" autocomplete="off">
                                    <div class="col-sm-4">
                                        <select name="faculty" id="get_faculty" class="form-control" required>
                                            <option value="">Select Faculty</option>
                                            <?php foreach ($faculties as $row) : ?>
                                                <option value="<?= $row['faculty_id'] ?>"><?= $row['faculty_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="col-sm-4">
                                        <select name="department" id="get_department" class="form-control" required>
                                            <option value="">Select Faculty first</option>
                                        </select>

                                    </div>

                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-success">Filter</button>
                                    </div>
                                </form>
                            </div>




                        </div>

                        <div id="process" data-name="past"></div>
                        <section class="section mt-2">
                            <div class="card">

                                <div class="card-body">
                                    <table class="table table-striped" id="dataTable" data-filter="All">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Faculty</th>
                                                <th>Department</th>
                                                <th>Level</th>
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


<!-- Modal for Adding PQ -->
<div class="modal fade" id="addPqModal" tabindex="-1" aria-labelledby="addPqModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex">
                <h5 class="modal-title" id="addPqModalLabel">Add New PQ</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="modalform" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="faculty" class="form-label">Faculty</label>
                        <select name="faculty" id="get_faculty2" class="form-control" required>
                            <option value="">Select Faculty</option>
                            <?php foreach ($faculties as $row) : ?>
                                <option value="<?= $row['faculty_id'] ?>"><?= $row['faculty_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="department" class="form-label">Department</label>
                        <select name="department" id="get_department2" class="form-control" required>
                            <option value="">Select Faculty First</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pqLabel" class="form-label">PQ Title</label>
                        <input type="text" name="title" class="form-control" id="" placeholder="Ex: MTH112 - 2020/2021" required>
                    </div>
                    <div class="mb-3">
                        <label for="pqLabel" class="form-label">Level</label>
                        <input type="text" name="level" class="form-control" id="" placeholder="100 / 200" required>
                    </div>

                    <div class="mb-3">
                        <label for="pqFile" class="form-label">File</label>
                        <input type="file" name="file" class="form-control" id="" required>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-add-pq">Add PQ</button>
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
                <h5 class="modal-title" id="editPqModalLabel">Edit PQ</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="modalform">
                    <div class="mb-3">
                        <label for="faculty" class="form-label">Faculty</label>
                        <select name="faculty_id" id="edit_faculties" class="form-control" required>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="department" class="form-label">Department</label>
                        <select name="department_id" id="edit_departments" class="form-control" required>
                            <option value="">Select Department</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pqLabel" class="form-label">PQ Label</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                        <input type="hidden" id="pq_id" name="pq_id">
                        <input type="hidden" name="action" value="edit">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-add-pq">Update PQ</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>