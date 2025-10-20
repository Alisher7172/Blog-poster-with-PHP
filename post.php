<?php
$title = "Post";
require 'includes/header.php';
require 'database.php';

$id = $_GET['id'] ?? null;
$post = false;

// Only query if we have a valid DB connection
if (isset($pdo) && $pdo instanceof PDO && $id) {
    try {
        $statement = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
        $statement->execute([$id]);
        $post = $statement->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Query failed
        $post = false;
    }
}
?>

<div class="container mt-5">
    <?php if ($post): ?>
        <h1><?= htmlspecialchars($post['title']) ?></h1>
        <p class="fs-5 col-md-8"><?= nl2br(htmlspecialchars($post['body'])) ?></p>
        <p><small class="text-body-secondary"><?= htmlspecialchars($post['created_at']) ?></small></p>
        <div class="mt-4">
            <a href="blog.php" class="btn btn-secondary">← Back to Blog</a>
        </div>
    <?php else: ?>
        <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">Post Not Found</h4>
            <p>The post you're looking for doesn't exist or the database connection is unavailable.</p>
            <hr>
            <p class="mb-0"><a href="blog.php" class="alert-link">Return to Blog</a></p>
        </div>
    <?php endif; ?>
</div>


<?php require 'includes/footer.php'; ?>