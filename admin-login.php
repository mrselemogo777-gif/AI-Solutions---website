<?php
session_start();
require_once 'includes/config.php';

if(isset($_SESSION['admin_id'])){
    header('Location: admin/dashboard.php');
    exit;
}

$error = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $stmt = $conn->prepare("SELECT * FROM admins WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $admin = $result->fetch_assoc();
    
    if($admin && password_verify($password, $admin['password'])){
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_username'] = $admin['username'];
        header('Location: admin/dashboard.php');
        exit;
    } else {
        $error = "Invalid login";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Admin Login</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
<div class="container mt-5"><div class="row justify-content-center"><div class="col-md-4">
<h2 class="text-center mb-4">Admin Login</h2>
<?php if($error): ?><div class="alert alert-danger"><?php echo $error; ?></div><?php endif; ?>
<form method="post">
<input type="text" name="username" placeholder="Username" class="form-control mb-2" required>
<input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
<button type="submit" class="btn btn-primary w-100">Login</button>
</form>
</div></div></div>
</body>
</html>
