<?php
include 'includes/config.php';
include 'includes/header.php';

$sql = "SELECT * FROM blog_posts ORDER BY post_date DESC";
$result = mysqli_query($conn, $sql);

$recent_sql = "SELECT id, title, post_date FROM blog_posts ORDER BY post_date DESC LIMIT 5";
$recent_result = mysqli_query($conn, $recent_sql);
?>

<div class="row">
    <div class="col-lg-8">
        <h1 class="mb-4">AI in Radiology Blog</h1>
        <p class="lead mb-5">Insights, news, and updates from the AI-Solutions Ltd team.</p>

        <?php if (mysqli_num_rows($result) == 0): ?>
            <div class="alert alert-info">No blog posts yet. Check back soon!</div>
        <?php else: ?>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <div class="card mb-5 border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h3>
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center me-2" style="width: 30px; height: 30px;">
                                <span class="text-white small fw-bold"><?php echo strtoupper(substr($row['author'], 0, 2)); ?></span>
                            </div>
                            <span class="text-muted me-3"><?php echo htmlspecialchars($row['author']); ?></span>
                            <span class="text-muted"><i class="far fa-calendar-alt me-1"></i><?php echo date('F j, Y', strtotime($row['post_date'])); ?></span>
                        </div>
                        <p class="card-text"><?php echo nl2br(htmlspecialchars(substr($row['content'], 0, 250) . '...')); ?></p>
                        <a href="blog-detail.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-primary">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="col-lg-4">
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <h5 class="card-title mb-3">About</h5>
                <p class="card-text">Follow our journey as we explore AI innovation in healthcare, share success stories, and provide insights for medical professionals and administrators.</p>
            </div>
        </div>

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
                <h5 class="card-title">Ready to transform your radiology department?</h5>
                <p class="card-text">Contact us today to discuss how our software can benefit your radiology department.</p>
                <a href="contact.php" class="btn btn-light">Get in touch <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/page-nav.php'; include 'includes/footer.php'; ?>
