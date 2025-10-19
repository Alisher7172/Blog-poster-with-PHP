<?php
$title = "Prices";
require 'includes/header.php';
require 'database.php';

$id = $_GET['id'] ?? null;

$statement = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
$statement->execute([$id]);
$post = $statement->fetch();
?>



<div class="container mt-5">
    <h1><?= $post['title'] ?></h1>
    <p class="fs-5 col-md-8"><?= $post['body'] ?></p>
    <p><small class="text-body-secondary"><?= $post['created_at'] ?></small></p>
</div>


<?php require 'includes/footer.php'; ?>