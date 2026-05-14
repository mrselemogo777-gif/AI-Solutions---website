<?php
require_once 'includes/config.php';
include 'includes/header.php';

// Handle form submission
$msg = '';
$msgType = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean($_POST['name']);
    $email = clean($_POST['email']);
    $rating = (int)$_POST['rating'];
    $service = clean($_POST['service']);
    $comment = clean($_POST['comment']);
    
    if (empty($name) || empty($email) || empty($comment)) {
        $msg = 'Please fill in all required fields.';
        $msgType = 'danger';
    } else {
        $sql = "INSERT INTO testimonials (customer_name, email, company, service_used, rating, comment, status) 
                VALUES ('$name', '$email', 'User', '$service', '$rating', '$comment', 'pending')";
        
        if (mysqli_query($conn, $sql)) {
            $msg = 'Thank you for your testimonial! It will be reviewed and published soon.';
            $msgType = 'success';
        } else {
            $msg = 'Database error. Please try again.';
            $msgType = 'danger';
        }
    }
}

// Fetch APPROVED testimonials only (for public display)
$sql = "SELECT * FROM testimonials WHERE status = 'approved' ORDER BY submitted_at DESC";
$result = mysqli_query($conn, $sql);
$testimonials = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<h1 class="mb-4">Client Testimonials</h1>
<p class="lead mb-5">Hear what our clients have to say about working with us.</p>

<!-- Display existing testimonials -->
<div class="row mb-5">
    <?php foreach($testimonials as $t): ?>
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <div class="mb-3">
                    <?php for($i=1; $i<=5; $i++): ?>
                        <?php echo ($i <= $t['rating']) ? '<i class="fas fa-star text-warning"></i>' : '<i class="far fa-star text-warning"></i>'; ?>
                    <?php endfor; ?>
                </div>
                <p class="card-text">"<?php echo htmlspecialchars($t['comment']); ?>"</p>
                <div class="mt-3">
                    <strong><?php echo htmlspecialchars($t['customer_name']); ?></strong><br>
                    <small class="text-muted"><?php echo htmlspecialchars($t['company']); ?></small><br>
                    <small class="text-muted"><?php echo date('F j, Y', strtotime($t['submitted_at'])); ?></small>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<!-- Submission Form -->
<div class="card mt-5">
    <div class="card-header bg-primary text-white">
        <h3 class="mb-0">Share Your Experience</h3>
    </div>
    <div class="card-body">
        <p>Have you used our AI radiology software? We'd love to hear your feedback!</p>
        
        <?php if($msg): ?>
            <div class="alert alert-<?php echo $msgType; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        
        <form method="post">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Your Name *</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Your Email *</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Rating (1-5 stars) *</label>
                    <select name="rating" class="form-select" required>
                        <option value="">Select rating</option>
                        <option value="5">★★★★★ (Excellent)</option>
                        <option value="4">★★★★☆ (Very Good)</option>
                        <option value="3">★★★☆☆ (Good)</option>
                        <option value="2">★★☆☆☆ (Fair)</option>
                        <option value="1">★☆☆☆☆ (Poor)</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Which product did you use? *</label>
                    <select name="service" class="form-select" required>
                        <option value="">Select product</option>
                        <option value="Triage Software">AI Triage Software</option>
                        <option value="Lesion Detection">ML Lesion Detection</option>
                        <option value="Workflow Optimisation">AI Workflow Optimisation</option>
                        <option value="Reporting Software">ML Reporting Software</option>
                    </select>
                </div>
            </div>
            
            <div class="mb-3">
                <label>Your Review *</label>
                <textarea name="comment" class="form-control" rows="4" required placeholder="Tell us about your experience with our software..."></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit Testimonial</button>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
