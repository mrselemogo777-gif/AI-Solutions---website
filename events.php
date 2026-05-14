<?php
include 'includes/config.php';
include 'includes/header.php';

function get_event_image($title) {
    $title_lower = strtolower($title);
    if (strpos($title_lower, "gaborone") !== false) return "show1.jpeg";
    if (strpos($title_lower, "francistown") !== false) return "show2.jpeg";
    if (strpos($title_lower, "virtual") !== false) return "show3.jpeg";
    return "show1.jpeg";
}

$today = date('Y-m-d');

$carousel_sql = "SELECT * FROM events ORDER BY event_date LIMIT 5";
$carousel_result = mysqli_query($conn, $carousel_sql);

$upcoming_sql = "SELECT * FROM events WHERE event_date >= '$today' ORDER BY event_date ASC";
$upcoming_result = mysqli_query($conn, $upcoming_sql);

$past_sql = "SELECT * FROM events WHERE event_date < '$today' ORDER BY event_date DESC";
$past_result = mysqli_query($conn, $past_sql);

$upcoming_count = mysqli_num_rows($upcoming_result);
$past_count = mysqli_num_rows($past_result);
?>

<h1 class="mb-4">Events & Workshops</h1>
<p class="lead mb-5">Join us at our upcoming events to learn, network, and explore the future of AI.</p>

<?php if (mysqli_num_rows($carousel_result) > 0): ?>
    <div class="row">
        <?php while($event = mysqli_fetch_assoc($upcoming_result)): 
            $img = get_event_image($event['title']);
        ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm event-card">
                    <img src="assets/images/events/<?php echo $img; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($event['title']); ?>" style="object-fit: cover; height: 220px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($event['title']); ?></h5>
                        <p class="card-text small text-muted">
                            <i class="fas fa-calendar-alt me-2"></i><?php echo date('F j, Y', strtotime($event['event_date'])); ?><br>
                            <i class="fas fa-map-marker-alt me-2"></i><?php echo htmlspecialchars($event['location']); ?>
                        </p>
                        <p class="card-text"><?php echo htmlspecialchars(substr($event['description'], 0, 100)) . '...'; ?></p>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-3">
                        <a href="contact.php?subject=<?php echo urlencode('Register for ' . $event['title']); ?>" class="btn btn-outline-primary w-100">Register Interest →</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php else: ?>
    <div class="alert alert-info">No upcoming events at the moment. Check back soon!</div>
<?php endif; ?>

<?php if ($past_count > 0): ?>
    <h2 class="mb-4 mt-5" style="color: #8B7355;">📂 Past Events (<?php echo $past_count; ?>)</h2>
    <div class="row">
        <?php while($event = mysqli_fetch_assoc($past_result)): 
            $img = get_event_image($event['title']);
        ?>
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card h-100 border-0 shadow-sm past-event-card">
                    <img src="assets/images/events/<?php echo $img; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($event['title']); ?>" style="object-fit: cover; height: 150px;">
                    <div class="card-body p-2">
                        <h6 class="card-title"><?php echo htmlspecialchars($event['title']); ?></h6>
                        <p class="card-text small text-muted">
                            <i class="fas fa-calendar-alt me-1"></i><?php echo date('M j, Y', strtotime($event['event_date'])); ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php else: ?>
    <div class="alert alert-info">No past events to display.</div>
<?php endif; ?>

<style>
    .event-card { transition: transform 0.3s, box-shadow 0.3s; overflow: hidden; }
    .event-card:hover { transform: translateY(-5px); box-shadow: 0 15px 30px rgba(139,115,85,0.2); }
    .event-card .card-img-top { transition: transform 0.5s; }
    .event-card:hover .card-img-top { transform: scale(1.05); }
    .past-event-card { opacity: 0.8; filter: grayscale(30%); transition: all 0.3s; }
    .past-event-card:hover { opacity: 1; filter: grayscale(0%); transform: translateY(-3px); }
    .btn-outline-primary { color: #8B7355; border-color: #8B7355; }
    .btn-outline-primary:hover { background-color: #8B7355; color: white; }
    .carousel-caption { background: linear-gradient(0deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%); border-radius: 10px; bottom: 20px; left: 20px; right: 20px; }
</style>

<?php include 'includes/page-nav.php'; include 'includes/footer.php'; ?>
