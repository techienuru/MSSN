<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MSSN NSUK Chapter - Admin Dashboard</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="../../../images/logo.png">

    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <!-- Icon Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">

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

</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="./dashboard.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Navigations</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus"></i>Make Addition</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-clock-o"></i><a href="add-session.php">Session</a></li>
                            <li><i class="fa fa-university"></i><a href="add-faculty.php">Faculty</a></li>
                            <li><i class="fa fa-building"></i><a href="add-department.php">Department</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i>Blog & Event</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-edit"></i><a href="blog.php">Blog</a></li>
                            <li><i class="fa fa-calendar"></i><a href="events.php">Events</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Library & Resources</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file"></i><a href="past-q&a.php">Past Q & A</a></li>
                            <li><i class="menu-icon fa fa-book"></i><a href="islamic-ebook.php">Islamic E-Books</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="excos.php"> <i class="menu-icon fa fa-users"></i>Excos</a>
                    </li>
                    <li>
                        <a href="ask-and-learn.php"> <i class="menu-icon fa fa-question-circle"></i>Ask & learn </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./dashboard.php">
                        MSSN NSUK CHAPTER
                    </a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo">
                    </a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </header>
        <!-- /#header -->
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
                                <h4 class="box-title">Events</h4>
                                <small>Add and manage upcoming events</small>
                            </div>

                            <div class="card-body">
                                <!-- Content fall here -->
                                <div class="text-center mb-4">
                                    <button class="btn btn-add-event" data-toggle="modal" data-target="#addPqModal">
                                        Add New Event
                                    </button>
                                </div>

                                <div class="row my-5">
                                    <div class="col-sm-4">
                                        <div class="page-header float-left">
                                            <div class="page-title">
                                                <h1>Manage Events</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Title</th>
                                                            <th>Location</th>
                                                            <th>Date</th>
                                                            <th>Time</th>
                                                            <th>Image</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                SendForth Walimah/Inuagration day
                                                            </td>
                                                            <td>
                                                                1,000 seater auditorium
                                                            </td>
                                                            <td>
                                                                Sun, Sep 8 2024
                                                            </td>
                                                            <td>
                                                                9:00 am
                                                            </td>
                                                            <td>
                                                                <a href="../../images/logo.png" target="_blank" rel="noopener noreferrer">MTH112 - 21/22</a>
                                                            </td>
                                                            <td class="d-flex">
                                                                <button class="btn btn-sm btn-warning mr-2" title="edit" data-toggle="modal" data-target="#editPq">
                                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-danger" title="delete">
                                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>


                                </div>


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

        <!-- Footer -->
        <?php include_once "../includes/footer.php"; ?>
    </div>
    <!-- /#right-panel -->

    <!-- Modal for Adding PQ -->
    <div class="modal fade" id="addPqModal" tabindex="-1" aria-labelledby="addPqModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="modal-title" id="addPqModalLabel">Add New Event</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Event Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label for="teaser" class="form-label">Event Teaser</label>
                            <textarea class="form-control" id="teaser" name="teaser" rows="3" name="content" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Event Content/Details</label>
                            <textarea class="form-control" id="content" rows="5" name="content" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">Event Location</label>
                            <input type="text" class="form-control" id="location" name="location" required>
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label">Event Date</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>

                        <div class="mb-3">
                            <label for="time" class="form-label">Event Time</label>
                            <input type="time" class="form-control" id="time" name="time" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-add-event">Add Event</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for Editing PQ -->
    <div class="modal fade" id="editPq" tabindex="-1" aria-labelledby="editPqModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="modal-title" id="editPqModalLabel">Edit Event</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
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
                            <textarea class="form-control" id="content" rows="5" name="content" required></textarea>
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
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-add-event">Update Event</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

</body>

</html>