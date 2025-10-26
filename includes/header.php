

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title><?php echo $title ?? 'PHP Blog'; ?></title>
    <link rel="icon" type="image/x-icon" href="pictures/favicon.jpg">
</head>
<body>
    <header data-bs-theme="dark">
        <?php require 'navbar.php'; ?>
    </header>
    <main>