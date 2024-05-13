<?php
include __DIR__ . '/Views/header.php';
include __DIR__ . '/Models/Movie.php';

$movie = Movie::printMovies();
// var_dump($movie);
?>

<main class="container">
    <section>
        <h2>Movies</h2>
        <?php foreach ($movie as $item) { ?>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card">
                    <img src="<?= $item->cover ?>" class="card-img-top" alt="<?= $item->title ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item->title ?></h5>
                        <p class="card-text"><?= $item->overview ?></p>
                        <p class="card-text"><?= $item->price ?></p>
                        <div><?= $item->rating ?></div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>
</main>

<?php
include __DIR__ . '/Views/footer.php';