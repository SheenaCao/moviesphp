<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINECRITIQUE Home</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'includes/nav.php'; ?>
    <header>
        <h1>Welcome to CINECRITIQUE</h1>
    </header>
    <main>
        <section class="featured-movies">
            <h2>Featured Movies</h2>
            <ul>
                <li><a href="movie.php?film=mulan">Mulan (2020)</a></li>
                <li><a href="movie.php?film=frozen">Frozen II (2019)</a></li>
                <li><a href="movie.php?film=raya">Raya and The Last Dragon (2021)</a></li>
                <li><a href="movie.php?film=red">Turning Red (2022)</a></li>
            </ul>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
