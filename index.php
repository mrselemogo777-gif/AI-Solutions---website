<?php
include 'includes/config.php';
include 'includes/header.php';

// Fetch latest 3 testimonials
$test_sql = "SELECT * FROM testimonials ORDER BY comment_date DESC LIMIT 3";
$test_result = mysqli_query($conn, $test_sql);

// Fetch upcoming events (future or today)
$event_sql = "SELECT * FROM events WHERE event_date >= CURDATE() ORDER BY event_date LIMIT 3";
$event_result = mysqli_query($conn, $event_sql);
?>

<!-- Hero Carousel Section -->
<div id="heroCarousel" class="carousel slide carousel-fade mb-5" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/images/homepage/homer1.png" class="d-block w-100" alt="Radiology Software Solutions" style="height: 600px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block" style="background: rgba(0,0,0,0.6); border-radius: 10px; padding: 2rem;">
                <h1 style="color: white; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">AI-Solutions Ltd</h1>
                <p style="color: white; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">AI‑powered radiology ML for faster, more accurate reads.</p>
                <a href="services.php" class="btn btn-lg" style="color: white; border-color: white; background: transparent;">Explore Services</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/homepage/homi2.jpg" class="d-block w-100" alt="Triage Software" style="height: 600px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block" style="background: rgba(0,0,0,0.6); border-radius: 10px; padding: 2rem;">
                <h1 style="color: white; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">AI radiology ML solutions</h1>
                <p style="color: white; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Triage software that prioritises critical findings instantly.</p>
                <a href="contact.php" class="btn btn-lg" style="color: white; border-color: white; background: transparent;">Get a Demo</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/homepage/homer3.jpg" class="d-block w-100" alt="AI-Solutions Ltd" style="height: 600px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block" style="background: rgba(0,0,0,0.6); border-radius: 10px; padding: 2rem;">
                <h1 style="color: white; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">AI‑powered radiology ML for faster, more accurate reads</h1>
                <p style="color: white; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">.</p>
                <a href="case-studies.php" class="btn btn-lg" style="color: white; border-color: white; background: transparent;">See Case Studies</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Services Overview -->
<div class="container my-5">
    <h2 class="text-center mb-5">Our Software Solutions</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="service-card">
                <h3>Triage Software</h3>
                <p>Prioritises urgent cases for faster emergency reads.</p>
                <a href="services.php" class="btn btn-outline-primary mt-3">Learn More →</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-card">
                <h3>AI-Solutions Ltd</h3>
                <p>Detects nodules, tumours, and abnormalities.</p>
                <a href="services.php" class="btn btn-outline-primary mt-3">Learn More →</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-card">
                <h3>Workflow Optimisation</h3>
                <p>Balances workload across radiologists.</p>
                <a href="services.php" class="btn btn-outline-primary mt-3">Learn More →</a>
            </div>
        </div>
    </div>
</div>

<!-- Statistics Section -->
<div class="container-fluid bg-light py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-4">
                <div class="stat-box">
                    <h3 class="display-4 fw-bold text-primary">50+</h3>
                    <p class="text-muted">Projects Delivered</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="stat-box">
                    <h3 class="display-4 fw-bold text-primary">30+</h3>
                    <p class="text-muted">Happy Clients</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="stat-box">
                    <h3 class="display-4 fw-bold text-primary">5+</h3>
                    <p class="text-muted">Years Experience</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="stat-box">
                    <h3 class="display-4 fw-bold text-primary">24/7</h3>
                    <p class="text-muted">Support</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials -->
<div class="container my-5">
    <h2 class="text-center mb-5">What Our Clients Say</h2>
    <div class="row">
        <?php while($row = mysqli_fetch_assoc($test_result)): ?>
        <div class="col-md-4 mb-4">
            <div class="testimonial">
                <div class="rating mb-2">
                    <?php for($i=1; $i<=5; $i++): ?>
                        <?php if($i <= $row['rating']): ?>
                            <i class="fas fa-star text-warning"></i>
                        <?php else: ?>
                            <i class="far fa-star text-warning"></i>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
                <p class="mb-3">"<?php echo htmlspecialchars($row['comment']); ?>"</p>
                <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; background-color: #8B7355 !important;">
                        <span class="text-white fw-bold"><?php echo strtoupper(substr($row['customer_name'], 0, 2)); ?></span>
                    </div>
                    <div>
                        <h6 class="mb-0"><?php echo htmlspecialchars($row['customer_name']); ?></h6>
                        <small class="text-muted"><?php echo htmlspecialchars($row['company']); ?></small>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <div class="text-center mt-3">
        <a href="testimonials.php" class="btn btn-outline-primary">View All Testimonials →</a>
    </div>
</div>

<!-- Upcoming Events -->
<div class="container my-5">
    <h2 class="text-center mb-5">Upcoming Events</h2>
    <div class="row">
        <?php while($row = mysqli_fetch_assoc($event_result)): ?>
        <div class="col-md-4 mb-4">
            <div class="event-card">
                <div class="event-date"><?php echo date('M j, Y', strtotime($row['event_date'])); ?></div>
                <h4><?php echo htmlspecialchars($row['title']); ?></h4>
                <p><?php echo htmlspecialchars($row['description']); ?></p>
                <p><strong>Location:</strong> <?php echo htmlspecialchars($row['location']); ?></p>
                <a href="contact.php?subject=<?php echo urlencode('Register for ' . $row['title']); ?>" class="btn btn-outline-primary btn-sm">Register →</a>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <div class="text-center mt-3">
        <a href="events.php" class="btn btn-outline-primary">View All Events →</a>
    </div>
</div>

<!-- Call to Action -->
<div class="container-fluid bg-primary text-white py-5">
    <div class="container text-center">
        <h2 class="mb-4">Ready to Transform Your Radiology Department?</h2>
        <p class="lead mb-4">Contact us today for a free consultation.</p>
        <a href="contact.php" class="btn btn-light btn-lg">Get in Touch</a>
    </div>
</div>

<?php include 'includes/page-nav.php'; ?>
<?php include 'includes/footer.php'; ?>
