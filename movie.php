<?php

$film = $_GET['film'] ?? 'default';


$infoPath = __DIR__ . "/movies/$film/info.txt";
$reviewsPath = __DIR__ . "/movies/$film/reviews.txt";


$info = file_exists($infoPath) ? file($infoPath, FILE_IGNORE_NEW_LINES) : [];
$reviews = file_exists($reviewsPath) ? file($reviewsPath, FILE_IGNORE_NEW_LINES) : [];


if (!empty($info)) {
    $title = $info[0];
    $rating = $info[1];
    $genre = $info[2];
    $duration = $info[3];
    $director = $info[4];
    $releaseDate = $info[5];
    $cast = $info[6];
    $synopsis = $info[7];
} else {
    
    $title = "Movie Not Found";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?> - Movie Review</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'includes/nav.php'; ?>
    <header>
        <h1><?= htmlspecialchars($title) ?></h1>
    </header>
    <main>
        <?php if ($title !== "Movie Not Found"): ?>
        <section class="movie-details">
            <img src="images/<?= htmlspecialchars($film) ?>.jpeg" alt="<?= htmlspecialchars($title) ?> Poster" class="movie-poster">
            <div>
                <p><strong>Rating:</strong> <?= htmlspecialchars($rating) ?></p>
                <p><strong>Genre:</strong> <?= htmlspecialchars($genre) ?></p>
                <p><strong>Duration:</strong> <?= htmlspecialchars($duration) ?></p>
                <p><strong>Director:</strong> <?= htmlspecialchars($director) ?></p>
                <p><strong>Release Date:</strong> <?= htmlspecialchars($releaseDate) ?></p>
                <p><strong>Cast:</strong> <?= htmlspecialchars($cast) ?></p>
                <p><strong>Synopsis:</strong> <?= htmlspecialchars($synopsis) ?></p>
            </div>
        </section>
        <section class="user-reviews">
            <h2>Reviews</h2>
            <?php foreach ($reviews as $review): ?>
                <?php list($reviewer, $starRating, $reviewDate, $comment) = explode('|', $review, 4); ?>
                <div class="review">
                    <p><strong><?= htmlspecialchars($reviewer) ?>:</strong> <span><?= htmlspecialchars($starRating) ?></span> <em><?= htmlspecialchars($reviewDate) ?></em></p>
                    <p><?= htmlspecialchars($comment) ?></p>
                </div>
            <?php endforeach; ?>
        </section>
        <?php else: ?>
        <p>Sorry, the requested movie was not found.</p>
        <?php endif; ?>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
