<style>
        .btn-add-event {
            background-color: #03a9f3;
            border: none;
            color: white;
            font-size: 18px;
            padding: 10px 30px;
            border-radius: 30px;
            transition: background-color 0.3s ease;
        }

        .btn-add-event:hover {
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
                            <div class="card-body d-flex justify-content-between">
                                <div>
                                <h4 class="box-title">Events</h4>
                                <small>Add and manage projects & past events</small>
                                </div>
                                <button class="btn btn-add-event" data-toggle="modal" data-target="#addPqModal">
                                        Add New Event
                                </button>
                            </div>
                            <div id="process" data-name="event"></div>
                            <section class="section mt-2">
                    <div class="card">
                      
                        <div class="card-body">
                            <table class="table table-striped" id="dataTable" data-filter="All">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Location</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Action</th>
                                        <th>Created_at</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
                        </div>
                    </div><!-- /# column -->
                </div>
                <!--  /Traffic -->

            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>

    <div class="modal fade" id="addPqModal" tabindex="-1" aria-labelledby="addPqModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="modal-title" id="addPqModalLabel">Add New Event</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="modalform" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Event Title</label>
                            <input type="text" class="form-control" id="" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label for="teaser" class="form-label">Event Teaser</label>
                            <textarea class="form-control" id="" name="teaser" rows="3" name="content" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Event Content/Details</label>
                            <textarea class="form-control" id="full" rows="5" name="content">

                            </textarea>
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">Event Location</label>
                            <input type="text" class="form-control" id="" name="location" required>
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label">Event Date</label>
                            <input type="date" class="form-control" id="" name="date" required>
                        </div>

                        <div class="mb-3">
                            <label for="time" class="form-label">Event Time</label>
                            <input type="time" class="form-control" id="" name="time" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="" name="image" required>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-add-event">Add Event</button>
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
                    <h5 class="modal-title" id="editPqModalLabel">Edit Event</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="modalform" method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">Event Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label for="teaser" class="form-label">Event Teaser</label>
                            <input type="text" class="form-control" id="teaser" name="teaser" required>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Event Content/Details</label>
                            <textarea class="form-control" id="content" rows="5" name="content"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">Event Location</label>
                            <input type="text" class="form-control" id="location" name="location" required>
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label">Event Date</label>
                            <input type="date" class="form-control" min="2024-09-10" id="date" name="date" required>
                        </div>

                        <div class="mb-3">
                            <label for="time" class="form-label">Event Time</label>
                            <input type="time" class="form-control" id="time" name="time" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="" name="image">
                        </div>
                        <input type="hidden" id="event_id" name="event_id">
                        <input type="hidden" id="image" name="old_image">
                        <input type="hidden" name="action" value="edit">

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-add-event">Update Event</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
