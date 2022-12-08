<?php

include __DIR__ . '/db.php';

// var_dump($movies);
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>PHP OOP</title>
    <!-- Bootstap CDN -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
    <!-- CSS link -->
    <link rel='stylesheet' href='./style.css'>
</head>

<body>
    <div class="container">
        <!-- title -->
        <h1 class="text-center mb-3">Movies</h1>

        <!-- row -->
        <div class="row row-cols-4 g-4">
            <?php foreach ($movies as $movie) { ?>
                <!-- col -->
                <div class="col">
                    <!-- card -->
                    <div class="card border-0 rounded-0">
                        <!-- img -->
                        <div class="card_img">
                            <img src="<?= $movie->src; ?>" alt="<?= $movie->title; ?>" class="w-100">
                        </div>

                        <!-- body -->
                        <div class="card_body p-2">
                            <!-- movie title -->
                            <h4><?= $movie->get_title(); ?> (<?= $movie->year; ?>)</h4>

                            <!-- movie cast -->
                            <h5 class="mb-1 p-0">Cast</h5>
                            <ul class="mb-2 p-0">
                                <?php foreach ($movie->cast as $actor) { ?>
                                    <li><?= $actor; ?></li>
                                <?php } ?>
                            </ul>

                            <!-- movie genres -->
                            <h5 class="mb-1 p-0">Genres</h5>
                            <ul class="mb-2 p-0">
                                <?php foreach ($movie->genres as $genre) { ?>
                                    <li><?= $genre; ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Bootstrap script -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>
</body>

</html>