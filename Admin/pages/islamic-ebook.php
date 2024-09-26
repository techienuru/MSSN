<!doctype html>

<head>
    <!-- Including links -->
    <?php include_once "../includes/head-link.php" ?>

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        .btn-add-ebook {
            background-color: #03a9f3;
            border: none;
            color: white;
            font-size: 18px;
            padding: 10px 30px;
            border-radius: 30px;
            transition: background-color 0.3s ease;
        }

        .btn-add-ebook:hover {
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
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i>Blog & Event</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-edit"></i><a href="blog.php">Blog</a></li>
                            <li><i class="fa fa-calendar"></i><a href="events.php">Events</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown active">
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
                                <h4 class="box-title">Islamic E-books</h4>
                                <small>Add and manage all Islamic E-books</small>
                            </div>

                            <div class="card-body">
                                <!-- Content fall here -->
                                <div class="text-center mb-4">
                                    <button class="btn btn-add-ebook" data-toggle="modal" data-target="#addEbookModal">
                                        Add New E-book
                                    </button>
                                </div>


                                <div class="row text-center">
                                    <div class="col-md-4 mb-4">
                                        <div class="card exco-card shadow-sm">
                                            <img src="../../images/blog1.jpg" class="card-img-top exco-image" alt="Exco Image">
                                            <div class="card-body">
                                                <h5 class="card-title">E-book Name</h5>
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
    <div class="modal fade" id="addEbookModal" tabindex="-1" aria-labelledby="addEbookModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="modal-title" id="addEbookModalLabel">Add E-book</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="ebookLabel" class="form-label">E-book Name</label>
                            <input type="text" class="form-control" id="ebookLabel" placeholder="Ex: Jurisprudence of Islamic Nations" required>
                        </div>
                        <div class="mb-3">
                            <label for="pqPreview" class="form-label">Image Preview</label>
                            <input type="file" class="form-control" id="pqPreview" accept=".jpg, .png" required>
                        </div>
                        <div class="mb-3">
                            <label for="pqFile" class="form-label">File</label>
                            <input type="file" class="form-control" id="pqFile" accept=".jpg, .pdf, .png, .doc" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-add-ebook">Add E-book</button>
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
                    <h5 class="modal-title" id="editPqModalLabel">Edit PQ</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="faculty" class="form-label">Faculty</label>
                            <select name="faculty" id="faculty" class="form-control" required>
                                <option value="">Select Faculty</option>
                                <option value="Natural and Applied Science">Natural and Applied Science</option>
                                <option value="Administration">Administration</option>
                                <option value="Art">Art</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="department" class="form-label">Department</label>
                            <select name="department" id="department" class="form-control" required>
                                <option value="">Select Department</option>
                                <option value="Computer Science">Computer Science</option>
                                <option value="Microbiology">Microbiology</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="pqLabel" class="form-label">PQ Label</label>
                            <input type="text" class="form-control" id="pqLabel" value="MTH112 - 2020/2021" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-add-ebook">Add PQ</button>
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