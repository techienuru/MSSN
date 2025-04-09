<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Including links -->
  <?php include_once "./includes/head-links.php"; ?>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./assets/css/blog.css" />
</head>

<body>
  <!-- Start of Navbar -->
  <?php include_once "./includes/navbar.php"; ?>
  <!-- End of Navbar -->
  <main>
    <!-- Start of Hero section -->
    <div class="header py-3 py-sm-4 py-md-5 mb-3">
      <h5>LATEST UPDATES & EVENTS</h5>
    </div>
    <!-- End of Hero section -->

    <!-- Start of Event section -->
    <section id="event-section">
      <div class="container mb-3">
        <h2 class="mb-5 text-center">LATEST EVENTS</h2>
        <div id="events-carousel" class="carousel slide carousel-fade py-5 py-sm-0">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#events-carousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#events-carousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#events-carousel" data-bs-slide-to="2"></button>
          </div>
          <div class="carousel-inner p-sm-5">
            <div class="carousel-item active">
              <div class="row justify-content-center">
                <div class="col-auto">
                  <h3>8</h3>
                  <p>Sep</p>
                  <p>2024</p>
                </div>
                <div class="col-9">
                  <p class="fw-bold">SendForth Walimah/Inuagration day</p>
                  <div class="d-flex gap-3">
                    <p>
                      <i class="fa-solid fa-location-dot"></i>
                      <span>1,000 seater auditorium</span>
                    </p>
                    <p>
                      <i class="fa-regular fa-clock"></i>
                      <span>9:00am</span>
                    </p>
                  </div>
                  <p>
                    Join us for the Sendforth Walimah/Inauguration Day as we
                    celebrate the achievements of our outgoing Excos and welcome
                    the new leaders of MSSN NSUK Chapter.
                  </p>
                  <a href="./event-details.php" class="btn float-end details-btn">Event Details</a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row mb-5 justify-content-center">
                <div class="col-auto">
                  <h3>30</h3>
                  <p>Aug</p>
                  <p>2024</p>
                </div>
                <div class="col-9">
                  <p class="fw-bold">
                    Orientation for the newly admitted students
                  </p>
                  <div class="d-flex gap-3">
                    <p>
                      <i class="fa-solid fa-location-dot"></i>
                      <span>Respective Faculty's Congress Venue</span>
                    </p>
                    <p>
                      <i class="fa-regular fa-clock"></i>
                      <span>9:00am</span>
                    </p>
                  </div>
                  <p>
                    Join us as each Faculty will host an orientation program
                    for newly admitted students. The event will offer valuable
                    guidance on academic life, campus culture, and introduce
                    students to the supportive MSSN community.
                  </p>
                  <a href="./event-details.php" class="btn float-end details-btn">Event Details</a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row justify-content-center">
                <div class="col-auto">
                  <h3>13</h3>
                  <p>Jan</p>
                  <p>2025</p>
                </div>
                <div class="col-9">
                  <p class="fw-bold">First weekly congress of the session</p>
                  <div class="d-flex gap-3">
                    <p>
                      <i class="fa-solid fa-location-dot"></i>
                      <span>1,000 seater auditorium</span>
                    </p>
                    <p>
                      <i class="fa-regular fa-clock"></i>
                      <span>9:00am</span>
                    </p>
                  </div>
                  <p>
                    Join us for the Sendforth Walimah/Inauguration Day as we
                    celebrate the achievements of our outgoing Excos and welcome
                    the new leaders of MSSN NSUK Chapter.
                  </p>
                  <a href="./event-details.php" class="btn float-end details-btn">Event Details</a>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" data-bs-target="#events-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark"></span>
          </button>
          <button class="carousel-control-next" data-bs-target="#events-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark"></span>
          </button>
        </div>
      </div>
    </section>
    <!-- End of Event section -->
    <!-- Start of Blog section -->
    <section id="blog-section">
      <div class="container mb-3">
        <h2 class="mb-5 text-center">BLOG SECTION</h2>
        <div class="row justify-content-between pb-3 pb-md-0">
          <div class="col-md-4 mx-3 mx-sm-0 blog-item">
            <div class="card shadow-sm h-100 my-3 my-md-0">
              <img
                src="./images/visit to orphanage home.jpg"
                alt="first blog pix"
                class="img-fluid w-100 object-fit-cover" loading="lazy" />
              <div class="card-body">
                <p class="fw-bold">
                  The NSUK Muslim ummah visits the graveyard, orphanage home and
                  prisoners
                </p>
                <div class="d-flex gap-3">
                  <p>
                    <i class="fa-regular fa-calendar"></i>
                    Wed, Aug 27 2024
                  </p>
                  <p>
                    <i class="fa-regular fa-clock"></i>
                    10:00 am
                  </p>
                </div>
                <p>
                  As Part of the Da'awah week, the MSSN NSUK excos and the
                  students ummah paid a visit to the graveyard, orphanage home
                  and prisoners...
                </p>
                <a href="./blog-details.php" class="btn-link float-end">Read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mx-3 mx-sm-0 blog-item">
            <div class="card shadow-sm h-100 my-3 my-md-0">
              <img
                src="./images/New mssn mosque.jpg"
                alt="first blog pix"
                class="img-fluid w-100 object-fit-cover" loading="lazy" />
              <div class="card-body">
                <p class="fw-bold">
                  MSSN NSUK Commence the re-construction of Old central Mosque
                </p>
                <div class="d-flex gap-3">
                  <p>
                    <i class="fa-regular fa-calendar"></i>
                    Thur, Sep 9 2024
                  </p>
                  <p>
                    <i class="fa-regular fa-clock"></i>
                    10:00 am
                  </p>
                </div>
                <p>
                  The old central Mosque has been demolished and re-construction is now underway....
                </p>
                <a href="./blog-details.php" class="btn-link float-end">Read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mx-3 mx-sm-0 blog-item">
            <div class="card shadow-sm h-100 my-3 my-md-0">
              <img
                src="./images/Upcoming Walimah.jpg"
                alt="first blog pix"
                class="img-fluid w-100 object-fit-cover" loading="lazy" />
              <div class="card-body">
                <p class="fw-bold">
                  Orientation for the newly admitted students
                </p>
                <div class="d-flex gap-3">
                  <p>
                    <i class="fa-regular fa-calendar"></i>
                    Sat, Aug 30 2024
                  </p>
                  <p>
                    <i class="fa-regular fa-clock"></i>
                    9:00 am
                  </p>
                </div>
                <p>
                  The MSSN NSUK Chapter recently hosted an orientation program for newly admitted students. The event offered valuable guidance on academic life, campus culture, and introduced students to the supportive MSSN community....
                </p>
                <a href="./blog-details.php" class="btn-link float-end">Read more</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-between pt-3 d-none js-more-blog" data-array-index="0">
          <div class="col-md-4 mx-3 mx-sm-0 blog-item">
            <div class="card shadow-sm h-100 my-3 my-md-0">
              <img
                src="./images/visit to orphanage home.jpg"
                alt="first blog pix"
                class="img-fluid w-100 object-fit-cover" loading="lazy" />
              <div class="card-body">
                <p class="fw-bold">
                  The NSUK Muslim ummah visits the graveyard, orphanage home and
                  prisoners
                </p>
                <div class="d-flex gap-3">
                  <p>
                    <i class="fa-regular fa-calendar"></i>
                    Wed, Aug 27 2024
                  </p>
                  <p>
                    <i class="fa-regular fa-clock"></i>
                    10:00 am
                  </p>
                </div>
                <p>
                  As Part of the Da'awah week, the MSSN NSUK excos and the
                  students ummah paid a visit to the graveyard, orphanage home
                  and prisoners...
                </p>
                <a href="./blog-details.php" class="btn-link float-end">Read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mx-3 mx-sm-0 blog-item">
            <div class="card shadow-sm h-100 my-3 my-md-0">
              <img
                src="./images/New mssn mosque.jpg"
                alt="first blog pix"
                class="img-fluid w-100 object-fit-cover" loading="lazy" />
              <div class="card-body">
                <p class="fw-bold">
                  MSSN NSUK Commence the re-construction of Old central Mosque
                </p>
                <div class="d-flex gap-3">
                  <p>
                    <i class="fa-regular fa-calendar"></i>
                    Thur, Sep 9 2024
                  </p>
                  <p>
                    <i class="fa-regular fa-clock"></i>
                    10:00 am
                  </p>
                </div>
                <p>
                  The old central Mosque has been demolished and re-construction is now underway....
                </p>
                <a href="./blog-details.php" class="btn-link float-end">Read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mx-3 mx-sm-0 blog-item">
            <div class="card shadow-sm h-100 my-3 my-md-0">
              <img
                src="./images/visit to orphanage home.jpg"
                alt="first blog pix"
                class="img-fluid w-100 object-fit-cover" loading="lazy" />
              <div class="card-body">
                <p class="fw-bold">
                  The NSUK Muslim ummah visits the graveyard, orphanage home and
                  prisoners
                </p>
                <div class="d-flex gap-3">
                  <p>
                    <i class="fa-regular fa-calendar"></i>
                    Wed, Aug 27 2024
                  </p>
                  <p>
                    <i class="fa-regular fa-clock"></i>
                    10:00 am
                  </p>
                </div>
                <p>
                  As Part of the Da'awah week, the MSSN NSUK excos and the
                  students ummah paid a visit to the graveyard, orphanage home
                  and prisoners...
                </p>
                <a href="./blog-details.php" class="btn-link float-end">Read more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-between pt-3 d-none js-more-blog" data-array-index="1">
          <div class="col-md-4 mx-3 mx-sm-0 blog-item">
            <div class="card shadow-sm h-100 my-3 my-md-0">
              <img
                src="./images/visit to orphanage home.jpg"
                alt="first blog pix"
                class="img-fluid w-100 object-fit-cover" loading="lazy" />
              <div class="card-body">
                <p class="fw-bold">
                  The NSUK Muslim ummah visits the graveyard, orphanage home and
                  prisoners
                </p>
                <div class="d-flex gap-3">
                  <p>
                    <i class="fa-regular fa-calendar"></i>
                    Wed, Aug 27 2024
                  </p>
                  <p>
                    <i class="fa-regular fa-clock"></i>
                    10:00 am
                  </p>
                </div>
                <p>
                  As Part of the Da'awah week, the MSSN NSUK excos and the
                  students ummah paid a visit to the graveyard, orphanage home
                  and prisoners...
                </p>
                <a href="./blog-details.php" class="btn-link float-end">Read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mx-3 mx-sm-0 blog-item">
            <div class="card shadow-sm h-100 my-3 my-md-0">
              <img
                src="./images/New mssn mosque.jpg"
                alt="first blog pix"
                class="img-fluid w-100 object-fit-cover" loading="lazy" />
              <div class="card-body">
                <p class="fw-bold">
                  MSSN NSUK Commence the re-construction of Old central Mosque
                </p>
                <div class="d-flex gap-3">
                  <p>
                    <i class="fa-regular fa-calendar"></i>
                    Thur, Sep 9 2024
                  </p>
                  <p>
                    <i class="fa-regular fa-clock"></i>
                    10:00 am
                  </p>
                </div>
                <p>
                  The old central Mosque has been demolished and re-construction is now underway....
                </p>
                <a href="./blog-details.php" class="btn-link float-end">Read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mx-3 mx-sm-0 blog-item">
            <div class="card shadow-sm h-100 my-3 my-md-0">
              <img
                src="./images/visit to orphanage home.jpg"
                alt="first blog pix"
                class="img-fluid w-100 object-fit-cover" loading="lazy" />
              <div class="card-body">
                <p class="fw-bold">
                  The NSUK Muslim ummah visits the graveyard, orphanage home and
                  prisoners
                </p>
                <div class="d-flex gap-3">
                  <p>
                    <i class="fa-regular fa-calendar"></i>
                    Wed, Aug 27 2024
                  </p>
                  <p>
                    <i class="fa-regular fa-clock"></i>
                    10:00 am
                  </p>
                </div>
                <p>
                  As Part of the Da'awah week, the MSSN NSUK excos and the
                  students ummah paid a visit to the graveyard, orphanage home
                  and prisoners...
                </p>
                <a href="./blog-details.php" class="btn-link float-end">Read more</a>
              </div>
            </div>
          </div>
        </div>


        <div class="d-flex justify-content-center my-3">
          <button type="button" class="btn btn-success load-more-blog-btn js-load-more-blog-btn">Load More</button>
        </div>
      </div>
    </section>
    <!-- End of Blog section -->
  </main>

  <!-- Footer Start -->
  <?php include_once "./includes/footer.php"; ?>
  <!-- Footer End -->

  <!-- Scripts -->
  <script src="./assets/js/script.js"></script>
  <script src="./assets/js/blog-and-events.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>