<?php require VIEWS . '/incs/header.php'; ?>
<main class="main py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php
                foreach ($posts as $post): ?>
                    <div class="card">
                        <div class="card-body mb-3">
                            <h5 class="card-title"><?= $post['title'] ?></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="post/<?= $post['slug'] ?>">Go somewhere</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php require  VIEWS . '/incs/sidebar.php' ?>
        </div>
    </div>
</main>

<?php require VIEWS . '/incs/footer.php'; ?>