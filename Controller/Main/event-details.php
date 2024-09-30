<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Including links -->
  <?php include_once "./includes/head-links.php"; ?>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./assets/css/responsive.css" />
  <link rel="stylesheet" href="./assets/css/animations.css" />
  <link rel="stylesheet" href="./assets/css/details.css" />
</head>

<body>
  <!-- Start of Navbar -->
  <?php include_once "./includes/navbar.php"; ?>
  <!-- End of Navbar -->

  <!-- Hero section start -->
  <section id="hero-section">
    <div class="container py-4">
      <h1 class="text-center text-white fw-bold">EVENT DETAILS</h1>
    </div>
  </section>
  <!-- Hero section end -->

  <!-- Content Start -->
  <section>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
          <img
            src="./images/Upcoming Walimah.jpg"
            alt=""
            class="img-fluid w-100" />
          <div class="d-flex flex-wrap justify-content-between pe-sm-5 py-3">
            <p>Category: Event</p>
            <p>
              <i
                class="fa fa-calendar-alt text-success"
                aria-hidden="true"></i>
              8 September
            </p>
            <p>
              <i
                class="fa-regular fa-clock text-success"
                aria-hidden="true"></i>
              9:00am
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <h4 class="text-uppercase">SendForth Walimah/Inuagration day</h4>
          <p>
            Join us for the highly anticipated Sendforth Walimah/Inauguration
            Day, a momentous event where we honor the outgoing Excos for their
            dedication, leadership, and countless contributions over the past
            year. This special occasion provides us the chance to celebrate
            their achievements and sacrifices that have shaped the MSSN NSUK
            Chapter. At the same time, we look ahead with excitement as the
            new Excos are inaugurated, ready to take the mantle of leadership
            and guide our community into a prosperous future filled with
            unity, growth, and continued spiritual excellence. Expect a day
            filled with deep reflections, joyous celebrations, and heartfelt
            inspiration as we witness the formal handover of responsibilities.
            The event will feature speeches from prominent members of the
            Muslim community, highlighting the importance of leadership and
            service to the Ummah. There will also be special prayers, asking
            for Allah's guidance and blessings on both the outgoing and
            incoming Excos. This is a unique opportunity for the entire MSSN
            family to come together, reflect on the accomplishments of the
            past, celebrate our shared goals, and collectively look forward to
            the exciting future ahead.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Content End -->

  <!-- Footer Start -->
  <?php include_once "./includes/footer.php"; ?>
  <!-- Footer End -->

  <!-- Scripts -->
  <script src="./assets/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>