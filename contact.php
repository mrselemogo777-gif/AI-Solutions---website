<?php
require_once 'includes/config.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean($_POST['name']);
    $email = clean($_POST['email']);
    $phone = clean($_POST['phone']);
    $company = clean($_POST['company']);
    $country = clean($_POST['country']);
    $job_title = clean($_POST['job_title']);
    $details = clean($_POST['details']);
    
    $sql = "INSERT INTO inquiries (name, email, phone, company, country, job_title, job_details) 
            VALUES ('$name', '$email', '$phone', '$company', '$country', '$job_title', '$details')";
    
    if (mysqli_query($conn, $sql)) {
        $message = '<div class="alert alert-success">Message sent! We will contact you soon.</div>';
    } else {
        $message = '<div class="alert alert-danger">Error: ' . mysqli_error($conn) . '</div>';
    }
}

include 'includes/header.php';
?>

<h1>Contact Us</h1>

<?php echo $message; ?>

<div class="row">
    <div class="col-md-6">
        <form method="post">
            <div class="mb-3">
                <label>Name *</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email *</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Phone *</label>
                <input type="text" name="phone" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Company *</label>
                <input type="text" name="company" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Country *</label>
                <input type="text" name="country" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Job Title *</label>
                <input type="text" name="job_title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Job Details *</label>
                <textarea name="details" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
    <div class="col-md-6">
        <h4>Our Office</h4>
        <p>Sunderland, UK</p>
        <p>info@ai-solutions.com</p>
        <p>+44 123 456 789</p>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
