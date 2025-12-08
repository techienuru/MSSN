<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Including links -->
    <?php include_once "./includes/head-links.php"; ?>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/library.css">
</head>

<body>

    <!-- Start of Navbar -->
    <?php include_once "./includes/navbar.php"; ?>
    <!-- End of Navbar -->

    <section id="Hero" class="hero-section">
        <h5 class="py-3 py-sm-4 py-md-5 mb-3">LIBRARY & RESOURCES</h5>
    </section>
    <div class="wrapper">

        <section id="Past_Questions" class="past-questions">
            <h2>PAST QUESTIONS & ANSWERS</h2>

            <form action="" method="post" id="past-question-form">

                <select name="faculty" id="Faculty">
                    <option value="" disabled selected>Select Your Faculty</option>
                    <option value="1">Science</option>
                    <option value="2">Law</option>
                    <option value="3">Art</option>
                    <option value="3">Admin</option>
                    <option value="3">Engineering</option>


                </select>

                <select name="department" id="Department">
                    <option value="" disabled selected>Select Your Department</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>

                <select name="level" id="Level">
                    <option value="" disabled selected>Select Your Level</option>
                    <option value="100L">100L</option>
                    <option value="200L">200L</option>
                    <option value="300L">300L</option>
                    <option value="400L">400L</option>
                    <option value="500L">500L</option>


                </select>
            </form>


            <div class="faculty-of-science-wrapper">
                <h3>Faculty of Science</h3>

                <div class="past-questions-container">

                    <div class="card w-70">
                        <div class="card-body">
                            <h5 class="card-title">Maths 111-2023</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <div class="past-question-item-footer">
                                <a href="#" class="btn"><i class="fa fa-download"></i> Download</a>

                                <span class="pq-lvl">100L</span>
                            </div>
                        </div>
                    </div>

                    <div class="card w-70">
                        <div class="card-body">
                            <h5 class="card-title">Maths 112-2023</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <div class="past-question-item-footer">
                                <a href="#" class="btn"><i class="fa fa-download"></i> Download</a>
                                <span class="pq-lvl">100L</span>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

            <div class="faculty-of-art-wrapper">
                <h3>Faculty of Art</h3>

                <div class="past-questions-container">

                    <div class="card w-70">
                        <div class="card-body">
                            <h5 class="card-title">Art 111-2023</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>

                            <div class="past-question-item-footer">
                                <a href="#" class="btn"><i class="fa fa-download"></i> Download</a>
                                <span class="pq-lvl">100L</span>
                            </div>

                        </div>
                    </div>

                    <div class="card w-70">
                        <div class="card-body">
                            <h5 class="card-title">Art 112-2023</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <div class="past-question-item-footer">
                                <a href="" class="btn"><i class="fa fa-download"></i> Download</a>
                                <span class="pq-lvl">100L</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <secStion id="Islamic_E-books" class="e-books">
            <h2>ISLAMIC E-BOOKS</h2>
            <div class="e-book-container ">

                <div class="e-book-item card">

                    <div class="card-info">
                        <img class="ebook-cover" src="/images/blog1.jpg" alt="">

                        <div>
                            <h5 class="card-title">Preparing for Ramadan</h5>
                            <p class="ebook-description">Description of the corresponding book goes here</p>
                        </div>
                    </div>

                    <div class="footer">
                        <span class="btn btn-light">
                            <i class="fa fa-download"></i>
                            Download
                        </span>
                        <span class="btn btn-light"> <i class="fa fa-share"></i>
                            Share</span>
                    </div>

                </div>
                <div class="e-book-item card">

                    <div class="card-info">
                        <img class="ebook-cover" src="/images/blog1.jpg" alt="">

                        <div>
                            <h5 class="card-title">Preparing for Ramadan</h5>
                            <p class="ebook-description">Description of the corresponding book goes here</p>
                        </div>
                    </div>

                    <div class="footer">
                        <span class="btn ">
                            <i class="fa fa-download"></i>
                            Download
                        </span>
                        <span class="btn "> <i class="fa fa-share"></i>
                            Share</span>
                    </div>

                </div>
                <div class="e-book-item card">

                    <div class="card-info">
                        <img class="ebook-cover" src="/images/blog1.jpg" alt="">

                        <div>
                            <h5 class="card-title">Preparing for Ramadan</h5>
                            <p class="ebook-description">Description of the corresponding book goes here</p>
                        </div>
                    </div>

                    <div class="footer">
                        <span class="btn btn-light">
                            <i class="fa fa-download"></i>
                            Download
                        </span>
                        <span class="btn btn-light"> <i class="fa fa-share"></i>
                            Share</span>
                    </div>

                </div>
                <div class="e-book-item card">

                    <div class="card-info">
                        <img class="ebook-cover" src="/images/blog1.jpg" alt="">

                        <div>
                            <h5 class="card-title">Preparing for Ramadan</h5>
                            <p class="ebook-description">Description of the corresponding book goes here</p>
                        </div>
                    </div>

                    <div class="footer">
                        <span class="btn ">
                            <i class="fa fa-download"></i>
                            Download
                        </span>
                        <span class="btn btn-light"> <i class="fa fa-share"></i>
                            Share</span>
                    </div>

                </div>

            </div>
            </section>
    </div>
    <!-- Footer Start -->
    <?php include_once "./includes/footer.php"; ?>
    <!-- Footer End -->

    <!-- Scripts -->
    <script src="./assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>