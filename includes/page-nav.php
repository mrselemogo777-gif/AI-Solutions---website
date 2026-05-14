<?php
$current_page = basename($_SERVER['PHP_SELF']);
$pages = [
    'index.php' => 'Home',
    'services.php' => 'Services',
    'case-studies.php' => 'Case Studies',
    'testimonials.php' => 'Testimonials',
    'blog.php' => 'Blog',
    'gallery.php' => 'Gallery',
    'events.php' => 'Events',
    'contact.php' => 'Contact'
];
$current_index = array_search($current_page, array_keys($pages));
$prev_page = $current_index !== false && $current_index > 0 ? array_keys($pages)[$current_index - 1] : null;
$next_page = $current_index !== false && $current_index < count($pages) - 1 ? array_keys($pages)[$current_index + 1] : null;
?>
<div class="page-nav-buttons">
    <?php if ($prev_page): ?>
        <a href="<?php echo $prev_page; ?>" class="btn btn-secondary">← Previous: <?php echo $pages[$prev_page]; ?></a>
    <?php else: ?>
        <span></span>
    <?php endif; ?>
    <?php if ($next_page): ?>
        <a href="<?php echo $next_page; ?>" class="btn btn-primary">Next: <?php echo $pages[$next_page]; ?> →</a>
    <?php else: ?>
        <span></span>
    <?php endif; ?>
</div>
