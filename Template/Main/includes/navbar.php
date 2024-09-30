<!-- Start of Navbar -->
<section class="navbar navbar-expand-md" id="navbar-section">
    <div class="container">
        <a href="/" class="navbar-brand d-flex gap-2">
            <img
                src="<?php echo $image_fol.'logo.png';?>"
                class="img-fluid d-inline"
                width="40"
                height="30"
                alt="logo" />
            <div
                class="d-flex flex-column justify-content-center text-white"
                style="font-size: 10px">
                <span>Muslim Student Society Of Nigeria</span>
                <span>NSUK Chapter</span>
            </div>
        </a>

        <!-- Hamburger -->
        <button class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </button>

        <ul class="navbar-nav collapse navbar-collapse justify-content-end">
            <li class="nav-item">
                <a href="/" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="/about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="/library" class="nav-link">Library & Resources</a>
            </li>
            <li class="nav-item">
                <a href="/excos" class="nav-link">Excos</a>
            </li>
            <li class="nav-item">
                <a href="/blog" class="nav-link">Blog & Event</a>
            </li>
        </ul>
    </div>
</section>

<div class="hamburger-menu px-5 py-3">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <a href="" class="">
            <img
                src="<?php echo $image_fol.'logo.png';?>"
                class="img-fluid"
                width="40"
                height="30"
                alt="logo" />
        </a>
        <button type="button" class="btn-close js-hamburger-close"></button>
    </div>
    <ul>
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="/about">About</a>
        </li>
        <li>
            <a href="/library">Library & Resources</a>
        </li>
        <li>
            <a href="/excos">Our Excos</a>
        </li>
        <li>
            <a href="/blog">Blog & Event</a>
        </li>
    </ul>
</div>
<!-- End of Navbar -->