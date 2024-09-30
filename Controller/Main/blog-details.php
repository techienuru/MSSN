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
      <h1 class="text-center text-white fw-bold">BLOG DETAILS</h1>
    </div>
  </section>
  <!-- Hero section end -->

  <!-- Content Start -->
  <section>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
          <img
            src="./images/visit to prison.jpg"
            alt=""
            class="img-fluid w-100" />
          <div class="d-flex flex-wrap justify-content-between pe-sm-5 py-3">
            <p>Category: Blog</p>
            <p>
              <i
                class="fa fa-calendar-alt text-success"
                aria-hidden="true"></i>
              27 August 2024
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <h4>
            The NSUK Muslim ummah visits the graveyard, orphanage home and
            prisoners
          </h4>
          <p>
            As part of Da'awah Week, the MSSN NSUK Chapter, along with the
            Muslim student community, organized meaningful visits to the
            graveyard, orphanage home, and local prison. The purpose of these
            visits was to reinforce the Islamic principles of community
            service, compassion, and spiritual reflection. The first stop at
            the graveyard allowed students to offer prayers for the deceased
            while reflecting on the temporary nature of life and the
            importance of living with purpose and devotion to Allah.
          </p>
          <p>
            The second visit to the orphanage home provided students the
            opportunity to spend time with orphans, offering gifts, comfort,
            and words of encouragement. It was a heartwarming experience that
            reminded the orphans that they are not alone, and the Muslim
            community stands by them, providing both emotional and material
            support. This act of charity fostered a strong sense of empathy
            and responsibility within the student body.
          </p>
          <p>
            Lastly, the students visited prisoners, sharing Islamic teachings
            on repentance and forgiveness. The MSSN members provided food,
            essential items, and religious materials to the inmates, offering
            them hope and spiritual guidance. The visit emphasized the
            importance of compassion and mercy, reminding both prisoners and
            students that no one is beyond Allah's mercy and that everyone has
            the chance for a new beginning.
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