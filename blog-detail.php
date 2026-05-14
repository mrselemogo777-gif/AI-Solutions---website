<?php
include 'includes/config.php';
include 'includes/header.php';

$post_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$sql = "SELECT * FROM blog_posts WHERE id = $post_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    echo '<div class="alert alert-warning">Post not found.</div>';
    include 'includes/footer.php';
    exit;
}

$row = mysqli_fetch_assoc($result);

$recent_sql = "SELECT id, title, post_date FROM blog_posts WHERE id != $post_id ORDER BY post_date DESC LIMIT 5";
$recent_result = mysqli_query($conn, $recent_sql);
?>

<div class="row">
    <div class="col-lg-8">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($row['title']); ?></li>
            </ol>
        </nav>

        <article>
            <h1 class="mb-4"><?php echo htmlspecialchars($row['title']); ?></h1>
            <div class="d-flex align-items-center mb-4">
                <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                    <span class="text-white fw-bold"><?php echo strtoupper(substr($row['author'], 0, 2)); ?></span>
                </div>
                <div>
                    <h5 class="mb-0"><?php echo htmlspecialchars($row['author']); ?></h5>
                    <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> <?php echo date('F j, Y', strtotime($row['post_date'])); ?></small>
                </div>
            </div>
            <div class="blog-content">
                <?php echo nl2br(htmlspecialchars($row['content'])); ?>
            </div>
        </article>

        <hr class="my-5">
        <div class="d-flex justify-content-between">
            <?php
            $prev_sql = "SELECT id, title FROM blog_posts WHERE id < $post_id ORDER BY id DESC LIMIT 1";
            $prev_result = mysqli_query($conn, $prev_sql);
            $next_sql = "SELECT id, title FROM blog_posts WHERE id > $post_id ORDER BY id ASC LIMIT 1";
            $next_result = mysqli_query($conn, $next_sql);
            ?>
            <?php if (mysqli_num_rows($prev_result) > 0): $prev = mysqli_fetch_assoc($prev_result); ?>
                <a href="blog-detail.php?id=<?php echo $prev['id']; ?>" class="btn btn-outline-primary"><i class="fas fa-arrow-left me-2"></i> Previous</a>
            <?php else: ?>
                <span></span>
            <?php endif; ?>
            <?php if (mysqli_num_rows($next_result) > 0): $next = mysqli_fetch_assoc($next_result); ?>
                <a href="blog-detail.php?id=<?php echo $next['id']; ?>" class="btn btn-outline-primary">Next <i class="fas fa-arrow-right ms-2"></i></a>
            <?php else: ?>
                <span></span>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <h5 class="card-title mb-3">Recent Posts</h5>
                <ul class="list-unstyled">
                    <?php while($recent = mysqli_fetch_assoc($recent_result)): ?>
                        <li class="mb-2">
                            <a href="blog-detail.php?id=<?php echo $recent['id']; ?>" class="text-decoration-none">
                                <i class="fas fa-chevron-right me-2" style="font-size: 0.8rem;"></i>
                                <?php echo htmlspecialchars($recent['title']); ?>
                            </a>
                            <small class="d-block text-muted ms-3"><?php echo date('M j, Y', strtotime($recent['post_date'])); ?></small>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
        <div class="card border-0 shadow-sm bg-primary text-white">
            <div class="card-body">
                <h5 class="card-title">Ready to transform?</h5>
                <p class="card-text">Contact us today to discuss how AI can benefit your business.</p>
                <a href="contact.php" class="btn btn-light">Get in touch <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/page-nav.php'; include 'includes/footer.php'; ?>
