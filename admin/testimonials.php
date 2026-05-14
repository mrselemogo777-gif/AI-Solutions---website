<?php
session_start();
require_once '../includes/config.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: ../admin-login.php');
    exit;
}

// Handle approve action
if (isset($_GET['approve'])) {
    $id = (int)$_GET['approve'];
    mysqli_query($conn, "UPDATE testimonials SET status = 'approved' WHERE id = $id");
    header('Location: testimonials.php');
    exit;
}

// Handle delete action
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    mysqli_query($conn, "DELETE FROM testimonials WHERE id = $id");
    header('Location: testimonials.php');
    exit;
}

// Fetch all testimonials
$sql = "SELECT * FROM testimonials ORDER BY submitted_at DESC";
$result = mysqli_query($conn, $sql);
$testimonials = mysqli_fetch_all($result, MYSQLI_ASSOC);

$title = "Manage Testimonials";
include '../includes/header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 bg-dark text-white p-3" style="min-height:100vh">
            <h5>Admin Menu</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="dashboard.php" class="text-white">Dashboard</a></li>
                <li class="nav-item mb-2"><a href="testimonials.php" class="text-white bg-primary p-2 rounded">Testimonials</a></li>
                <li class="nav-item mb-2"><a href="../index.php" class="text-white-50">← Back to Website</a></li>
                <li class="nav-item mt-4"><a href="logout.php" class="text-danger">Logout</a></li>
            </ul>
        </div>
        <div class="col-md-10 p-4">
            <h2>Manage Testimonials</h2>
            <p>Approve or delete testimonials submitted by users.</p>
            
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr><th>ID</th><th>Name</th><th>Email</th><th>Product</th><th>Rating</th><th>Review</th><th>Status</th><th>Actions</th><th>Submitted</th></tr>
                </thead>
                <tbody>
                    <?php foreach($testimonials as $t): ?>
                    <tr>
                        <td><?php echo $t['id']; ?></td>
                        <td><?php echo htmlspecialchars($t['customer_name']); ?></td>
                        <td><?php echo htmlspecialchars($t['email']); ?></td>
                        <td><?php echo htmlspecialchars($t['service_used']); ?></td>
                        <td><?php for($i=1;$i<=5;$i++) echo $i<=$t['rating'] ? '★' : '☆'; ?></td>
                        <td><?php echo substr(htmlspecialchars($t['comment']),0,50).'...'; ?></td>
                        <td>
                            <?php if($t['status'] == 'pending'): ?>
                                <span class="badge bg-warning">Pending</span>
                            <?php else: ?>
                                <span class="badge bg-success">Approved</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($t['status'] == 'pending'): ?>
                                <a href="?approve=<?php echo $t['id']; ?>" class="btn btn-sm btn-success" onclick="return confirm('Approve this testimonial?')">Approve</a>
                            <?php endif; ?>
                            <a href="?delete=<?php echo $t['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this testimonial?')">Delete</a>
                        </td>
                        <td><?php echo $t['submitted_at']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
