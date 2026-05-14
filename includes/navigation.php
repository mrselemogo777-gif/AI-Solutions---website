<?php
// Define page order (exact filenames)
$pages = [
    'index.php' => 'Home',
    'services.php' => 'Services',
    'case-studies.php' => 'Case Studies',
    'testimonials.php' => 'Testimonials',
    'blog.php' => 'Blog',
    'gallery.php' => 'Gallery',
    'events.php' => 'Events',
    'contact.php' => 'Contact',
];

$current = basename($_SERVER['PHP_SELF']);
$keys = array_keys($pages);
$current_index = array_search($current, $keys);
$prev_index = $current_index - 1;
$next_index = $current_index + 1;
?>
<div class="container mt-4">
    <div class="d-flex justify-content-between">
        <?php if ($prev_index >= 0): ?>
            <a href="<?php echo $keys[$prev_index]; ?>" class="btn btn-outline-primary">&larr; <?php echo $pages[$keys[$prev_index]]; ?></a>
        <?php else: ?>
            <span></span>
        <?php endif; ?>
        <?php if ($next_index < count($keys)): ?>
            <a href="<?php echo $keys[$next_index]; ?>" class="btn btn-outline-primary"><?php echo $pages[$keys[$next_index]]; ?> &rarr;</a>
        <?php else: ?>
            <span></span>
        <?php endif; ?>
    </div>
</div>
