<?php
session_start();
require_once '../includes/config.php';

if(!isset($_SESSION['admin_id'])){
    header('Location: ../admin-login.php');
    exit;
}

$result = $conn->query("SELECT * FROM inquiries ORDER BY submitted_at DESC");
$inquiries = $result->fetch_all(MYSQLI_ASSOC);
$total = $conn->query("SELECT COUNT(*) as total FROM inquiries")->fetch_assoc()['total'];
?>
<!DOCTYPE html>
<html>
<head><title>Admin Dashboard</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-2 bg-dark text-white p-3" style="min-height:100vh">
<h5>Menu</h5>
<ul class="nav flex-column">
<li class="nav-item mb-2"><a href="testimonials.php" class="text-white-50">Testimonials</a></li>
<li class="nav-item mb-2"><a href="dashboard.php" class="text-white">Dashboard</a></li>
<li class="nav-item mb-2"><a href="../index.php" class="text-white-50">← Back to Website</a></li>
<li class="nav-item mt-4"><a href="logout.php" class="text-danger">Logout</a></li>
</ul>
</div>
<div class="col-md-10 p-4">
<h2>Customer Inquiries</h2>
<p>Total: <?php echo $total; ?></p>
<table class="table table-bordered">
<thead class="table-dark"><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Company</th><th>Country</th><th>Job</th><th>Message</th><th>Date</th></tr></thead>
<tbody>
<?php foreach($inquiries as $r): ?>
<tr><td><?php echo $r['id']; ?></td><td><?php echo $r['name']; ?></td><td><?php echo $r['email']; ?></td><td><?php echo $r['phone']; ?></td><td><?php echo $r['company']; ?></td><td><?php echo $r['country']; ?></td><td><?php echo $r['job_title']; ?></td><td><?php echo substr($r['job_details'],0,50); ?></td><td><?php echo $r['submitted_at']; ?></td></tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
</body>
</html>
