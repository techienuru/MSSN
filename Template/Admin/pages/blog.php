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

        
    </style>
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
                                <h4 class="box-title">Blog</h4>
                                <small>Add and manage projects & past events</small>
                                </div>
                                <button class="btn btn-add-event" data-toggle="modal" data-target="#addPqModal">
                                        Add New Blog
                                </button>
                            </div>
                            <div id="process" data-name="blog"></div>
                            <section class="section mt-2">
                    <div class="card">
                      
                        <div class="card-body">
                            <table class="table table-striped" id="dataTable" data-filter="All">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Action</th>
                                        
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
        <!-- Modal for Adding PQ -->
        <div class="modal fade" id="addPqModal" tabindex="-1" aria-labelledby="addPqModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="modal-title" id="addPqModalLabel">Add New Blog</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="modalform" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Blog Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label for="teaser" class="form-label">Blog Teaser</label>
                            <textarea class="form-control" name="teaser" rows="3" name="content" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Blog Content/Details</label>
                            <textarea class="form-control" rows="5" id="full" name="content">
                                
                            </textarea>
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label">Blog Date</label>
                            <input type="date" class="form-control"  name="date" required>
                        </div>

                        <div class="mb-3">
                            <label for="time" class="form-label">Blog Time</label>
                            <input type="time" class="form-control"  name="time" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image</label>
                            <input type="file" class="form-control"  name="image" required>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-add-event">Add Blog</button>
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
                    <h5 class="modal-title" id="editPqModalLabel">Edit Blog</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="modalform" action="" method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">Blog Title</label>
                            <input type="text" class="form-control" id="blog_title" name="blog_title" required>
                        </div>

                        <div class="mb-3">
                            <label for="teaser" class="form-label">Blog Teaser</label>
                            <textarea class="form-control" id="blog_teaser" name="blog_teaser" rows="3" name="content" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Blog Content/Details</label>
                            <textarea class="form-control" id="blog_content" rows="5" name="blog_content"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label">Blog Date</label>
                            <input type="date" class="form-control" id="blog_date" name="blog_date" required>
                        </div>

                        <div class="mb-3">
                            <label for="time" class="form-label">Blog Time</label>
                            <input type="time" class="form-control" id="blog_time" name="blog_time" required>
                        </div>
                        <input type="hidden" id="blog_id" name="blog_id">
                        <input type="hidden" name="action" value="edit">

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-add-event">Update Blog</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Adding Blog Media -->
    <div class="modal fade" id="addEventFiles" tabindex="-1" aria-labelledby="addEventFilesLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEventFilesLabel">Add Media Files for Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="mediaType" class="form-label">Select Media Type</label>
                            <select id="mediaType" class="form-control" name="media_type" required>
                                <option value="image">Images</option>
                                <option value="video">Videos</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="mediaFiles" class="form-label">Upload Files</label>
                            <input type="file" class="form-control" id="mediaFiles" name="file" accept="image/*, video/*" multiple required>
                            <small class="text-muted">Use control(ctrl) select multiple images or videos</small>
                        </div>
                        <div id="previewSection" class="mt-3"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="saveMediaBtn">Save Media</button>
                    </form>
                </div>
            </div>
        </div>
    </div>