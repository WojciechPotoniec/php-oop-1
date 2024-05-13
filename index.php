<?php
include __DIR__ . '/Views/header.php';
include __DIR__ . '/Models/Movie.php';
include __DIR__ . '/Models/Book.php';

$movie = Movie::printMovies();
$book = Book::printBooks();
// var_dump($book);
?>

<main class="container">
    <section>
        <h2>Movies</h2>
        <div class="row">
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
        </div>
    </section>
    <section>
        <h2>Books</h2>
        <div class="row">
            <?php foreach ($book as $item) { ?>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="<?= $item->cover ?>" class="card-img-top" alt="<?= $item->title ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item->title ?></h5>
                            <!-- <p class="card-text"><?= $item->longoverview ?></p> -->
                            <p class="card-text"><?= $item->price ?></p>
                            <div><?= $item->rating ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</main>

<?php
include __DIR__ . '/Views/footer.php';