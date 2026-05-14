<?php include 'includes/config.php'; include 'includes/header.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" />

<h1 class="mb-4">Event Gallery</h1>
<p class="lead mb-5">Explore photos and videos from our past events, workshops, and client meetings.</p>

<h2 class="mb-4" style="color: #8B7355;">📷 Photos</h2>
<div id="photoCarousel" class="carousel slide carousel-fade shadow-lg rounded overflow-hidden mb-5" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="false">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#photoCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#photoCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#photoCarousel" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#photoCarousel" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#photoCarousel" data-bs-slide-to="4"></button>
        <button type="button" data-bs-target="#photoCarousel" data-bs-slide-to="5"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="assets/images/gallery/galery1.jpg" data-lightbox="gallery" data-title="Gaborone Radiology Summit – Annual radiology conference in Gaborone">
                <img src="assets/images/gallery/galery1.jpg" class="d-block w-100" alt="Gaborone Radiology Summit" style="height: 500px; object-fit: cover;">
            </a>
            <div class="carousel-caption d-none d-md-block">
                <h5>Gaborone Radiology Summit</h5>
                <p>Annual radiology conference in Gaborone.</p>
            </div>
        </div>
        <div class="carousel-item">
            <a href="assets/images/gallery/galery2.jpg" data-lightbox="gallery" data-title="Francistown Workshop – Hands‑on workshop in Francistown">
                <img src="assets/images/gallery/galery2.jpg" class="d-block w-100" alt="Francistown Workshop" style="height: 500px; object-fit: cover;">
            </a>
            <div class="carousel-caption d-none d-md-block">
                <h5>Francistown Workshop</h5>
                <p>Hands‑on workshop in Francistown.</p>
            </div>
        </div>
        <div class="carousel-item">
            <a href="assets/images/gallery/galery3.jpg" data-lightbox="gallery" data-title="Princess Marina Hospital – Lesion detection software deployment">
                <img src="assets/images/gallery/galery3.jpg" class="d-block w-100" alt="Princess Marina Hospital" style="height: 500px; object-fit: cover;">
            </a>
            <div class="carousel-caption d-none d-md-block">
                <h5>Princess Marina Hospital</h5>
                <p>Lesion detection software deployment.</p>
            </div>
        </div>
        <div class="carousel-item">
            <a href="assets/images/gallery/galery4.jpg" data-lightbox="gallery" data-title="Nyangabgwe Hospital – Workflow optimisation training">
                <img src="assets/images/gallery/galery4.jpg" class="d-block w-100" alt="Nyangabgwe Hospital" style="height: 500px; object-fit: cover;">
            </a>
            <div class="carousel-caption d-none d-md-block">
                <h5>Nyangabgwe Hospital</h5>
                <p>Workflow optimisation training.</p>
            </div>
        </div>
        <div class="carousel-item">
            <a href="assets/images/gallery/galery5.jpg" data-lightbox="gallery" data-title="Sekgoma Memorial Hospital – Reporting software implementation">
                <img src="assets/images/gallery/galery5.jpg" class="d-block w-100" alt="Sekgoma Memorial Hospital" style="height: 500px; object-fit: cover;">
            </a>
            <div class="carousel-caption d-none d-md-block">
                <h5>Sekgoma Memorial Hospital</h5>
                <p>Reporting software implementation.</p>
            </div>
        </div>
        <div class="carousel-item">
            <a href="assets/images/gallery/galery6.jpg" data-lightbox="gallery" data-title="Virtual Radiology Showcase – Online showcase of radiology software">
                <img src="assets/images/gallery/galery6.jpg" class="d-block w-100" alt="Virtual Radiology Showcase" style="height: 500px; object-fit: cover;">
            </a>
            <div class="carousel-caption d-none d-md-block">
                <h5>Virtual Radiology Showcase</h5>
                <p>Online showcase of radiology software.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
    <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
</div>

<h2 class="mb-4 mt-5" style="color: #8B7355;">🎥 Videos</h2>
<div id="videoCarousel" class="carousel slide shadow-lg rounded overflow-hidden mb-5" data-bs-ride="false" data-bs-interval="false">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#videoCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#videoCarousel" data-bs-slide-to="1"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <video class="d-block w-100" controls style="height: 500px; object-fit: cover;">
                <source src="assets/videos/video1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="carousel-caption d-none d-md-block">
                <h5>AI Radiology Showcase</h5>
                <p>Demonstration of triage and lesion detection software.</p>
            </div>
        </div>
        <div class="carousel-item">
            <video class="d-block w-100" controls style="height: 500px; object-fit: cover;">
                <source src="assets/videos/video2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="carousel-caption d-none d-md-block">
                <h5>Client Testimonial</h5>
                <p>What our clients say about our radiology software.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
    <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
<style>
    .carousel-caption { color: white; text-shadow: 2px 2px 4px rgba(0,0,0,0.8); bottom: 0; left: 0; right: 0; padding: 1rem; text-align: left; background: linear-gradient(0deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0) 100%); }
    .thumbnail-img { cursor: pointer; opacity: 0.7; transition: all 0.3s; border: 2px solid transparent; object-fit: cover; height: 100px; width: 100%; }
    .thumbnail-img:hover { opacity: 1; transform: scale(1.05); border-color: #8B7355; }
</style>

<?php include 'includes/page-nav.php'; include 'includes/footer.php'; ?>
