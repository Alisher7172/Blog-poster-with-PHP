<?php
session_start();
$title = "Blog";
require 'includes/header.php';
require 'database.php';

// If DB connection failed, avoid fatal errors and show a friendly notice
$posts = [];
if (isset($pdo) && $pdo instanceof PDO) {
    $statement = $pdo->prepare("SELECT * FROM posts ORDER BY created_at DESC");
    $statement->execute();
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Optionally surface the connection issue via session message
    if (!empty($db_error)) {
        $_SESSION['message'] = $db_error;
        $_SESSION['message_type'] = 'danger';
    } else {
        $_SESSION['message'] = 'Database connection is not available. Please try again later.';
        $_SESSION['message_type'] = 'warning';
    }
}

// Display message if it exists in session
$message = '';
if (isset($_SESSION['message'])) {
    $message_type = $_SESSION['message_type'] ?? 'info';
    $message = '<div class="alert alert-' . $message_type . ' alert-dismissible fade show" role="alert">';
    $message .= htmlspecialchars($_SESSION['message']);
    $message .= '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
    $message .= '</div>';

    // Clear the message after displaying
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['DELETE'])) {
    $postId = $_POST['post_id'];

    if (isset($pdo) && $pdo instanceof PDO) {
        try {
            $deleteStatement = $pdo->prepare("DELETE FROM posts WHERE id = :id");
            $deleteStatement->execute(['id' => $postId]);

            $_SESSION['message'] = 'Post deleted successfully!';
            $_SESSION['message_type'] = 'success';
        } catch (PDOException $e) {
            $_SESSION['message'] = 'Error deleting post: ' . htmlspecialchars($e->getMessage());
            $_SESSION['message_type'] = 'danger';
        }
    } else {
        $_SESSION['message'] = 'Cannot delete post because the database connection is unavailable.';
        $_SESSION['message_type'] = 'danger';
    }

    header("Location: blog.php");
    exit();
}
?>
<section class="py-5 text-center container">
    <?php if (!empty($message)) echo $message; ?>
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Add Blog Post</h1>
            <p class="lead text-body-secondary">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
            <p> <a href="post-create.php" class="btn btn-primary my-2">Create Post</a> <a href="post.php" class="btn btn-secondary my-2">See Post</a> </p>
        </div>
    </div>
</section>
<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach ($posts as $post): ?>
                <div class="col">
                    <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                        <div class="card-body">
                            <a href="post.php?id=<?= $post['id'] ?>">
                                <h5><?= $post['title'] ?></h5>
                            </a>
                            <h5><?= $post['title'] ?></h5>
                            <p class="card-text"><?= $post['body'] ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="post-edit.php?id=<?= $post['id'] ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    <form method="POST" onsubmit="return confirm('Do you really want to delete post ?')">
                                        <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                                        <input type="hidden" name="DELETE">
                                        <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button>
                                    </form>
                                </div><small class="text-body-secondary">9 mins</small>
                            </div>
                            <small><?= $post['created_at'] ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php require 'includes/footer.php'; ?>